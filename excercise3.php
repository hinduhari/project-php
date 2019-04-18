<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "phpcrudsample";
$deleted = 0;
$firstnameErr =$lastnameErr= $emailErr = "";
$firstname =$lastname= $email =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["firstname"]))
    {
        $firstnameErr = "Enter the firstName";
    }
    else
    {
        $firstname = test_input($_POST["firstname"]);
    }
    if (empty($_POST["lastname"]))
    {
        $lastnameErr = "Enter the lastName";
    } else
    {
        $lastname = test_input($_POST["lastname"]);
    }
    if (empty($_POST["email"]))
    {
        $emailErr = "Enter the Email";
    }
    else
    {
        $email = test_input($_POST["email"]);
    }
    
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
   /* $id=($_POST['firstname']);
    $id=($_POST['lastname']);
    $id=($_POST['email']);*/
    $id=($_POST['id']);
    if ($conn->connect_error)
    {
        echo ($conn->connect_error);
        die("Connection failed: " . $conn->connect_error);
    }
    
        $sql = "DELETE FROM tb_feedback WHERE id='$[id]'";
        
         if (mysqli_query($conn, $sql))
        {
            echo "Record deleted successfully";
        }
        else
        {
            echo "Error deleting record: " . mysqli_error($conn);
        }

    $result = $conn->query($sql);
    
    
    
    
    mysqli_close($conn);
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>
<html>
<body>

<form action="exercise3.php" method="post">
<?php if ($deleted == 0) { ?>
         <input type="checkbox" name=id value="12" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
        <input type="checkbox" name=id value="10" >
        <input type="checkbox" name="'$[id]'" value="15" >
firstname: <input type="text" name="firstname"style="background-color:DodgerBlue;">
<span class="error"> </span>
  <br><br>
lastname: <input type="text" name="lastname"style="background-color:DodgerBlue;">
email: <input type="text" name="email"style="background-color:DodgerBlue;">
<input type="submit" value="delete"style="background-color:yellow;"> 

<textarea name="message" rows="10" cols="100"style="background-color:DodgerBlue;">List of Feedback in Html table format</textarea>
</form>
<?php } else {?>

<?php }echo ""?>

</body>
</html>