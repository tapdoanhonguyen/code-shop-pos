<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-17 14:35:15 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:35:29 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:35:32 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:36:51 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:37:56 --> Query error: Unknown column 'brand' in 'field list' - Invalid query: SELECT `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:38:18 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:50:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1' at line 1 - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`, *
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:52:00 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:53:41 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`, `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:55:24 --> Query error: Column 'image' in field list is ambiguous - Invalid query: SELECT `sma_products`.`id`, `sma_products`.`code`, `sma_products`.`name`, `sma_products`.`type`, `sma_products`.`slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`, `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:55:35 --> Query error: Column 'code' in where clause is ambiguous - Invalid query: SELECT `sma_products`.`id`, `sma_products`.`code`, `sma_products`.`name`, `sma_products`.`type`, `sma_products`.`slug`, `price`, CONCAT('http://sma.test/assets/uploads/', sma_products.image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`, `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:55:57 --> Query error: Column 'code' in where clause is ambiguous - Invalid query: SELECT `sma_products`.`id`, `sma_products`.`code`, `sma_products`.`name`, `sma_products`.`type`, `sma_products`.`slug`, `price`, CONCAT('http://sma.test/assets/uploads/', sma_products.image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`, `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:56:00 --> Query error: Column 'code' in where clause is ambiguous - Invalid query: SELECT `sma_products`.`id`, `sma_products`.`code`, `sma_products`.`name`, `sma_products`.`type`, `sma_products`.`slug`, `price`, CONCAT('http://sma.test/assets/uploads/', sma_products.image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`, `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:56:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `category_id` = '1'
ORDER BY `code`
 LIMIT 10' at line 2 - Invalid query: SELECT *
WHERE `category_id` = '1'
ORDER BY `code`
 LIMIT 10
ERROR - 2018-07-17 14:57:31 --> Severity: error --> Exception: Call to undefined method Site::getCategoryByCode() /Users/Saleem/Desktop/Projects/ci/sma/app/models/api/Products_api.php 38
ERROR - 2018-07-17 14:58:29 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 14:59:15 --> Severity: error --> Exception: Call to undefined method Site::getCategoryByCode() /Users/Saleem/Desktop/Projects/ci/sma/app/models/api/Products_api.php 38
ERROR - 2018-07-17 14:59:25 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 15:03:33 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 15:03:36 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 15:06:50 --> Query error: Unknown column 'type' in 'field list' - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_categories`
WHERE `code` = 'IT'
 LIMIT 1
ERROR - 2018-07-17 15:06:50 --> Query error: Unknown column 'code' in 'where clause' - Invalid query: UPDATE `sma_sessions` SET `timestamp` = 1531811210, `data` = '__ci_last_regenerate|i:1531811013;requested_page|s:5:\"admin\";identity|s:18:\"owner@tecdiary.com\";username|s:5:\"owner\";email|s:18:\"owner@tecdiary.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1531640392\";last_ip|s:9:\"127.0.0.1\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";warehouse_id|N;view_right|s:1:\"0\";edit_right|s:1:\"0\";allow_discount|s:1:\"0\";biller_id|N;company_id|N;show_cost|s:1:\"0\";show_price|s:1:\"0\";'
WHERE `code` = 'IT'
AND `id` = 'kbnd89q4cvsut0uulc0ekt3unu34ikga'
ERROR - 2018-07-17 15:06:50 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2018-07-17 15:06:50 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2018-07-17 15:10:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '}.code 'IT'
ORDER BY `code`
 LIMIT 10' at line 4 - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE `{This->db-` > db_prefix('categories')}.code 'IT'
ORDER BY `code`
 LIMIT 10
ERROR - 2018-07-17 15:10:29 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::db_prefix() /Users/Saleem/Desktop/Projects/ci/sma/app/models/api/Products_api.php 39
ERROR - 2018-07-17 15:10:53 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT `id`, `code`, `name`, `type`, `slug`, `price`, CONCAT('http://sma.test/assets/uploads/', image) as image_url, `tax_method`, `tax_rate`, `unit`, `brand`, `category_id` as `category`
FROM `sma_products`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE `sma_categories`.`code` = 'IT'
ORDER BY `code`
 LIMIT 10
