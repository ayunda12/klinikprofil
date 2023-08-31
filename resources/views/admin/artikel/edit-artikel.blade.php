@extends('admin.app')
@section('title-content')
    Data Artikel
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Artikel</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Artikel</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Edit Data Artikel</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-success shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Data Artikel</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form action="/data-artikel-update/{{ $artikel->id }}" class="row-3 py-1 px-4" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control rounded-3 text-sm" name="foto" type="file"
                                id="file-input-poster" accept="image/*" onchange="showPreviewposter(event);"
                                value="{{ $artikel->foto }}" {{ $errors->has('foto') ? 'autofocus="true"' : '' }}>
                            <img src=" {{ asset('assets') }}/img/gambar/{{ $artikel->foto }}" id="file-preview-poster"
                                alt="..." class="img-thumbnail mt-2" width="50%">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" required
                                value="{{ $artikel->judul }}">
                        </div>
                        <div class="form-group">
                            <label> Keterangan </label>
                            <textarea class="form-control" id="descriptionedit" name="keterangan" placeholder="Enter the Description">{{ $artikel->keterangan }}</textarea>

                        </div>
                        <div class="modal-footer">
                            <a href="/artikel" class="btn btn-secondary btn-sm">Kembali</a>
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('descriptionedit', {

            filebrowserUploadMethod: 'form'
        })
    </script>
@endsection
{{-- footer --}}
