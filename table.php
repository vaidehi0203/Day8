<?php

$connection = mysqli_connect("localhost","root","","db_internship");
 
//query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));
echo"<table boarder='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>NAME</th>";
echo"<th>GENDER</th>";
echo"<th>Action</th>";

echo"</tr>";
while ($row = mysqli_fetch_array($q))
{
    echo"<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td> <a href= 'edit.php?id={$row['user_id']}'>Edit</a> | <a href='delete.php?deleteid={$row['user_id']}'>deletet</a></td>";
    echo"</tr>";
}
    echo"</table>";
echo "<a href ='insert_record.php'>add record</a>";