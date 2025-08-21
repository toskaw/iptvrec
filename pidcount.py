#! /usr/bin/env python3
#coding:utf-8

#require bitstring
import bitstring
import math
import sys

filename = sys.argv[1]
packet_length = 188
#packet_length = 204
syncbyte = 0x47
f = bitstring.ConstBitStream(filename=filename)

count = 0
failcount = 0
summary = {}
first = True

pidNames = {
    0x0: 'PAT*', #PMTのPID一覧
    0x1: 'CAT*', #CAS関係
    0x10: 'NIT*', #伝送路情報(変調方式など)
    0x11: 'SDT/BAT*', #SDT:チャンネルの名称、送出されるEITの種類
    0x12: 'EIT*', #番組に関する情報。EPGに使用
    0x26: 'EIT*',
    0x27: 'EIT*',
    0x13: 'RST',
    0x14: 'TDT/TOT*', #現在時
    0x17: 'DCT',
    0x1e: 'DIT',
    0x1f: 'SIT',
    0x20: 'LIT',
    0x21: 'ERT',
    0x22: 'PCAT',
    0x23: 'SDTT*', #ソフトウェアダウンロード
    0x28: 'SDTT*',
    0x24: 'BIT*', #SI送信情報(EPG関連?)
    0x25: 'NBIT/LDT',
    0x29: 'CDT',
    0x2F: '多重フレームヘッダ情報',
    0x1fff: 'Null*', #ビットレート調整
    0x1fc8: 'PMT(1seg)*', #画像や音声のPID一覧(1segのみPMTのPIDは固定)
}


class TS:
    def __init__(self, packet):
        self.packet = packet
    
    def unpack(self):
        if packet_length == 188:
            #188-5(header+pointer)-4(CRC)=179, 179*8=1432bits
            self.sync, self.error, self.pid, self.scramble, self.counter, self.pointer, self.payload, self.crc = \
                self.packet.unpack('uint:8, bool, pad:2, uint:13, bits:2, pad:2, uint:4, uint:8, bits:1432, bytes:4')
        else:
            #204(16がリードソロモン)
            self.sync, self.error, self.pid, self.scramble, self.counter, self.pointer, self.payload, self.crc, self.reedsolomon = \
                self.packet.unpack('uint:8, bool, pad:2, uint:13, bits:2, pad:2, uint:4, uint:8, bits:1432, bytes:4, bytes:16')
            
        #find sync
        if self.sync != syncbyte:
            found = self.packet.find('0x47', bytealigned=True) #findには文字列で渡す…
            return True
        
        return False
    

while True:
    try:
        packet = f.read(packet_length*8) #bit
    except bitstring.ReadError: #終端
        break
        
    ts = TS(packet)
    if ts.unpack():
        #syncできなかったら戻る
        if ts.packet.bytepos != 0: #このパケット内にsyncがあったら
            f.bytepos = f.bytepos - packet_length + ts.packet.bytepos
        failcount += 1
    
    else:
        #カウンタチェック
        #if not first:
        #    print('PID:{}  {}'.format(ts.pid, ts.counter))

        if not ts.error:
            try:
                summary[ts.pid] += 1
            except KeyError:
                summary[ts.pid] = 1
        
    first = False
    count += 1

for pid, num in sorted(summary.items(), key=lambda x:x[1], reverse=True):
    try:
        pidName = pidNames[pid]
        print('PID {}({}): {}'.format(hex(pid), pidName, num))
    except KeyError:
        print('PID {}: {}'.format(hex(pid), num))

print('-------------------------------')
print('PID count:',len(summary))
print('Fail:', failcount)
print('Total:', count)