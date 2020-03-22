# UniFi

## Installation

1. Open console
1. Execute:


        cd ~ && git clone https://github.com/Somos-Networks/UniFi-API-client project --branch dev && cd ./project && sudo chmod +x ./deploy.sh && sudo ./deploy.sh
        
Tested on Ubuntu 18.04.3 LTS (x64), DigitalOcean.


## Structure

  * [src/config.php](src/config.php) - configuration of API access
  * [src/examples](src/examples) - vanilla examples of api usages
  * [src/custom_example.php](src/custom_example.php) - example of how you can use API by your own


## Usage

  1. Open console
  1. Move to project folder
  1. Execute:
  

        php src/examples/list_alarms.php

