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
	$result=mysqli_query($cnx,$query);
	while ($row = mysqli_fetch_assoc($result)) 
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
	$cnx = mysqli_connect($config['db.server'],$config['db.user'],
						  $config['db.password'],$config['db.database']);
	// Conectar a la BD
	//mysqli_select_db($config['db.database']);
	
	return $cnx;
}

/**
 * Disconnect from Mysql 
 * @param unknown $cnx
 */
function disconnectDB($cnx)
{
	mysqli_close($cnx);
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
	// Conectar al servidor y a la DB	
	$cnx = mysqli_connect($config['db.server'],$config['db.user'],
						  $config['db.password'],$config['db.database']);
	
	
	$data['photo']=insertPhoto($config['uploadDirectory']);
	
	echo "<pre>data:";
	print_r($data);
	echo "<pre>";
	
	// Insertar el usuario
	$query="INSERT INTO users SET 
				name = '".$data['name']."',
				email = '".$data['email']."', 
				password = '".$data['password']."',
				address = '".$data['address']."',
				description = '".$data['description']."',
				pets = '".implode(',',$data['pets'])."',
				photo = '".$data['photo']."',
				genders_idgender = ".$data['sex'].", 
				cities_idcity = ".$data['city']."
			";
	
	mysqli_query($cnx, $query);
	$id=mysqli_insert_id($cnx);
	

	// Insertar los deportes del usuario
	foreach ($data['sports'] as $key => $value)
	{	
		$query2="INSERT INTO users_has_sports SET
					users_iduser =".$id.",
					sports_idsport =".$value."
				";
		
		mysqli_query($cnx, $query2);
	}
		
	// Retornar el id de usuario
	
	return $id;
}




