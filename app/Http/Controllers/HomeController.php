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

        //pokud zde vznikne chyba, tak nas laravel presmeruje zpatky na stranky, kde byl formular
        $validated = $formular->validate([
            'jmeno-chovatele' => 'required|max:255|min:3',
            'email-chovatele' => 'required|max:255|min:3|email',
            'plat-chovatele' => 'required|integer'
        ]);

        //pokud se dostenme sem, tak to zname ze vse probehlo dobre
        return "VSE OK!!!";
        

    }

} //endHomeController

