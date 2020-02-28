<?php

    $hostname = "localhost";
    $databasename = "doggo";
    $databaseuser = "root";
    $databasepw = "123";

interface Database {
   public function connection($hostname, $databaseuser, $databasepw, $databasename);
}