<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Instansi;

class Admininstansi extends Controller
{
    function index(){

        return public_path();
        $data['list'] = Instansi::get();
        return view('admin.instansi.index', $data);
    }
    function add(){
        return view('admin.instansi.add');
    }

    function addAct(Request $r){

        $r->validate([
            'nama' => 'required|unique:instansi',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'kuota' => 'required',
            'foto' => 'required',
            'username' => 'required',
            'pasword' => 'required',
        ]);

        $instal = new Instansi;
        $instal->nama = $r->nama;
        $instal->alamat = $r->alamat;
        $instal->deskripsi = $r->deskripsi;
        $instal->kuota = $r->kuota;
        $instal->handleUploadFoto();
        $instal->username = $r->username;
        $instal->password = bcrypt($r->password);

        $simpan = $instal->save();
        if ($simpan == 1) {
            return redirect('admin/instansi')->with('success', 'Data berhasil dimasukan !');
        }

        return back()->with('danger', 'Data gagal dimasukan !, coba ulangi kembali');
    }

    function edit(Mahasiswa $mahasiswa){
        $data['list'] = $mahasiswa;
        return view('admin.mahasiswa.edit', $data);

    }
    function editAct(Request $r){

        $id = $r->id;
        $m = Mahasiswa::find($id);

        $m->nim = $r->nim;
        $m->nama = $r->nama;
        $m->jenis_kelamin = $r->jenis_kelamin;
        $m->agama = $r->agama;
        $m->tempat_lahir = $r->tempat_lahir;
        $m->tanggal_lahir = $r->tanggal_lahir;

        $simpan = $m->update();
        if ($simpan == 1) {
            return redirect('admin/mahasiswa')->with('success', 'Data berhasil diupdate !');
        }

        return back()->with('danger', 'Data gagal diupdate   !, coba ulangi kembali');

    }
    function hapus(Mahasiswa $mahasiswa){



        $simpan = $mahasiswa->delete();
        if ($simpan == 1) {
            return back()->with('success', 'Data berhasil dihapus    !, coba ulangi kembali');
        }

        return back()->with('danger', 'Data gagal dihapus    !, coba ulangi kembali');

    }
}
