<?php
     session_unset();
     require_once 'controller/sportsController.php';
     $controller = new sprotsController();
     $controller->mvcHandler();
?>