<?php
if(!empty($_POST) && isset($_POST['del_id'])) {
   $d=$_POST['del_id'];
}
if(!empty($_SESSION["cart_item"])) {
    foreach ($_SESSION["cart_item"] as $k => $v) {
        if ($d == $k) {
            unset($_SESSION["cart_item"][$k]);
        }
        if (empty($_SESSION["cart_item"])) {
            unset($_SESSION["cart_item"]);
        }
    }
}