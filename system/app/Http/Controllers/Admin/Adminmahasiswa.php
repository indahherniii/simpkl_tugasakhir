<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Adminmahasiswa extends Controller
{
    function index(){

        $data['list'] = Mahasiswa::get();
        return view('admin.mahasiswa.index', $data);
    }
    function add(){
        return view('admin.mahasiswa.add');
    }

    function addAct(Request $r){
        $r->validate([
            'nim' => 'required|unique:mahasiswa|max:50',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $m = new Mahasiswa;
        $m->nim = $r->nim;
        $m->nama = $r->nama;
        $m->jenis_kelamin = $r->jenis_kelamin;
        $m->agama = $r->agama;
        $m->tempat_lahir = $r->tempat_lahir;
        $m->tanggal_lahir = $r->tanggal_lahir;

        $simpan = $m->save();
        if ($simpan == 1) {
            return redirect('admin/mahasiswa')->with('success', 'Data berhasil dimasukan !');
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
