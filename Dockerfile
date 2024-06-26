# 使用官方 PHP 镜像。选择带有 CLI 的版本
FROM php:7.4-cli

# 将您的 PHP 脚本、路由器脚本、assets 目录和 forms 目录复制到容器的工作目录
COPY index.php /usr/src/myapp/index.php
COPY router.php /usr/src/myapp/router.php
COPY assets /usr/src/myapp/assets
COPY forms /usr/src/myapp/forms

# 设置工作目录
WORKDIR /usr/src/myapp

# 使用 PHP 内置服务器并通过 router.php 路由所有请求
CMD php -S 0.0.0.0:${PORT} router.php
