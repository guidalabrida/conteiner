# Usa a imagem base do PHP com Apache
FROM php:8.0-apache

# Instala extensões do PHP necessárias, se houver
RUN docker-php-ext-install mysqli

# Copia o conteúdo da pasta src para o diretório raiz do Apache
COPY ./src/ /var/www/html/

# Configura permissões apropriadas (opcional)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
