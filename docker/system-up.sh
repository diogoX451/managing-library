
BASEDIR=${PWD}/$(dirname "$0")

echo "--------- CRIANDO NETWORK ----------"
sudo docker network rm library_net
sudo docker network create --subnet 174.30.0.0/16 library_net

sudo docker rm -f library
sudo docker rm -f db

echo "--------- BUILDANDO A IMAGEM ----------"
sudo docker build -t library_image ${BASEDIR}


echo "--------- CRIANDO CONTAINER ----------"
sudo docker run --restart=always --name library -idt --net library_net --ip=174.30.0.2 -v "${BASEDIR}/..":/var/www/html -v "${BASEDIR}../../.local":/.local --privileged library_image
sudo docker run --restart=always --name db -idt \
  --net library_net --ip=174.30.0.3 \
  -e MYSQL_ROOT_PASSWORD=toor \
  -e MYSQL_DATABASE=library_db \
  -e MYSQL_USER=library_user \
  -e MYSQL_PASSWORD=toor \
  -v "${BASEDIR}/../../db":/var/lib/mysql \
  --shm-size=1g \
  mysql:8

echo "--------- CRIANDO HOSTS ----------"
if grep "174.30.0.2" /etc/hosts> /dev/null
then
    echo "--------- HOST JÁ EXISTE ----------"
    echo "--------- ATUALIZANDO PROJETO ----------"
    sudo docker exec library composer install
    sudo docker exec library php artisan migrate
    echo "LINK:  http://library.api"
    exit
fi
echo "--------- HOST CRIADA ----------"
sudo echo "174.30.0.2 library.api" | sudo tee -a /etc/hosts
echo "--------- ATUALIZANDO PROJETO ----------"
sudo docker exec library composer install
sudo docker exec library php artisan migrate
echo "LINK:  http://library.api"
