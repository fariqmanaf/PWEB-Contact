<?php
include_once 'Config/main.php';
include_once 'Model/contact.php';
include_once 'Model/user.php';
include_once 'Config/main.php';
include_once 'Config/static.php';

class DashboardController {
    static function dashboard() {
      view('Dashboard/index');
    }
}