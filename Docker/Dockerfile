FROM php:5.6-apache
# In MAINTAINER we can specify the creator and that keeps this dockerfile version.
MAINTAINER Jonathan garcia <jonathan.garcia@corellis.eu>
# The RUN allows to execute commands within the container, the docker-php-ext-install installs PHP extensions within the container.
# You can also add after other extensions desired.
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql