#!/bin/bash

ffmpeg -r 12 -pattern_type glob -i '*.jpg' -c:v libx264 output.mp4