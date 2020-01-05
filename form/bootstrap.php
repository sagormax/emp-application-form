<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../vendor/autoload.php";

// # .env configuration
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
// getenv('S3_BUCKET');

