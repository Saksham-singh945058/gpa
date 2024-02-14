<?php
session_start();
session_destroy();
session_reset();
echo "<script> alert('Your have been sucessfully logout!!');window.location.href='index.php';</script>";


?>