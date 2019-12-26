<?php
if(isset($_POST["Submit"])){
    $Username=$_POST["Username"]; //could also be written like this $_POST["Username"]
    $Password=$_POST["Password"]; //could also be written like this $_POST["Password"]
    
    if($Username=="Thatch" && $Password=="Thatchy"){
        echo "<h2>Welcome : {$_POST["Username"]}</h2>";
    } else{
        echo "<h2>Account Doesn't Exist | Try Again</h2>";
    }
} else {
    echo "<h2>Login Required</h2>";

}

?>

<!DOCTYPE>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="form.php" method="POST" >
        <label for="Username">Username:</label>
        <input id="Username" type="text" name="Username"><br><br>
        <label for="Password">Password:</label>
        &nbsp;
        <input id="Password" type="Password" name="Password"><br><br>
        <input type="Submit" name="Submit" value="Submitted">
    </form>
</fieldset>
<?php 
echo 'PHP version is: ' . phpversion();
echo 'PHP version is: ' . PHP_VERSION;
?>

    </body>
</html>