#!/usr/bin/env sh

set -x
docker run -d -p 722:722 --name Test-Sel -v /home/jenkins/jenkins-php-selenium-test//src:/var/www/html php:7.2-apache
sleep 1
set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'

