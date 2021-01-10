<?php

use http\Client;

session_start();

$dev_path = "pro";
$companyname = "Aree";

$parent_path = $dev_path == "dev" ? "Aree/theareeadmin/" : "theareeadmin/";


     include ($_SERVER['DOCUMENT_ROOT']."/". $parent_path.'models/MainModel.php');
     $mainModel = new MainModel();
