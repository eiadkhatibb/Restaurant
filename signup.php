<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
    {

        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";
        
        mysqli_query($con,$query);

        header("Location: login.php");
        die;
    }else
    {
        echo "please enter some valid information!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
</head>
<body>
    <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border:solid thin #aaa;
            width:100%;
        }
        #button{
            padding:10px;
            width:100px;
            color:white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin:auto;
            width:300px;
            padding:20px;

        }

        </style>
        <div id="box">
            <form method="post">
                <div style="font-size:20px;margin:10px;color:white">Sign Up</div>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="text" type="email" name="email"><br><br

                <input id="button" type="submit" name="Sign Up"><br><br>

                <a href="login.php">Click to Login</a><br><br>
    </form>
    </div>

</body>
</html>