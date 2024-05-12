FROM php:8.0-apache

#
EXPOSE 5173

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
# ADD：ローカルのファイルをDockerコンテナ内にコピーする
ADD ./docker/app/php.ini /usr/local/etc/php/
ADD ./docker/app/000-default.conf /etc/apache2/sites-enabled/

# Composerのインストール
# RUN：コンテナ内でコマンド実行する
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

#Node.jsのインストール
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs

# ミドルウェアのインストール
RUN apt-get update \
    && apt-get install -y \
    git \
    zip \
    unzip \
    vim \
    libpng-dev \
    libpq-dev \
    && docker-php-ext-install pdo_mysql

# Laravelで必要になるmodRewriteを有効化する
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

# TLS有効化
ADD ./docker/app/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
ADD ./docker/app/fqdn.conf /etc/apache2/conf-available/fqdn.conf
RUN a2enconf fqdn
RUN a2enmod rewrite

WORKDIR /var/www/html/Zap-Tunes