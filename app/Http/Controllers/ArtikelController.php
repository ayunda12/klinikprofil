<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index() {
        $artikel = Artikel::all(); 
        return view('admin.artikel.artikel',[
            'artikel'      => $artikel
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
        
        Artikel::create([
            'judul'             => $request->judul,
            'keterangan'        => $request->keterangan,
            'foto'              => $filegambar,
          
        ]);
        toast('Berhasil menambahkan data!','success');
        return redirect('/artikel');
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('admin.artikel.edit-artikel',[
            'artikel'      => $artikel
        ]);

    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        $data = [
           
            'judul' => $request->judul,
            'keterangan'    => $request->keterangan
        ];
        
        if($request->hasFile('foto')){
            $tujuan_upload = 'assets/img/gambar';
            $file = $request->file('foto');
            $filegambar = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$filegambar);

            $folderDir1 = $tujuan_upload.'/'.$artikel->foto;
            File::delete($folderDir1);
            //update post with new image
            $data['foto'] = $filegambar;
        }
          
        $artikel->update($data);
        toast('Berhasil mengubah data!','success');
        return redirect('/artikel');
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
       
        //delete data
        $tujuan_upload = 'assets/img/gambar/'.$artikel->foto;
        if(File::exists($tujuan_upload))
        {
            File::delete($tujuan_upload);
        }
        //delete data
       $artikel->delete();
       toast('Berhasil menghapus data!','success');
       return redirect('/artikel');
    }

}
