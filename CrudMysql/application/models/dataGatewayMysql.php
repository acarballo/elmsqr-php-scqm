<?php



/**
 * Read users from mysql
 * @param array $config
 * @throws Exception
 * @return array: $users | FALSE
 */
function readUsers($config)
{
	$cnx=connectDB($config);
	$query = "SELECT * FROM users";
	$result=mysql_query($query,$cnx);
	while ($row = mysql_fetch_assoc($result)) 
	{
		$users [] = $row;
	}
	return $users;
}

/**
 * Connect to Mysql
 * @param array $config
 * @return resource $cnx
 */
function connectDB($config)
{
	// Conectar al servidor de DB
	$cnx = mysql_connect($config['db.server'],$config['db.user'],$config['db.password']);
	// Conectar a la BD
	mysql_select_db($config['db.database']);
	
	return $cnx;
}

/**
 * Disconnect from Mysql 
 * @param unknown $cnx
 */
function disconnectDB($cnx)
{
	mysql_close($cnx);
	return;
}

/**
 * Read id user from mysql 
 * @param int $id
 * @param array $config
 * @return array $user
 */
function readUser($id, $config)
{

}

/**
 * Delete user from mysql
 * @param int $id
 * @param array $config
 * @return void;
 */
function deleteUser($id,$config)
{

}

/**
 * Update id user 
 * @param int $id
 * @param array $config
 * @param array $data
 */
function updateUser($id,$config, $data)
{

}

/**
 * Insert user into mysql
 * @param array $config
 * @param array $data
 * @return int $id
 */
function insertUser($config, $data)
{

}




