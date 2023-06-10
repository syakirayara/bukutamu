@extends('app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card bg-primary" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Total Admin</h5>
              <p class="card-text text-white">{{ DB::table('users')->get()->count() }}</p>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card bg-primary" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Total Tamu</h5>
              <p class="card-text text-white">{{ DB::table('tamus')->get()->count() }}</p>
            </div>
          </div>
    </div>
</div>
@endsection