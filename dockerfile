FROM lscr.io/linuxserver/code-server:latest

# Install PHP and necessary extensions
RUN apt-get update \
    && apt-get install -y php8.1 php8.1-fpm php8.1-cli php8.1-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
