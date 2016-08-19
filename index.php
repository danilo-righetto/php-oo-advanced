<?php

/* Autor: Danilo Righetto */

// PHP - Advancing with OO

$db = new \PDO("mysql:host=localhost;dbname=danilo_oo", "root", "root");

$query = "select * from products";

$stmt = $db->prepare($query);

$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);

?>