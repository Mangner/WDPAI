<?php

require_once 'AppController.php';

class SecurityController extends AppController {

    public function login() {
        
        // TODO pobieramy z formularza email, haslo
        // TODO sprawdzamy czy takie user istnieje w db
        // jesli nie istnieje to zwaracamy, odpowiednie komunikaty
        // jesli istnieje, to przekierowujemy go do dashboard


        return $this->render("login");
    }

}