FROM php:8.1-fpm-alpine

# Get frequently used tools
RUN apk update && apk add \
    libpq-dev 

# Install extensions
RUN docker-php-ext-install \
    bcmath \
    pdo_pgsql 

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Create user based on provided user ID
ARG HOST_UID
RUN adduser --disabled-password --gecos "" --uid $HOST_UID demo

# Switch to that user
USER demo