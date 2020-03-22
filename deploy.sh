#!/usr/bin/env bash

apt update
sudo apt install php7.2 php7.2-common php7.2-opcache php7.2-cli php7.2-gd php7.2-curl php7.2-mysql -y
apt install composer -y

composer install
