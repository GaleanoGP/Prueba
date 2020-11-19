# PRUEBA INNOVALY

### Configurations

**Step 1 =>**
Change config.dist.php to config.php and change the base url.
```php
$config['base_url'] = 'YOUR BASE URL';
```

**Step 2 =>**
Make a new database and import file exists in root directory database.sql import in the newly created database.

**Step 3 =>**
Change database.dist.php to database.php and change the database settings.
```php
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'YOUR_HOST',
	'username' => 'DB_USERNAME',
	'password' => 'DB_PASSWORD',
	'database' => 'DB_DATABASE',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

Now Run the application and enjoy.

Happy Codding :confetti_ball: Made with :hearts: :heartbeat: 
