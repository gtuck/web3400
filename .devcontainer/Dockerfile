# Pinned PHP version so every student gets the same environment all semester.
# Bump deliberately between semesters, not automatically.
FROM mcr.microsoft.com/devcontainers/php:8.3

# Install MariaDB client
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get install -y mariadb-client \
    && apt-get clean -y && rm -rf /var/lib/apt/lists/*

# Install php-mysql drivers
RUN docker-php-ext-install mysqli pdo pdo_mysql
