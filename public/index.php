<?php

/**
 * Отдаем специфичные для ОС разделители
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * Устанавливаем корневую директорию
 */
define('BASEPATH', dirname(__DIR__) . DS);

/**
 * Директория с приложением
 */
define('APP', BASEPATH . 'app' . DS);

/**
 * Директория для публичных файлов
 */
define('WEB', BASEPATH . 'public' . DS);

/**
 * Директория для зависимостей
 */
define('VENDOR', BASEPATH . 'vendor' . DS);

/**
 * Устанавливаем директорию для конфигурационных файлов
 */
define('CONFIG', APP . 'config' . DS);

/**
 * Подключаем систему
 */
require_once '../app/init.php';

/**
 * Запускаем приложение
 */
(new \System\App());

