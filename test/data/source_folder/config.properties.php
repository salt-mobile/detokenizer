<?php

ini_set('memory_limit', '${packaging.memory_limit}');

$ENVIRONMENT_NAME = '${packaging.environment_name}';

#region URL
$site_URL = '${packaging.site_URL}';
#endregion


#region DATABASE
$dbconfig = [
	'db_server' => '${packaging.host}',
	'db_port' => '${packaging.port}',
	'db_username' => '${packaging.db.username}',
	'db_password' => '${packaging.db.password}',
	'db_name' => '${packaging.db}',
	'db_type' => 'mysqli',
	'db_status' => 'true'
];

?>
