# Server-Sent-Events

PUSH FROM Server TO Client example.

## NGINX

下記内容を nginx_server.conf に追記
php-fpm を使っている場合のみ必要

```
fastcgi_keep_conn on;

proxy_buffering off;
gzip off;
```

## Refs

https://qiita.com/aosho235/items/0068d5aa24196890d161
