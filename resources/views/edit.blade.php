@extends('master')

<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Wisata')

@section('main')
<div class="col-md-12 bg-white p-4" style="text-align: left">
    <form action="{{route('kontens.update',['konten'=>$konten->id])}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>Nama Instansi</label>
            <input type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" name="instansi" value="{{old('instansi') ?? $konten->Instansi}}" placeholder="Nama Instansi">
            @error('instansi')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama Penanggung Jawab</label>
            <input type="text" class="form-control @error('pj') is-invalid @enderror" id="pj" name="pj" value="{{old('pj') ?? $konten->pj}}" placeholder="Nama Penanggung Jawab">
            @error('pj')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="date" class="form-control @error('tanggal_ttd') is-invalid @enderror" id="tanggal_ttd" name="tanggal_ttd" value="{{old('tanggal_ttd') ?? $konten->tanggal_ttd}}" placeholder="Masukkan Tanggal">
            @error('tanggal_ttd')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" value="{{old('tanggal_selesai') ?? $konten->tanggal_selesai}}" placeholder="Masukkan Tanggal">
            @error('tanggal_selesai')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="checkbox" class="css-checkbox" id="status" name="status" value="1" {{old('status') ? 'checked="checked"' : ''}} placeholder="Status"><h6>*Centang jika perjanjian sudah selesai, kosongi jika belum selesai.</h6>
            @error('status')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Upload File</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ asset('download/'.$konten->file)}}" placeholder="Upload File">
            @error('file')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Update</button>
    </form>
</div>
@endsection
