@extends('app')
@section('content')
<div class="card">
  <div class="card-header">
  <a href="{{url('download-data-pdf')}}" target="_blank" class="btn btn-success">Download PDF</a>
  </div>
  <div class="card-body">
  <table class="table" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Telepon</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal</th>
      <th scope="col" style="width: 20%">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $item)
  <tr>
      <th scope="row">{{$key+ 1}}</th>
      <td>{{ $item->nama}}</td>
      <td>{{ $item->tlp}}</td>
      <td>{{ $item->email}}</td>
      <td>{{ $item->alamat}}</td>
      <td>{{ $item->created_at}}</td>
      <td>
        <div class="row">
          <div class="col-4">
            <a href="{{url('admin/form-edit' , $item->id)}}" class="btn btn-primary">Edit</a>
          </div>
          <div class="col-4">
                  <form action="{{url('admin/hapus-data')}}" method="post">
                     @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                 </form>
             </div>
        </div>
        
        
      </td>
    </tr>
    @endforeach
     </tbody>
     </table>
  </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endsection
