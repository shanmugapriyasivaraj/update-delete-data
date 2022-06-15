<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
include_once("connection.php");

if(isset($_POST['Submit'])) {   
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
        
    if(empty($first_name) || empty($last_name) || empty($age)) {              
        if(empty($first_name)) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }
        
        if(empty($last_name)) {
            echo "<font color='red'>Last Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
 
        $result = mysqli_query($mysqli, "INSERT INTO users(first_name,last_name,age) VALUES('$first_name','$last_name','$age')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>