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
        // $jmeno = trim($formular->input("jmeno-chovatele"));
        // $email = $formular->input("email-chovatele");
        // $plat = $formular->input("plat-chovatele");

        //pokud zde vznikne chyba, tak nas laravel presmeruje zpatky na stranky, kde byl formular
        $poleInputu = $formular->validate([
            'jmeno-chovatele' => 'required|max:255|min:3',
            'email-chovatele' => 'required|max:255|min:3|email',
            'plat-chovatele' => 'required|integer'
        ]);


        Model_chovatel::create([
            "jmeno" => $poleInputu['jmeno-chovatele'],
            "email" => $poleInputu['email-chovatele'],
            "plat" => $poleInputu['plat-chovatele'],
        ]);

        //pokud se dostenme sem, tak to zname ze vse probehlo dobre
        return "VSE OK!!!";
    }

    function smazatChovatele($id) {
        Model_chovatel::destroy($id);
        return redirect("/");
    }

    function editovatChovatele($id) {
        $chovatel = Model_chovatel::find($id);
        $polePromennych = [];
        $polePromennych["chovatel"] = $chovatel;

        return view("editorChovatelu", $polePromennych);
    }

} //endHomeController

