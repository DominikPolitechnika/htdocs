<?php
$db=new database();
if($db->pull()){
    foreach ($db->pull() as $answer){
        echo "<div class='border mt-3 border-primary rounded>";
        echo $answer['author'];
        echo $answer['content'];
        echo $answer['author'];
    }
}