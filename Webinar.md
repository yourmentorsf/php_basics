Описание:

1. Нужно научить работать с взаимодействием PHP с базами данных.
2. Рассказать о способах получения данных GET и POST,

- работе с сессиями и cookie,
- SQL-запросах и
- функциях для работы с датой и временем,

3. Показать примеры.
4. Также можно рассмотреть формы авторизации и работа с файлами.

CREATE TABLE `app_db`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(64) NOT NULL , `age` TINYINT NOT NULL DEFAULT '18' , `password` VARCHAR(128) NOT NULL , `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `role` VARCHAR(32) NOT NULL DEFAULT 'user' , PRIMARY KEY (`id`)) ENGINE = InnoDB;
