<?php

namespace App\Http\Controllers\control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kucing;
use App\Models\barang;

class barangController extends Controller
{
    public function getView ($jenis='noting', $id=0){
        $users =kucing::join('barangs','barangs.kode_jenis','=','kucings.id')
        ->where('barangs.id', $id)->get();
        return view('project.view',['viewKucing' => $users]);
    }
    public function getAll (){
        $users =kucing::join('barangs','barangs.kode_jenis','=','kucings.id')
        ->get();
        return view('project.index',['daftarKucing' => $users]);
    }
    public function getlist (){
        $users =kucing::select('jenis')->get();
        return view('project.list',['daftarType' => $users]);
    }
  
    public function getdaftar ($id){
        $users =kucing::join('barangs','barangs.kode_jenis','=','kucings.id')
        ->where('kucings.jenis','=',$id)
        ->get();
        return view('project.daftar',['daftarCari' => $users]);
    }
    public function getContact(){
        return view('project.contac');
    }
    

}
