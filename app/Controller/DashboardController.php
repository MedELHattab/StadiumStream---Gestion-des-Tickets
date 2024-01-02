<?php 
namespace App\Controller;
class DashboardController {
    public function index() {
        include "../app/View/dashboard/main.php";
    }

    public function dashboard() {
    include "../database/Connection.php";
    }
}
