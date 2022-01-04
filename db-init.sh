#!/bin/bash

CONTAINER="admin-mysql_db.1.jhmt04hxq732lvnr76m7ikzlv"

docker cp ./*.sql $CONTAINER:/tmp/BE_180061.sql
docker cp ./script.sh $CONTAINER:/tmp/script.sh
docker exec -it $CONTAINER  chmod 777 /tmp/script.sh
docker exec -it $CONTAINER /bin/sh /tmp/script.sh
docker exec -it $CONTAINER  rm /tmp/BE_180061.sql
docker exec -it $CONTAINER  rm /tmp/script.sh
echo "KONIEC"