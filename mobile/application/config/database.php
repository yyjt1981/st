<?php defined('SYSPATH') OR die('No direct access allowed.');


if(include(DOCROOT.'../data/common.inc.php'))
{
      return array('default'=>array('type'=>'MySQL',
        'table_prefix' => $cfg_dbprefix,
		'charset'      => $cfg_db_language,
		'caching'      => FALSE,
		'connection'=>array(
		   'hostname'   => $cfg_dbhost,
			'database'   => $cfg_dbname,
			'username'   =>$cfg_dbuser,
			'password'   => $cfg_dbpwd,
			'persistent' => FALSE,
		 )
		));
}
else
   return array
   (
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => 'localhost',
			'database'   => 'www_standsmore_com',
			'username'   => 'root',
			'password'   => 'root',
			'persistent' => FALSE,
		),
		'table_prefix' => 'sline_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	 )
	
   );
