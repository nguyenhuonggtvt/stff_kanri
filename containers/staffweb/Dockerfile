FROM amazonlinux:2

RUN echo -e "\ntimeout=300\n" | tee -a /etc/yum.conf

RUN amazon-linux-extras enable php7.4 epel && yum clean metadata

RUN yum install -y cronie rsyslog bc vi zip unzip wget gcc-c++ make curl git

# Install Apache + Postgresql-Client
RUN yum install -y httpd postgresql93 postgresql93-lib

# Install PHP 7.4
RUN yum install -y php php-cli php-common php-pgsql php-curl php-gd php-mbstring php-xmlrpc php-intl php-zlib php-bcmath

# Install php configuration file
# COPY ./envfiles/php.ini /etc/php.ini

# Set TimeZone to Japan
RUN cp /usr/share/zoneinfo/Japan /etc/localtime

# Copy nginx directory configuration
ADD ./envfiles/httpd/conf.d/* /etc/httpd/conf.d/

# Make dir for httpd logs
RUN mkdir -p /var/www/logs

# Set working directory
WORKDIR /var/www/html

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer

# Install poppler-utils
RUN yum install -y poppler-utils

# Start Apache
CMD [ "/usr/sbin/httpd", "-D", "FOREGROUND" ]
