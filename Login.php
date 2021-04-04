

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<?php 
    $username=$_POST['uname'];
    $password=$_POST['password'];

    $host = "localhost";
    $user = "ragib";
    $pass = "012345";
    $db = "customer";

    $conn1 = new mysqli($host, $user, $pass, $db);
    if($conn1->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        $sql = "SELECT uname,pass FROM user";
        $result = $conn1->query($sql);
    if ($result->num_rows > 0) {
 
     while($row = $result->fetch_assoc()) {
    
     
    if($row['uname']==$username && $row['pass']== $password)
    {
        echo "<script>location.href='index.php'</script>";
    }
        else
        {
            echo "fail";
        }

}
    } 
    else 
    {
    echo "0 results";
    }
        
    }

    $conn1->close();


    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1 style="text-align: center;">Login</h1>
         <legend style="text-align: center;">Login Info</legend>
             UserName <input type="text" name="uname" value="">

            Password <input type="password" name="password" value="" >              

    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="fpwd" value="Forget Password">
    <br> <br> <input type="submit" name="signup" value="Signup">
    
</form>
<?php 
    if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='file-handling-reg_02.php'</script>";
        }
    ?>
    
</body>
</html>