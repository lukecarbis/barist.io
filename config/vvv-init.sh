#!/bin/bash

set -e

cd ..
printf "Setting up: %s\n" $(basename $(pwd))

eval $(php -r '
	$config = require( "webroot/wp-config-local.php" );
	foreach( explode( " ", "DB_NAME DB_HOST DB_USER DB_PASSWORD DB_CHARSET" ) as $key ) {
		echo $key . "=" . constant( $key ) . PHP_EOL;
	}
')

# Make a database, if we don't already have one
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS $DB_NAME CHARACTER SET $DB_CHARSET"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO $DB_USER@localhost IDENTIFIED BY '$DB_PASSWORD';"
