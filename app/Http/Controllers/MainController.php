<?php

namespace App\Http\Controllers;

class MainController extends Controller {
    function main() {
        return view( "welcome" );
    }
    function features() {
        return view( "features" );
    }
    function contact() {
        return view( "contact");
    }
}
