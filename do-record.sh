#!/bin/sh
#echo "CHANNEL : $CHANNEL"
#echo "DURATION: $DURATION"
#echo "OUTPUT  : $OUTPUT"
#echo "TUNER : $TUNER"
#echo "TYPE : $TYPE"
#echo "MODE : $MODE"
MARGIN=200
DURATION=`expr $DURATION + $MARGIN`
RECORDER=/usr/local/bin/ffmpeg
echo $DURATION
if [ ${MODE} -eq 0 ]; then
  $RECORDER -i $CHANNEL -t $DURATION -c copy ${OUTPUT} > /dev/null 
elif [ ${MODE} -eq 1 ]; then
  $RECORDER -i $CHANNEL -t $DURATION -c copy ${OUTPUT} > /dev/null  
  /home/tos/bin/comskip --ini=/home/tos/bin/comskip.ini --vaapi -d 255 ${OUTPUT} > /dev/null
fi

