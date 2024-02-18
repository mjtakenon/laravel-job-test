DROP DATABASE IF EXISTS template;
DROP USER IF EXISTS template_user;

CREATE DATABASE template DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
CREATE USER 'template_user'@'%' identified BY 'p2Z76!3H';
GRANT ALL PRIVILEGES ON template.* TO 'template_user'@'%';

FLUSH PRIVILEGES;
