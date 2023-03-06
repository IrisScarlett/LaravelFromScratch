<?php
    namespace App\Http\Controllers;

    class HolaController extends Controller{

        public function index($name) {
            return "Hola {$name}";
        }
    }
