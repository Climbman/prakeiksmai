#!/bin/bash

sudo mkdir -p /tmp/prakeiksmai
sudo rm -r /tmp/prakeiksmai/*
sudo cp -r /var/www/html/prakeiksmai/* /tmp/prakeiksmai/
sudo rm -r /var/www/html/prakeiksmai/*
sudo cp -r ../prakeiksmai/* /var/www/html/prakeiksmai/
sudo chown -R www-data /var/www/html/prakeiksmai
sudo chgrp -R www-data /var/www/html/prakeiksmai
