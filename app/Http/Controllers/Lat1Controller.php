<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Viego";
        $data["asal"]="Sharon";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Ilham", "asal" => "Bogor"),
            array("nama" => "Nadir", "asal" => "Lembang"),
            array("nama" => "Nicho", "asal" => "Bekasi")
        );
        return view('v_latihan2', $data);
    }
}
