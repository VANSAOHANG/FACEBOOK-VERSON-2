<?php
require_once ("../models/item.php");
$item = $_POST['item'];
$price = $_POST['price'];
createItem($item,$price);

header("location: /index.php");