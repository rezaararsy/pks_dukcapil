<!-- membuat kerangka dari master.blade.php -->
@extends('master')

<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Menambah Perjanjian Kerja Sama')

<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="col-md-12 bg-white p-4" style="text-align: left">
    <form action="{{route('kontens.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Instansi</label>
            <input type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" name="instansi" value="{{old('instansi')}}" placeholder="Nama Instansi">
            @error('instansi')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama Penanggung Jawab</label>
            <input type="text" class="form-control @error('pj') is-invalid @enderror" id="pj" name="pj" value="{{old('pj')}}" placeholder="Nama Penanggung Jawab">
            @error('instansi')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tanggal TTD</label>
            <input type="date" class="form-control @error('tanggal_ttd') is-invalid @enderror" id="tanggal_ttd" name="tanggal_ttd" value="{{old('tanggal_ttd')}}" placeholder="Masukkan Tanggal TTD">
            @error('tanggal_ttd')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" value="{{old('tanggal_selesai')}}" placeholder="Masukkan Tanggal Selesai">
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
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{old('file')}}" placeholder="Upload File">
            @error('file')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script>
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
</script>
@endsection
