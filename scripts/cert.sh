# certbot
certbot certonly \
    --agree-tos \
    --rsa-key-size 4096 \
    --webroot \
    --webroot-path $APACHE_DOCUMENT_ROOT \
    --domain $APP_DOMAIN \
    --email g520198h@gmail.com \
    --no-eff-email