@extends('layout.master')
@section('title', 'detail genre')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Genre</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Genre</li>
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
                            <h3 class="card-title">Data Genre</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter nama" value="{{ $genres->nama }}" disabled>
                </div>
                <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="number" name="umur" id="umur" class="form-control" placeholder="Enter Umur" value="{{ $genres->umur }}" disabled>
                </div>
                <div class="form-group">
                  <label for="bio">Biografi</label>
                  <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Input Biografi" disabled>{{ $genres->bio }}</textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="{{ route('genre.index') }}" class="btn btn-primary">Back</a>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection