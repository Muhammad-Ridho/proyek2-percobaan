<?php

namespace App\Http\Controllers;

use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index()
    {
        $data = [
            'penduduk' => $this->PendudukModel->allData(),
        ];
        return view('layout.penduduk', $data);
    }

    public function __construct()
    {
        $this->PendudukModel = new PendudukModel();
    }

    // Add data
    public function add(){
        return view('layout.addPenduduk');
    }

    // Simpan Data
    public function simpan(){
        Request()->validate([
            'nik' => 'required|unique:penduduks,nik|min:15|max:16',
            'nama' => 'required',
            'jk' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:1024',
        ]);

        //upload gambar
        $file = Request()->foto;
        $fileName = Request()->nik.'.'.$file->extension();
        $file->move(public_path('foto_ktp'), $fileName);

        $data = [
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'jk' => Request()->jk,
            'no_telpon' => Request()->no_telpon,
            'alamat' => Request()->alamat,
            'foto' => $fileName,
        ];

        $this->PendudukModel->addData($data);
        return redirect()->route('penduduk')->with('pesan','Data Berhasil Ditambahkan');
    }

    // Search data
    public function cari(Request $request){
        // menangkap data pencarian
		$cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $data = [
            'penduduk' => DB::table('penduduks')
            ->where('nama','like',"%".$cari."%")
            ->orWhere('nik','like',"%".$cari."%")
            ->orWhere('no_telpon','like',"%".$cari."%")
            ->paginate(5),
        ];


        // mengirim data pegawai ke view index
        return view('layout.penduduk', $data);
    }

    // edit
    public function edit($nik){
        $data = [
            'penduduk' => $this->PendudukModel->detailData($nik),
        ];
        return view('layout.pendudukEdit', $data);
    }
    // update
    public function update($nik){
        Request()->validate([
            'nik' => 'required|unique:penduduks,nik|min:15|max:16',
            'nama' => 'required',
            'jk' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:1024',        ]);

        //upload gambar
        $file = Request()->foto;
        $fileName = Request()->nik.'.'.$file->extension();
        $file->move(public_path('foto_kto'), $fileName);

        $data = [
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'jk' => Request()->jk,
            'no_telpon' => Request()->no_telpon,
            'alamat' => Request()->alamat,
            'foto' => $fileName,
        ];

        $this->PendudukModel->editData($nik ,$data);
        return redirect()->route('penduduk')->with('pesan','Data Berhasil Diperbarui');
    }

    // delete
    public function delete($nik){
        $this->PendudukModel->deleteData($nik);
        return redirect()->route('penduduk')->with('pesan','Data Berhasil Dihapus');
    }

    // Detail
    public function detail($nik)
    {
        $data = [
            'penduduk' => $this->PendudukModel->detailData($nik),
        ];
        return view('layout.mahasiswaDetail', $data);
    }
}
