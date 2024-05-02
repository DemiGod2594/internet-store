SET NAMES 'utf8';

USE webdevkin;
--
-- Описание для таблицы brands
--
DROP TABLE IF EXISTS brands;
CREATE TABLE brands (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  brand VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 7
AVG_ROW_LENGTH = 2730
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы brands
--
INSERT INTO brands VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Acer'),
(4, 'Lenovo'),
(5, 'Asus'),
(6, 'Gigabyte');
