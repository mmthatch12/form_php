<?php
$_POST["Username"]; //could also be written like this $Username=$_POST["Username"]
$_POST["Password"]; //could also be written like this $Password=$_POST["Password"]

?>

<!DOCTYPE>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
<?php ?><br>
<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="" method="POST" >
        <label for="Username">Username:</label>
        <input id="Username" type="text" name="Username"><br>
        <label for="Password">Password:</label>
        &nbsp;
        <input id="Password" type="Password" name="Password"><br>
        <input id="Submit" type="Submit" name="Submitted"><br>
    </form>
</fieldset>

    </body>
</html>