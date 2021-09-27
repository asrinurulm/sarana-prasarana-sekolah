<?php

namespace App\ajax;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\jenis;
use App\inventaris\inventaris;

class getGet extends Model
{
    public function getbarang($id){
        $barang = DB::table('inventaris')->where('id_jenis',$id)->pluck('inventaris','id');
dd($barang);
        return json_encode($barang);
    }
}
