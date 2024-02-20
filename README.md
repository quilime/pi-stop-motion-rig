# pi-stop-motion-rig

Python code for a Raspberry Pi powered rig that allows stop motion animations to be created, viewed, and saved.

Fork of [Wonderful Idea Co. Animation Station](https://github.com/wonderfulideaco/pi-stop-motion-rig)



## Installation

For this example, we are using a Raspberry Pi 3, 32 Bit Rasbian OS

Install dependencies

`apt-get install libsdl2-image-2.0-0 ffmpeg`

libsd12 adds support for BMP, GIF, JPEG, PNG, TGA, and more, used by Pygame

ffmpeg used for frame compilation

for audio and font support

`sudo apt install libsdl2-ttf-2.0-0 libsdl2-mixer-2.0-0`

(via https://github.com/pygame/pygame/issues/2503)

Clone this repository to your user (we're using `pi` in this case) home folder and `cd` into the repo folder

Create virtual env 

`python -m venv venv`

Source the env

`source venv/bin/activate`

Install requirements

`pip install -r requirements.txt`

Attach hardware buttons to your Raspberry Pi (read source code to get pins numbers).

Run 

`python src/run.py` 





## Autostart on Boot

Create file `~/start-animation-station.sh`

File contents: 

```sh
#!/bin/bash

# Change directory
cd /home/pi/pi-stop-motion-rig

# Activate python environment
source venv/bin/activate

# Run python script
python src/run.py
```


Make the script executable:

```sh
chmod +x /home/pi/start-animation-station.sh
```


Open a terminal and navigate to the LXDE-pi autostart directory:

```sh
cd ~/.config/lxsession/LXDE-pi
```


Add file `autostart` and add the following:

```sh
@/home/pi/start-animation-station.sh
```


Reboot your Raspberry Pi. The script should run automatically when the user logs in to the desktop.

Please note that the script will run with the permissions of the user who is logging in. Make sure the user has the necessary permissions to run the script and access any files or directories it uses.




## Webserver

Install [Caddy](https://caddyserver.com/) and PHP to host the `./public` folder to access and download processed videos.

Example Caddyfile:

```
:80 {
    # Set this path to your site's directory.
    root * /home/admin/pi-stop-motion-rig/public

    # Enable the static file server.
    file_server

    # compress HTTP reponses
    encode zstd gzip

    # Configures PHP
    php_fastcgi unix//run/php/php-fpm.sock
}
```

## More Information 

Instructables on how to set up the station - https://www.instructables.com/id/Raspberry-Pi-Stop-Motion-Animation-Rig/

Notion for updates (4/26/2020) - https://www.notion.so/Wonderful-Idea-Co-Animation-Station-6d96c9e342f64038beea19c1f99a9954
