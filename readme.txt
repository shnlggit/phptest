Apache/conf/httpd.conf:
Alias /phptest d:/work/php/phptest/html
<Directory "d:/work/php/phptest/html">
    Options Indexes FollowSymLinks
    AllowOverride None
    Require all granted
</Directory>
