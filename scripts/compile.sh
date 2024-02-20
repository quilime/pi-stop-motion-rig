#!/bin/bash

set -x

FRAMERATE="${1:-6}" # default framerate to 6
ROOT='/home/admin/pi-stop-motion-rig'
DATE=`date +%F_%H-%M-%S`

ffmpeg -framerate $FRAMERATE -pattern_type glob -i "$ROOT/frames/*.jpg" -c:v libx264 -crf 27 -preset ultrafast "$ROOT/movies/$DATE.mp4"
