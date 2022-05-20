<?php
include"config.php";
$post_id =  $_GET['id'];    /*use pic id grom url */ 
$cat_id =   $_GET['catid'];
$sql = "DELETE FROM post WHERE post_id = {$post_id};"; 
$sql .= "UPDATE category SET post= post - 1 WHERE category_id= {$cat_id}";               /*2 query run use one post dlt and 2nd dlt post from  category  */
if(mysqli_multi_query($conn,$sql))
{
    
        header("location:{$hostname}/admin/post.php");
}
    else
    {
        echo"query failed";

    } 

?>