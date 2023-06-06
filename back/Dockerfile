# Use a imagem base para o PHP com Apache
FROM php:8.2-apache

# Defina o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Copie os arquivos do projeto para o diretório de trabalho
COPY . .

# Instale as dependências do Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo_mysql

# Execute os comandos do Laravel para configuração e otimização
RUN cp .env.example .env \
    && php artisan key:generate \
    && php artisan config:cache

# Defina as permissões corretas para o Apache
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Exponha a porta 80 para acesso externo
EXPOSE 80

# Execute o Apache como processo principal do contêiner
CMD ["apache2-foreground"]
