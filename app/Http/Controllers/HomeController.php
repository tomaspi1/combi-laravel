<?php

namespace App\Http\Controllers;

use App\Models\Model_chovatel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index () {
        $polePromennych = [];
        $polePromennych["jmenoPrihalsenehoUzivatele"] = "Tonny";
        $polePromennych["jePlnolety"] = true;
        $polePromennych["alkoholy"] = array("pivo", "rum", "vodka", "vino", "slivovice");

        //chceme poslat i seznam chovatelu, chovatele mame ulozeny v DB
        $poleChovatelu = Model_chovatel::all();
        // dd($poleChovatelu);
        $polePromennych["chovatele"] = $poleChovatelu;

        return view('welcome', $polePromennych);
    }

    function pridatChovatele (Request $formular) {
        $jmeno = trim($formular->input("jmeno-chovatele"));
        $email = $formular->input("email-chovatele");
        $plat = $formular->input("plat-chovatele");

        $validated = $formular->validate([
            'jmeno-chovatele' => 'required|max:255|min:3',
            'email-chovatele' => 'required|max:255|min:3|email',
            'plat-chovatele' => 'required|integer'
        ]);

        if ($validated == true) {
            return "vse ok";
        }else{
            
        }

    }

} //endHomeController

