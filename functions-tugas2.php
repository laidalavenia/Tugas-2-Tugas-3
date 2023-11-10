<?php
require_once 'controller/controllers.php';

    function view($page, $data=[]) {
        include 'view/'.$page.'.php';
    }
?>