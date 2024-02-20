#!/bin/bash

set -x

ROOT='/home/admin/pi-stop-motion-rig'
DATE=`date +%F_%H-%M-%S`
FILE_NAME=${1:-$DATE}

ffmpeg -framerate 6 -pattern_type glob -i "$ROOT/frames/*.jpg" -c:v libx264 -crf 27 -preset ultrafast "$ROOT/movies/$FILE_NAME.mp4"