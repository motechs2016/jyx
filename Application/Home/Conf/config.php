<?php
return array(
	//模板配置
	'DEFAULT_THEME'         =>  'default',
	'TMPL_PARSE_STRING'		=> array(
		'__JS__'		=> __ROOT__ . '/Public/' . MODULE_NAME . '/js',
		'__CSS__' 		=> __ROOT__ . '/Public/' . MODULE_NAME . '/css',
		'__IMG__' 		=> __ROOT__ . '/Public/' . MODULE_NAME . '/images',
	),
);