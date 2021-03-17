<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<script>
	alert("Hello! I am an alert box!!");
</script>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header('location:./index.php#login');

exit();
?>

</body>
</html>