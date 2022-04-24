#!/bin/bash
yum install -y httpd
wget https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
wget http://rpms.remirepo.net/enterprise/remi-release-6.rpm
rpm -Uvh remi-release-6.rpm
rpm -Uvh epel-release-latest-6.noarch.rpm
yum install yum-utils
yum-config-manager --enable remi-php72
yum install --disablerepo="*" --enablerepo="remi,remi-php72" php php-fpm php-cl
yum install php72

