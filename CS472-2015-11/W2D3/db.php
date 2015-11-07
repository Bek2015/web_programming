<?php

$db = new PDO("mysql:dbname=sql_inject", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

