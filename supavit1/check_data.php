<?php
    echo "username :".$_GET['username'] ;
    echo "<br>" ;
    echo "passsword :".$_GET['password'] ;
    $user = "admin";
    $pass = "supavit";
    echo "<br>";
    if($_GET['username']==$user && $_GET['password']==$pass){
        echo "คุณ".$user."ลงชื่อเข้าใช้แล้ว";
    }
    else{
        echo "คุณใส่ข้อมูลไม่ถูกต้อง";
    }

?>