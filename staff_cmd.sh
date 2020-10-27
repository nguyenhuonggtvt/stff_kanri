#!/bin/sh

DOCKER_STAFF="docker-compose.yml"
CMD="$@"
if [ -z "$CMD" ]; then
	CMD="bash"
fi
docker-compose -f ${DOCKER_STAFF} exec staffweb $CMD
