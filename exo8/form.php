<?php
    function formCourse(){
        if(isset($_POST['course']) && isset($_POST['teacherName'])){
            echo $_POST['course']." ".$_POST['teacherName'] ;
        }else{
            " ";
        };
    }
?>