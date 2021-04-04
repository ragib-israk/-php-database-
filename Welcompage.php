<body style="background: url(https://previews.123rf.com/images/unitonevector/unitonevector1904/unitonevector190401327/123425805-online-shopping-e-commerce-abstract-illustration-salesman-and-customer-holding-smartphones-cartoon-c.jpg);background-size :100% 120%">  
  


 

 <form method ="POST">

 <h1 style="text-align: center;">Welcome-form</h1>
  <input  type="submit" name="logout" value="logout"><br><br>
 
<input  type="submit" name="profile" value="Profile"><br><br>
<input  type="submit" name="productlist" value="productlist"><br><br>
<input  type="submit" name="searchproduct" value="searchproduct"><br><br>
<input  type="submit" name="change-password" value="change-password"><br><br>
<input  type="submit" name="deleteaccount" value="deleteaccount"><br><br>
<input  type="submit" name="viewpurchesproduct" value="viewpurchesproduct"><br><br>
<input  type="submit" name="givereview" value="givereview"><br><br>
<input  type="submit" name="makepayment" value="makepayment"><br><br>


 </form>
 <?php
 if(isset($_POST["logout"]))
{
    echo "<script>location.href='Login.php'</script>";
}



if(isset($_POST["profile"]))
{
    echo "<script>location.href='profile.php'</script>";
}
if(isset($_POST["productlist"]))
{
    echo "<script>location.href='productlist.php'</script>";
}
if(isset($_POST["searchproduct"]))
{
    echo "<script>location.href='searchproduct.php'</script>";
}

if(isset($_POST["change-password"]))
{
    echo "<script>location.href='change-password.php'</script>";
}

if(isset($_POST["deleteaccount"]))
{
    echo "<script>location.href='deleteaccount.php'</script>";
}

if(isset($_POST["viewpurchesproduct"]))
{
    echo "<script>location.href='viewpurchesproduct.php'</script>";
}

if(isset($_POST["givereview"]))
{
    echo "<script>location.href='givereview.php'</script>";
}



if(isset($_POST["makepayment"]))
{
    echo "<script>location.href='makepayment.php'</script>";
}



?>

</body>