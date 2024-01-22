# pi-stop-motion-rig

Python code for a Raspberry Pi powered rig that allows stop motion animations to be created, viewed, and saved.

## Installation

For this example, we are using a Raspberry Pi 3

Install 32 Bit Rasbian OS

Install dependencies

`apt-get install libsdl2-image-2.0-0`

Clone this repository to your rpi

`cd` into the repo folder

Create virtual env 

`python -m venv venv`

Source the env

`source venv/bin/activate`

Install requirements

`pip install -r requirements.txt`

Attach hardware buttons to your Raspberry Pi (read source code to get pins numbers).

Run 

`python src/run.py` 

Enjoy!


## More Information 

Instructables on how to set up the station - https://www.instructables.com/id/Raspberry-Pi-Stop-Motion-Animation-Rig/

Notion for updates (4/26/2020) - https://www.notion.so/Wonderful-Idea-Co-Animation-Station-6d96c9e342f64038beea19c1f99a9954
