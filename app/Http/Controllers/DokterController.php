<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class DokterController extends Controller
{
    public function index() {
        $dokter = Dokter::all(); 
        return view('admin.dokter.dokter',[
            'dokter'      => $dokter
        ]);
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('admin.dokter.edit-dokter',[
            'dokter'      => $dokter
        ]);

    }

    public function store(Request $request){
        $filegambar = null;
        if($request->hasFile('foto')){
            $tujuan_upload = 'assets/img/gambar';
            $file = $request->file('foto');
            $filegambar = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$filegambar);
        }
        
        Dokter::create([
            'nama'        => $request->nama,
            'jenis'       => $request->jenis,
            'jadwal'      => $request->jadwal,
            'foto'        => $filegambar,
          
        ]);
        toast('Berhasil menambahkan data!','success');
        return redirect('/dokter');
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::find($id);
        $data = [
            'nama'        => $request->nama,
            'jenis'       => $request->jenis,
            'jadwal'      => $request->jadwal,
        ];
        
        if($request->hasFile('foto')){
            $tujuan_upload = 'assets/img/gambar';
            $file = $request->file('foto');
            $filegambar = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$filegambar);

            $folderDir1 = $tujuan_upload.'/'.$dokter->foto;
            File::delete($folderDir1);
            //update post with new image
            $data['foto'] = $filegambar;
        }
          
        $dokter->update($data);
        toast('Berhasil mengubah data!','success');
        return redirect('/dokter');
    }
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
       
        //delete data
        $tujuan_upload = 'assets/img/gambar/'.$dokter->foto;
        if(File::exists($tujuan_upload))
        {
            File::delete($tujuan_upload);
        }
        //delete data
       $dokter->delete();
       toast('Berhasil menghapus data!','success');
       return redirect('/dokter');
    }
}
