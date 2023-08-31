<?php

namespace App\Http\Controllers;

use App\Models\Rekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RekanController extends Controller
{
    public function index() {
        $rekan = Rekan::all(); 
        return view('admin.rekan.rekan',[
            'rekan'      => $rekan
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
        
        Rekan::create([
            'url'        => $request->url,
            'foto'        => $filegambar,
          
        ]);
        toast('Berhasil menambahkan data!','success');
        return redirect('/rekan');
    }

    public function update(Request $request, $id)
    {
        $rekan = Rekan::find($id);
        $data = [
            'url' => $request->url
        ];
        
        if($request->hasFile('foto')){
            $tujuan_upload = 'assets/img/gambar';
            $file = $request->file('foto');
            $filegambar = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$filegambar);

            $folderDir1 = $tujuan_upload.'/'.$rekan->foto;
            File::delete($folderDir1);
            //update post with new image
            $data['foto'] = $filegambar;
        }
          
        $rekan->update($data);
        toast('Berhasil mengubah data!','success');
        return redirect('/rekan');
    }
    public function destroy($id)
    {
        $rekan = Rekan::find($id);
       
        //delete data
        $tujuan_upload = 'assets/img/gambar/'.$rekan->foto;
        if(File::exists($tujuan_upload))
        {
            File::delete($tujuan_upload);
        }
        //delete data
       $rekan->delete();
       toast('Berhasil menghapus data!','success');
       return redirect('/rekan');
    }



}
