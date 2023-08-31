<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LayananController extends Controller
{
    public function index() {
        $layanan = Layanan::all(); 
        return view('admin.layanan.layanan',[
            'layanan'      => $layanan
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
        
        Layanan::create([
            'nama'        => $request->nama,
            'detail'      => $request->detail,
            'foto'        => $filegambar,
          
        ]);
        toast('Berhasil menambahkan data!','success');
        return redirect('/layanan');
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        $data = [
            'nama' => $request->nama,
            'detail'    => $request->detail
        ];
        
        if($request->hasFile('foto')){
            $tujuan_upload = 'assets/img/gambar';
            $file = $request->file('foto');
            $filegambar = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$filegambar);

            $folderDir1 = $tujuan_upload.'/'.$layanan->foto;
            File::delete($folderDir1);
            //update post with new image
            $data['foto'] = $filegambar;
        }
          
        $layanan->update($data);
        toast('Berhasil mengubah data!','success');
        return redirect('/layanan');
    }
    public function destroy($id)
    {
        $layanan = Layanan::find($id);
       
        //delete data
        $tujuan_upload = 'assets/img/gambar/'.$layanan->foto;
        if(File::exists($tujuan_upload))
        {
            File::delete($tujuan_upload);
        }
        //delete data
       $layanan->delete();
       toast('Berhasil menghapus data!','success');
       return redirect('/layanan');
    }
}
