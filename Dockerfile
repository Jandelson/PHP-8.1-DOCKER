FROM php:8.1.0-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apt-get update && apt-get install -y

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user


#Server build in
EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www"]
# Set working directory
WORKDIR /var/www

USER $user