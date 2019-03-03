<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','wegmansapp');
define('DB_USER','root');
define('DB_PASSWORD','root123');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser()
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $location=$_POST['location'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $ditr=$_POST['diet'];
    
   
    $query="insert into customer(name,email,pass,location,age,weight,height,dietr) values ('$name','$email','$pass','$location','$age','$weight','$height','$ditr')";
    echo $query;
    $data=mysqli_query(mysqli_connect ("localhost","root","root123","wegmansapp"),$query);
    if($data)
    {
       //header('Location:locationprod.html');
        echo "working";
    }
    else
        echo "wrong";

}

function SignUp()
{

        NewUser();

}

 if(isset($_POST['regisbutton']))
{
    NewUser();
}
?>
