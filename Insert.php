<?php
include "database.php";

class insert {

public $Table;
	public $dbObj;
	public $con;

	//constructor 
	public function __construct() {
	    $this->Table = "lensinfo";
	    $this->dbObj = new Database();
	    $this->con = $this->dbObj->connection();
	}


public function registration(){

	$rightsphere=$_POST['rightSPH'];
	$rightCYL=$_POST['rightCYL'];
	$rightAXI=$_POST['rightAXI'];
	$rightAdd=$_POST['rightAdd'];
	$leftsphere=$_POST['leftSPH'];
	$leftCYL=$_POST['leftCYL'];
	$leftAXI=$_POST['leftAXI'];
	$leftAdd=$_POST['leftAdd'];
	$pdsphere=$_POST['PDSPH'];
	$pdCYL=$_POST['PDCYL'];
	$nearpd=$_POST['nearPDSPH'];
	

	$query= "INSERT INTO $this->Table(rightSPH,rightCYL,rightAXI,rightAdd,leftSPH,leftCYL,leftAXI,leftAdd,PDSPH,PDCYL,nearPDSPH) VALUES('$rightsphere','$rightCYL','$rightAXI','$rightAdd','$leftsphere','$leftCYL','$leftAXI','$leftAdd','$pdsphere','$pdCYL','$nearpd')";
		 if ($this->con->query($query)) {
	    return true;
	} else {
	    return false;
	    }
	}

}
$connect= new insert();
?>