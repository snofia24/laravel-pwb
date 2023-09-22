@extends('layout.master')

@section('title', 'cast detail')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Cast</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Cast</a></li>
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
                            <h3 class="card-title">Data Cast</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('cast.update', $casts[0]->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Ketik Nama" value="{{ $casts[0]->nama }}">
                                    @error('nama')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="text" class="form-control" name="umur" id="umur" placeholder="" value="{{ $casts[0]->umur }}">
                                    @error('umur')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea name="bio" class="form-control" rows="5" placeholder="Ketik Bio">{{ $casts[0]->bio }}</textarea>
                                    
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
@endsection