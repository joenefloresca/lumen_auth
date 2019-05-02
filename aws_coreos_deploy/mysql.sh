#!/bin/bash

sudo systemd-run --slice=machine \
 rkt run \
 --net=host \
 --dns=host \
 --hosts-entry=host \
 --insecure-options=all \
 --set-env=MYSQL_ROOT_PASSWORD=joene032118 \
 --set-env=MYSQL_USER=root \
 --set-env=MYSQL_PASSWORD=joene032118 \
 --volume data,kind=host,source=/mnt/mysql/data \
 --mount volume=data,target=/var/lib/mysql \
 registry-1.docker.io/library/mysql:5.5.60 \
 --name=mysql