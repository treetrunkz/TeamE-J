<?php
    // Connect to DB
    $database = "jfolkgre_grc";
    $username = "jfolkgre_grcuser";
    $password = "Q9c03tdXaFsggUe5E8Hkcv7Lwd";
    $hostname = "localhost";
    
    $cnxn = @mysqli_connect($hostname,$username,$password,$database) or die ("There was a problem");