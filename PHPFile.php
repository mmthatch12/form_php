<!DOCTYPE>

<html>
        <head>
                <title>PHP File</title>
        </head>
        <body>
<?php 
print_r($_POST);


$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Submit=$_POST["Submit"];
// if(isset($_POST["Submit"])){
//     echo "Login Sucessfull<br>";
//     echo "Welcome $Username!<br>";
// }
// if(isset($Username)&&!empty($Username)){
//     echo "Username is set with name of $Username<br>";
// } else {
//     echo "No username entered.<br>";
// }
// if(isset($Password)&&!empty($Password)){
//     echo "Password: $Password<br>";
// } else {
//     echo "No Password entered.<br>";
// }
if(isset($_POST["Username"])){
    $Username=$_POST["Username"];
    echo "Username: $Username";
} else {
    $Username="";
    echo "Username: ''";
}
if(isset($_POST["Password"])){
    $Username=$_POST["Password"];
    echo "Password: $Password";
} else {
    $Username="";
    echo "Password: ''";
}

?>



        </body>
</html>