

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	include("connect.php");

		$mobile_no= $_POST['mobile_no'];
		$password = $_POST['password'];


        $sql= "INSERT INTO award(Linked_in,year,name,Id,description)VALUES("Fatem","2007","Fatema Islam Morshed","011071128","coding hour")";
		$sql = "SELECT * FROM login WHERE mobile_no='$mobile_no' and password='$password'";

		$result = $conn->query($sql);
		
       if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
       	        //echo"yes";
				session_start();
				$_SESSION['userAccessInfo'] = $mobile_no;
				
				header('Location: index.php') ;
				exit();
				 }
			}
	
		
    else{ 
        //echo"no";	
        header('Location:./') ;
        exit();
    }

}

?>
