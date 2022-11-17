<?php
// fonction si la variable $_POST n'est pas vide tu effectue le reste
    function formCourse(){
        if(isset($_POST['course']) && isset($_POST['teacherName'])){
            echo $_POST['course']." ".$_POST['teacherName'] ;
        }else{
            " ";
        };
    }
?>