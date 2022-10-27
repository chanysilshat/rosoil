<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/ru/([0-9a-zA-Z_/]+)/([0-9a-zA-Z_/]+).([0-9a-zA-Z_]+)?#',
    'RULE' => 'current_lang=ru&realPathChild=/$1/lang/ru/$2.$3&request=$4',
    'PATH' => '/$1/$2.$3',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/en/([0-9a-zA-Z_/]+)/([0-9a-zA-Z_/]+).([0-9a-zA-Z_]+)?#',
    'RULE' => 'current_lang=en&realPathChild=/$1/lang/en/$2.$3&request=$4',
    'PATH' => '/$1/$2.$3',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/ch/([0-9a-zA-Z_/]+)/([0-9a-zA-Z_/]+).([0-9a-zA-Z_]+)?#',
    'RULE' => 'current_lang=ch&realPathChild=/$1/lang/ch/$2.$3&request=$4',
    'PATH' => '/$1/$2.$3',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/ru/([0-9a-zA-Z_]+).([0-9a-zA-Z_]+)?#',
    'RULE' => 'current_lang=ru&realPath=/lang/ru/$1.$2&request=$3',
    'PATH' => '/$1.$2',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/en/([0-9a-zA-Z_]+).([0-9a-zA-Z_]+)?#',
    'RULE' => 'current_lang=en&realPath=/lang/en/$1.$2&request=$3',
    'PATH' => '/$1.$2',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/ch/([0-9a-zA-Z_]+).([0-9a-zA-Z_]+)?#',
    'RULE' => 'current_lang=ch&realPath=/lang/ch/$1.$2&request=$3',
    'PATH' => '/$1.$2',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/ch/([0-9a-zA-Z_/]+)#',
    'RULE' => 'current_lang=ch&&realPathIndex=$1/lang/ch/index.php&request=$3',
    'PATH' => '/$1/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/en/([0-9a-zA-Z_/]+)#',
    'RULE' => 'current_lang=en&&realPathIndex=/$1/lang/en/index.php&request=$3',
    'PATH' => '/$1/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/ru/([0-9a-zA-Z_/]+)#',
    'RULE' => 'current_lang=ru&&realPathIndex=$1/lang/ru/index.php&request=$3',
    'PATH' => '/$1/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/delivery/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/delivery/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/ru/#',
    'RULE' => 'current_lang=ru&&realPathIndex=/lang/ru/index.php&request=$3',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/en/#',
    'RULE' => 'current_lang=en&&realPathIndex=/lang/en/index.php&request=$3',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/ch/#',
    'RULE' => 'current_lang=ch&&realPathIndex=/lang/ch/index.php&request=$3',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/ru#',
    'RULE' => 'current_lang=ru&&realPathIndex=/lang/ru/index.php&request=$3',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/en#',
    'RULE' => 'current_lang=en&&realPathIndex=/lang/en/index.php&request=$3',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/ch#',
    'RULE' => 'current_lang=ch&&realPathIndex=/lang/ch/index.php&request=$3',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
