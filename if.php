<?php

 $username=$_POST['username'];
 $password=$_POST['password'];
 if ($username=="admin" || $password=="admin" ){
     echo "You Are Admin";
 }
 elseif ($username=="reza" || $password=="reza" ){
        echo "You Are Admin";
   
 }
 elseif($username=="mamad" || $password=="mamad" ){
        echo "You Are Admin";
     
 }

 else{
     echo " Yo are not admin"."<span style='color:yellow;'>".$username."</span>";
 }
?>