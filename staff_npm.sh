#!/bin/sh

CMD="$@"
if [ -z "$CMD" ]; then
	CMD="bash"
fi
docker-compose run --rm --no-deps staff_transpiler $CMD
