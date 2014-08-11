<?php

defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'console');
return array(
	'commandMap' => array(
		'migrate' => array(
			'class' => 'system.cli.commands.MigrateCommand',
			'migrationPath' => 'application.cli.migrations'
		)
	)
);