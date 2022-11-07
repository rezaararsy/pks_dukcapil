<!-- menggunakan kerangka dari halaman master.blade.php -->
@extends('master')

<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Web Pencatatan Perjanjian Kerja Sama')

<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
    <div class="col-xl-12 mt-4">
        <div class="card" style="background: rgba(63, 74, 131, 0.86);">
            <div class="card-body" style="text-align: right">
                <h5 style="color: white;font-size:40px;font-weight:900;text-align:left;">Jumlah Perjanjian Kerja Sama</h5>
                <br><h5 class="card-title" style="color: white;font-size:40px; font-weight:900;background:rgba(193, 195, 81, 1);padding:10px 13px 13px;border-radius:5px;">{{ $konten->count() }}</h5>
                <br><a href="{{route('kontens.showadmin')}}" class="btn btn-primary">Jumlah PKS</a>
            </div>
        </div>
    </div>

    <div class="col-xl-12 mt-4">
        <div class="card" style="background: rgba(63, 74, 131, 0.86);">
            <div class="card-body" style="text-align: right">
                <h5 style="color: white;font-size:40px;font-weight:900;text-align:left;">Jumlah PKS Belum Selesai</h5>
                <br><h5 class="card-title" style="color: white;font-size:40px; font-weight:900;background:rgba(193, 195, 81, 1);padding:10px 13px 13px;border-radius:5px;">{{ $konten->where('status', null )->count() }}</h5>
                <br><a href="{{route('kontens.showadmin')}}" class="btn btn-primary">Jumlah PKS</a>
            </div>
        </div>
    </div>

    <div class="col-xl-12 mt-4">
        <div class="card" style="background: rgba(63, 74, 131, 0.86);">
            <div class="card-body" style="text-align: right">
                <h5 style="color: white;font-size:40px;font-weight:900;text-align:left;">Jumlah PKS Selesai</h5>
                <br><h5 class="card-title" style="color: white;font-size:40px; font-weight:900;background:rgba(193, 195, 81, 1);padding:10px 13px 13px;border-radius:5px;">{{ $konten->where('status')->count() }}</h5>
                <br><a href="{{route('kontens.showadmin')}}" class="btn btn-primary">Jumlah PKS</a>
            </div>
        </div>
    </div>

@endsection
