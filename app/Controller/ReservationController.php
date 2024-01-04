<?php

namespace App\Controller;

use App\Model\UserModel;

class ReservationController
{
    public function index()
    {
        include '../app/View/reservation.php';
    }
}
