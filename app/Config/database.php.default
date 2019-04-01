<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Database configuration class.
 *
 * You can specify multiple configurations for production, development and testing.
 *
 * datasource => The name of a supported datasource; valid options are as follows:
 *  Database/Mysql - MySQL 4 & 5,
 *  Database/Sqlite - SQLite (PHP5 only),
 *  Database/Postgres - PostgreSQL 7 and higher,
 *  Database/Sqlserver - Microsoft SQL Server 2005 and higher
 *
 * You can add custom database datasources (or override existing datasources) by adding the
 * appropriate file to app/Model/Datasource/Database. Datasources should be named 'MyDatasource.php',
 *
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * host =>
 * the host you connect to the database. To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database. This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres/Sqlserver specifies which schema you would like to use the tables in.
 * Postgres defaults to 'public'. For Sqlserver, it defaults to empty and use
 * the connected user's default schema (typically 'dbo').
 *
 * encoding =>
 * For MySQL, Postgres specifies the character encoding to use when connecting to the
 * database. Uses database default not specified.
 *
 * sslmode =>
 * For Postgres specifies whether to 'disable', 'allow', 'prefer', or 'require' SSL for the
 * connection. The default value is 'allow'.
 *
 * unix_socket =>
 * For MySQL to connect via socket specify the `unix_socket` parameter instead of `host` and `port`
 *
 * settings =>
 * Array of key/value pairs, on connection it executes SET statements for each pair
 * For MySQL : http://dev.mysql.com/doc/refman/5.6/en/set-statement.html
 * For Postgres : http://www.postgresql.org/docs/9.2/static/sql-set.html
 * For Sql Server : http://msdn.microsoft.com/en-us/library/ms190356.aspx
 *
 * flags =>
 * A key/value array of driver specific connection options.

*class DATABASE_CONFIG {

*	public $default = array(
*		'datasource' => 'Database/Postgres',
*		'host' => 'ec2-54-83-61-142.compute-1.amazonaws.com',
*		'login' => 'cbyqccqvtdgiom',
*		'password' => 'e37caca03584dc85f73a8887af06e64dfc8190ee417e480197a5468a5715d6c8',
*		'database' => 'det8oen3kior58',
*		'prefix' => '',
*		//'encoding' => 'utf8',
*	);

*	public $test = array(
*		'datasource' => 'DDatabase/Postgres',
*		'host' => 'ec2-54-83-61-142.compute-1.amazonaws.com',
*		'login' => 'cbyqccqvtdgiom',
*		'password' => 'e37caca03584dc85f73a8887af06e64dfc8190ee417e480197a5468a5715d6c8',
*		'database' => 'det8oen3kior58',
*		'prefix' => '',
*		//'encoding' => 'utf8',
*	);
		*/
$host = "ec2-54-83-61-142.compute-1.amazonaws.com"
$user = "cbyqccqvtdgiom"
$password = "e37caca03584dc85f73a8887af06e64dfc8190ee417e480197a5468a5715d6c8"
$dbname = "det8oen3kior58"
$port = "5432"

try {
	$dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname .  ";user=" . $user . ";password" . $password

	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();

}
	?>
