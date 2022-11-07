<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')

@section('header')
<h2><center>List Perjanjian</center></h2>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
    </div>
    @endif

@endsection

@section('title', 'Halaman Khusus Admin')

@section('main')
    <div class="col-12 bg-white p-4" style="text-align: left; ">
        <table class="table table-bordered table-hover table-stripped">
            <thead style="background: rgba(25, 57, 140, 0.66); color:white">
                <tr>
                    <th>No.</th>
                    <th>Nama Instansi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Penanggung Jawab</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>Lampiran Dokumen</th>
                </tr>
            </thead>
            <tbody>
                @forelse($konten as $konten)
                    <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$konten->Instansi}}</td>
                    <td>{{$konten->tanggal_ttd}}</td>
                    <td>{{$konten->tanggal_selesai}}</td>
                    <td>{{$konten->pj}}</td>
                    <td>@if ($konten->status == 1)
                            <h6 style="color: white;font-weight:700;background:green;text-align:center;border-radius:10px;padding:10px 0px 10px 0px">SELESAI</h6>
                        @else
                            <h6 style="color: white;font-weight:700;background:red;text-align:center;border-radius:10px;padding:10px 0px 10px 0px">BELUM SELESAI</h6>
                        @endif</td>
                    <td>
                        <a href="{{route('kontens.edit',['konten'=>$konten->id])}}"><button class="btn btn-primary mb-2">Edit</button></a>
       </form>
       <br>
       <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#cn">Hapus</button><form action="{{route('kontens.destroy',['konten'=>$konten->id])}}" method="POST">
                        @method('DELETE')
                        @csrf                   <div class="modal fade" id="cn" role="dialog" arialabelledby="modalLabel" area-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <p class="text-center">
                                        Anda yakin untuk menghapus file {{$konten->Instansi}} ini?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Tidak, Kembali</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                    </td>
                    <td><a href="{{url('/download',$konten->file)}}">{{$konten->file}}</a></td>
                    </tr>
                @empty
                    <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
