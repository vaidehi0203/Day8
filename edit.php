<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from tbl_user where user_id='{$editid}'") or die (mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

?>
<html>
    <body>
        <form method="post">
            name : <input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1"/>
            <br/>
            gender :male<input type="radio" value="male" name="txt2"/>
            female<input type="radio" value="female" name="txt2"/>
            <br/>
            <input type="submit"/>
            
        </form>
    </body>
</html>