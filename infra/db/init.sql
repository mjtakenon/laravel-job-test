DROP DATABASE IF EXISTS mjtak_sandbox;
DROP USER IF EXISTS mjtak_sandbox_user;

CREATE DATABASE mjtak_sandbox DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
CREATE USER 'mjtak_sandbox_user'@'%' identified BY 'p2Z76!3H';
GRANT ALL PRIVILEGES ON mjtak_sandbox.* TO 'mjtak_sandbox_user'@'%';

FLUSH PRIVILEGES;
