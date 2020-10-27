#!/bin/sh

DOCKER_STAFF="docker-compose.yml"

docker-compose -f ${DOCKER_STAFF} down
docker-compose -f ${DOCKER_STAFF} build
docker-compose -f ${DOCKER_STAFF} up -d
docker-compose -f ${DOCKER_STAFF} exec -T staffweb composer install
docker-compose -f ${DOCKER_STAFF} run --rm --no-deps staff_transpiler npm install
docker-compose -f ${DOCKER_STAFF} run --rm --no-deps staff_transpiler npm run dev
docker-compose -f ${DOCKER_STAFF} exec -T staffweb php artisan config:cache

echo "

 ______         __ __     __                                               __ 
|   __ \.--.--.|__|  |.--|  |    .-----.--.--.----.----.-----.-----.-----.|  |
|   __ <|  |  ||  |  ||  _  |    |__ --|  |  |  __|  __|  -__|__ --|__ --||__|
|______/|_____||__|__||_____|    |_____|_____|____|____|_____|_____|_____||__|
                                                                              

"