<?php
require_once 'AppController.php';

class DashboardController extends AppController {

    public function index() {

        return $this->render('dashboard');
    
    }
}