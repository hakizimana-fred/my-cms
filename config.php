<?php
ini_set("dispaly_errors", true);
date_default_timezone_set("Africa/Kampala");
define("DB_DSN", "mysql:host=localhost;dbname=cms");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 5);
define("ADMIN_USERNAME", "admin");
define("ADMIN_PASSWORD", "admin");
require(CLASS_PATH ."/Article.php");


