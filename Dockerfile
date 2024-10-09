# Usa la imagen base de PHP 8.2 FPM
FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    curl \
    gnupg2 \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd

# Instalar Node.js y npm (v18.x)
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar el composer desde el contenedor de composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Copiar el código de la aplicación
COPY . .

# Instalar las dependencias de PHP
RUN composer install

# Instalar las dependencias de JavaScript
RUN npm install


