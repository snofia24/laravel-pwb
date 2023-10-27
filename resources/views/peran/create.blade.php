@extends('layout.master')

@section('title', 'Buat Data')

@push('script')
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Input Data Film</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Data Film</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('peran.store', $film->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter judul Film" value="{{ $film->judul }}"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="cast">cast</label>
                                        <select name="cast_id" id="cast" class="form-control">
                                            <option disabled selected>--Pilih Salah Satu--</option>
                                            @forelse ($casts as $key => $value )
                                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                            @empty
                                                <option disabled>--Data Masih Kosong--</option>
                                            @endforelse 
                                            {{-- ($casts as $key => $value) --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama Peran">Peran</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Nama Peran">
                                    </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection