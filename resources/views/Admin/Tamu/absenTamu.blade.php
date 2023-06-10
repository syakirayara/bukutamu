@extends('app')
@section('content')
<div class="card">
  <div class="card-header">
  Scan Kehadiran Tamu
  </div>

  <div class="card-body">
    @if (session()->has('gagal'))
        <div class="alert alert-warning" role="alert">
            {{ session('gagal') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="text-center bold">
    Scan Here!
    </h2>
    <video class="text-center" id="preview"></video>

    {{--Form--}}
    <form action=" {{ route('admin-cek-tamu') }}" method="POST" id="form">
        @csrf
        <input type="hidden" name="id_tamu" id="id_tamu">
    </form>
    <table class="table" id="myTable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach($absen as $key => $item)
            <tr>
                <th scope="row">{{$key+ 1}}</th>
                <td>{{ $item->tamu->nama}}</td>
                <td>{{ $item->tamu->tlp}}</td>
                <td>{{ $item->tamu->email}}</td>
                <td>{{ $item->tamu->alamat}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {
        console.log(content);
    });
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
        scanner.start(cameras[0]);
        } else {
        console.error('No cameras found.');
        }
    }).catch(function (e) {
        console.error(e);
    });

    scanner.addListener('scan', function(c){
        document.getElementById('id_tamu').value = c;
        document.getElementById('form').submit();
    })
</script>
@endsection
