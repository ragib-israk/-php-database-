
<?php 

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
        echo "Database Connection Successful!";
        $stmt1 = $conn1->prepare("insert into user (uname, pass, fname, lname, gender, mobile, email, address,dateofbirth,recoveryEmail) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt1->bind_param("ssssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p7,$p8,$p9,$p10);
        $p1 = $_POST['uname'];
        $p2 = $_POST['pass'];
        $p3 = $_POST['fname'];
        $p4 = $_POST['lname'];
        $p5 = $_POST['gender'];
        $p6 = $_POST['mobile'];
        $p7 = $_POST['email'];
        $p8 = $_POST['address'];
        $p9 = $_POST['dateofbirth'];
        $p10 = $_POST['recoveryEmail'];
        $status = $stmt1->execute();

        if($status) {
            echo "Data Insertion Successful.";
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $conn1->error;
        }


    }
    

    $conn1->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form  method="POST">
    <h1>Registertion-form</h1>
        <table>
        <tr>
            <td><label>firstName: </label></td>
            <td><input type="text" name="fname" value=""></td>
        </tr>

        <tr>
            <td><label>lastname: </label></td>
            <td><input type="text" name="lname" value=""></td>
        </tr>
        
        
        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gender" value="Male">male</td>
        </tr>


        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gender" value="Female">female</td>
        </tr> 

        <tr>
            <td><label>Date of Birth: </label></td>
            <td><input type="date" name="dof" value=""></td>
        </tr>

        <tr>
            <td><label>Address: </label></td>
            <td><input type="text" name="add" value=""></td>
        </tr>
<tr>
            <td><label>UserName: </label></td>
            <td><input type="text" name="uname" value=""></td>
        </tr>


        
        <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="password" value=""></td>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="email" name="mail" value=""></td>
        </tr>
        <tr>
            <td><label>Mobile Number: </label></td>
            <td><input type="text" name="mobo" value="" ></td>
        </tr>   
<tr>
            <td><label>RecoveryEmail: </label></td>
            <td><input type="email" name="rmail" value="" ></td>
        </tr>    




        <tr>
            
            <td align="right">
                 <input type="submit" name="set" value="Submit"> 
                    <input type="reset" name="" value="Reset">
                    <input  type="submit" name="done" value="Back">  
        
        </tr>
        </table>

    
    
    </form>

</body>
</html>
