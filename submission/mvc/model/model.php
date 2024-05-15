<?php

// This PHP code outlines a class named Model which is designed to manage a database 
// for 3D model information. The class includes several key functions that handle various 
// tasks related to database management.
class Model {
	public $dbhandle;

	// Firstly, the constructor function (__construct) sets up a connection to a 
	// SQLite database called database.db using PHP's PDO (PHP Data Objects) extension. 
	// This function is crucial because it establishes the link between the PHP script 
	// and the database. If the connection is unsuccessful, the function catches the error 
	// and displays a message indicating that the connection was not successful, 
	// helping to troubleshoot any issues right from the start.

	public function __construct()
	{
		$dsn = 'sqlite:./db/database.db';
		
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    													PDO::ATTR_EMULATE_PREPARES => false, 
														));
		}
		catch (PDOEXception $e) {
			echo "Connection was unsucsessful";
        	print new Exception($e->getMessage());
    	}
	}

	// Once the connection is established, the dbCreateTable function attempts to create a 
	// new table within the database specifically designed to store data about 3D models. 
	// This table, named Model_3D, includes columns for storing unique IDs, titles, and 
	// descriptions of each model. If this table is successfully created, the function 
	// returns a confirmation message, which helps confirm that the database structure 
	// is ready for data insertion.
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, modelTitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside database.db file";
		}
		catch (PDOException $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (1, 'X3D Coke Model', 'Original Coka Cola', 'Main colours Red White and Black'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (2, 'X3D Sprite Model', 'Sprite Can', 'Main colours Green Blue and White'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (3, 'X3D Pepper Model', 'Dr Pepper Can', 'Main colours Burgundy Red and White'); ");
			return "X3D model data inserted successfully inside database.db";
		}
		catch(PDOException $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	// Finally, the dbGetData function retrieves all the records from the Model_3D table. 
	// It organizes this data into an array format that can be easily used elsewhere in 
	// the application. This function is essential for accessing the stored data, 
	// which can be displayed to users or used for further processing.

	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM Model_3D';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;
			while ($data = $stmt->fetch()) {
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$i++;
			}
		}
		catch (PDOException $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}

}
?>