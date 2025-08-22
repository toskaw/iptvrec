#!/usr/local/bin/bash
#echo "CHANNEL : $CHANNEL"
#echo "DURATION: $DURATION"
#echo "OUTPUT  : $OUTPUT"
#echo "TUNER : $TUNER"
#echo "TYPE : $TYPE"
#echo "MODE : $MODE"
RECORDER=/usr/local/bin/yt-dlp
TMP=${CHANNEL%/*}
CH=${TMP##*/}
echo ${URL}
sleep 60
URL=https://abema.tv/now-on-air/${CH}
if [ ${MODE} -eq 0 ]; then
  $RECORDER -f b ${URL} -o ${OUTPUT} > /dev/null 
elif [ ${MODE} -eq 1 ]; then
  $RECORDER -f b ${URL} -o ${OUTPUT}  > /dev/null 
  /home/tos/bin/comskip --ini=/home/tos/bin/comskip.ini --vaapi -d 255 ${OUTPUT} > /dev/null
fi

