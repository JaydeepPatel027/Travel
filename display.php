<?php

include 'book_form.php';

$selectquery = " select * from book_form ";

$query = mysqli_query ($connection, $selectquery);

$nums = mysqli_num_rows ($query);
while ($res = mysqli_fetch_array ($query)){
     echo $res['name'] ."<br>";
}
?>