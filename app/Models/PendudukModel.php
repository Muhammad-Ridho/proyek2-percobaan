<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendudukModel extends Model
{
    public function allData(){
        return DB::table('penduduks')->paginate(5);
    }
    public function addData($data){
        DB::table('penduduks')->insert($data);
    }
    public function detailData($nik){
        return DB::table('penduduks')->where('nik', $nik)->first();
    }
    public function editData($nik, $data){
        DB::table('penduduks')->where('nik', $nik)->update($data);
    }
    public function deleteData($nik){
        DB::table('penduduks')->where('nik', $nik)->delete();
    }
}
