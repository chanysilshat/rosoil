<?

$arUrlRewrite = array(


	/**RUSSIAN LANG */	
	array(
		"CONDITION"	=>	"#^/ru/([0-9a-zA-Z_/]+)/([0-9a-zA-Z_/]+).([0-9a-zA-Z_]+)?#",
		"RULE"	=>	"current_lang=ru&realPathChild=/$1/lang/ru/$2.$3&request=$4",
		"PATH"	=>	"/$1/$2.$3",
	),

	

	array(
		"CONDITION"	=>	"#^/ru/([0-9a-zA-Z_]+).([0-9a-zA-Z_]+)?#",
		"RULE"	=>	"current_lang=ru&realPath=/lang/ru/$1.$2&request=$3",
		"PATH"	=>	"/$1.$2",
	),

	array(
		"CONDITION"	=>	"#^/ru/([0-9a-zA-Z_/]+)#",
		"RULE"	=>	"current_lang=ru&&realPathIndex=$1/lang/ru/index.php&request=$3",
		"PATH"	=>	"/$1/index.php",
	),

	array(
		"CONDITION"	=>	"#^/ru/#",
		"RULE"	=>	"current_lang=ru&&realPathIndex=/lang/ru/index.php&request=$3",
		"PATH"	=>	"/index.php",
	),
	array(
		"CONDITION"	=>	"#^/ru#",
		"RULE"	=>	"current_lang=ru&&realPathIndex=/lang/ru/index.php&request=$3",
		"PATH"	=>	"/index.php",
	),

	/**ENGLISH LANG */	

	array(
		"CONDITION"	=>	"#^/en/([0-9a-zA-Z_/]+)/([0-9a-zA-Z_/]+).([0-9a-zA-Z_]+)?#",
		"RULE"	=>	"current_lang=en&realPathChild=/$1/lang/en/$2.$3&request=$4",
		"PATH"	=>	"/$1/$2.$3",
	),

	

	array(
		"CONDITION"	=>	"#^/en/([0-9a-zA-Z_]+).([0-9a-zA-Z_]+)?#",
		"RULE"	=>	"current_lang=en&realPath=/lang/en/$1.$2&request=$3",
		"PATH"	=>	"/$1.$2",
	),

	array(
		"CONDITION"	=>	"#^/en/([0-9a-zA-Z_/]+)#",
		"RULE"	=>	"current_lang=en&&realPathIndex=/$1/lang/en/index.php&request=$3",
		"PATH"	=>	"/$1/index.php",
	),

	array(
		"CONDITION"	=>	"#^/en/#",
		"RULE"	=>	"current_lang=en&&realPathIndex=/lang/en/index.php&request=$3",
		"PATH"	=>	"/index.php",
	),
	array(
		"CONDITION"	=>	"#^/en#",
		"RULE"	=>	"current_lang=en&&realPathIndex=/lang/en/index.php&request=$3",
		"PATH"	=>	"/index.php",
	),

	/**CHINA LANG */	

	array(
		"CONDITION"	=>	"#^/ch/([0-9a-zA-Z_/]+)/([0-9a-zA-Z_/]+).([0-9a-zA-Z_]+)?#",
		"RULE"	=>	"current_lang=ch&realPathChild=/$1/lang/ch/$2.$3&request=$4",
		"PATH"	=>	"/$1/$2.$3",
	),

	

	array(
		"CONDITION"	=>	"#^/ch/([0-9a-zA-Z_]+).([0-9a-zA-Z_]+)?#",
		"RULE"	=>	"current_lang=ch&realPath=/lang/ch/$1.$2&request=$3",
		"PATH"	=>	"/$1.$2",
	),

	array(
		"CONDITION"	=>	"#^/ch/([0-9a-zA-Z_/]+)#",
		"RULE"	=>	"current_lang=ch&&realPathIndex=$1/lang/ch/index.php&request=$3",
		"PATH"	=>	"/$1/index.php",
	),

	array(
		"CONDITION"	=>	"#^/ch/#",
		"RULE"	=>	"current_lang=ch&&realPathIndex=/lang/ch/index.php&request=$3",
		"PATH"	=>	"/index.php",
	),
	array(
		"CONDITION"	=>	"#^/ch#",
		"RULE"	=>	"current_lang=ch&&realPathIndex=/lang/ch/index.php&request=$3",
		"PATH"	=>	"/index.php",
	),
);

?>