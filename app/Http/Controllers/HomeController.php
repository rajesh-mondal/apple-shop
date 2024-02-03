<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    public function HomePage() {
        return view( 'pages.home-page' );
    }
}
