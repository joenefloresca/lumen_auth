#!/bin/bash

sudo systemd-run --slice=machine \
 rkt run \
 --net=host \
 --dns=host \
 --hosts-entry=host \
 --insecure-options=all \
 registry-1.docker.io/tonypai/docker-lumen:latest \
 --name=lumen-auth