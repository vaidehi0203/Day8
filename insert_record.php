<?php

$connection = mysqli_connect("localhost","root","","db_internship");
if($_post)
{
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
   
    $q = mysqli_query($connection, "insert into tbl_user (user_name,user_gender) values('{$name}','{$gender}')") or die(mysqli_error($connection));
    if($q)
    {
        echo "<script>alert('Record added');</script>";
    }        
}
?>

<html>
    
    <body>
        <form method ="post">
            name : <input type="text" name="txt1"/>
            gender :<select>
                <option>male</option>
                <option>female</option>
            </select>            
            <input type="submit"/>
        </form>
    </body>
</html>

echo "<a href ='table.php'>display record</a>";