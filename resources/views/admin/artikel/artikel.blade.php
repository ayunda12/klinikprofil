@extends('admin.app')
@section('title-content')
    Data Artikel
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Artikel</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Artikel</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Data Artikel</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-success shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Data Artikel</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive pb-2 px-3">
                        <button type="submit" class="btn btn-success font-weight-bold text-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah
                        </button>
                        <!-- Button trigger modal -->

                        <table id="tabel-data" class="table table-striped" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel as $l)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($l->created_at)->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ $l->judul }}</td>
                                        <td class="text-center"style="white-space:normal">{!! Str::limit($l->keterangan, 100) !!}</td>
                                        <td class="text-center">
                                            <a data-bs-toggle="modal" data-bs-target="#detail-modal{{ $l->id }}"
                                                class="btn btn-info font-weight-bold text-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="artikel-edit/{{ $l->id }}"
                                                class="btn btn-warning font-weight-bold text-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="data-artikel-hapus/{{ $l->id }}"
                                                onclick="return confirm('Anda yakin akan menghapus data ini?')"
                                                class=" btn btn-danger font-weight-bold text-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    {{-- modal detail --}}
                                    <div class="modal fade" id="detail-modal{{ $l->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-secondary">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Detail Data
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="foto">
                                                                <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                                                    alt="" width="100%" height="auto">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span class="float-start fw-bold">Tanggal</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            {{ \Carbon\Carbon::parse($l->created_at)->format('d-m-Y') }}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span class="float-start fw-bold">Judul</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            {{ $l->judul }}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span
                                                                                class="float-start fw-bold">Keterangan</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            {!! $l->keterangan !!}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal tambah --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="data-artikel-insert" class="row" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input class="form-control" name="foto" type="file" id="formFile" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="exampleFormControlInput1"
                                required>
                        </div>
                        <div class="form-group">
                            <label> Keterangan </label>
                            <textarea class="form-control" id="description" name="keterangan" placeholder="Enter the Description"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('description', {

            filebrowserUploadMethod: 'form'
        })
    </script>
@endsection
{{-- footer --}}
