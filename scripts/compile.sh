#!/bin/bash

set -x

ROOT='/home/admin/pi-stop-motion-rig'
MOVIE_NAME=$1

ffmpeg -framerate 6 -pattern_type glob -i "$ROOT/frames/*.jpg" -c:v libx264 -crf 27 -preset ultrafast "$ROOT/movies/$1.mp4"
