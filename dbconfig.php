<?php

    $hostname = "localhost";
    $databasename = "doggo";
    $databaseuser = "root";
    $databasepw = "root";

interface Database {
   public function connection($hostname, $databaseuser, $databasepw, $databasename);
}