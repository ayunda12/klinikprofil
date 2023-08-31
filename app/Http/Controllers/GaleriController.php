<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class GaleriController extends Controller
{
    public function index() {
        $galeri = Galeri::all(); 
        return view('admin.galeri.galeri',[
            'galeri'      => $galeri
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
        
        Galeri::create([
            'foto'        => $filegambar,
          
        ]);
        toast('Berhasil menambahkan data!','success');
        return redirect('/galeri');
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
       
        
        if($request->hasFile('foto')){
            $tujuan_upload = 'assets/img/gambar';
            $file = $request->file('foto');
            $filegambar = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$filegambar);

            $folderDir1 = $tujuan_upload.'/'.$galeri->foto;
            File::delete($folderDir1);
            //update post with new image
            $data['foto'] = $filegambar;
        }
          
        $galeri->update($data);
        toast('Berhasil mengubah data!','success');
        return redirect('/galeri');
    
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
       
        //delete data
        $tujuan_upload = 'assets/img/gambar/'.$galeri->foto;
        if(File::exists($tujuan_upload))
        {
            File::delete($tujuan_upload);
        }
        //delete data
       $galeri->delete();
       toast('Berhasil menghapus data!','success');
       return redirect('/galeri');
    }
}
