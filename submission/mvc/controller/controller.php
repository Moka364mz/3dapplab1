<!-- The PHP code creates a Controller class, which handles various tasks in the application. 
It initializes objects for loading views and interacting with the model. 
Depending on the page URI provided, it triggers specific functions to execute actions 
like displaying the home page, creating database tables, inserting data, or fetching data. 
Each function performs its designated task, such as interacting with the database or rendering 
views, based on the requested action. -->

<?php
class Controller {

	public $load;
	public $model;
	
	function __construct($pageURI = null) 
	{
		$this->load = new Load(); 
		$this->model = new Model();
		$this->$pageURI();
	}
	function home()
	{
		$data = $this->model->dbGetData();
		$this->load->view('mainviewpage', $data);
	}

	function apiCreateTable()
	{
	  	echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  
	
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		echo "Data Read Function";
	}
}
?>    