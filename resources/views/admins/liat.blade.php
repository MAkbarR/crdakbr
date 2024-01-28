@extends('admins.layadm.main')
@section('content')
@foreach ($admins as $admin)
<div class="col-md-4">
  <h5 class="card-title fw-semibold mb-4">PERINGATAN DINI CUACA!</h5>
  <div class="card">
    <div class="card-header">
      {{ $admin->created_at }}
    </div>
    <div class="card-body">
      <h5 class="card-title">Peringatan Dini Cuaca</h5>
      <p class="mb-0">-===========================-<br>
        Penyebrangan Merak - Bakauheni<br><br>
        Berdasarkan analisis dinamika atmosfer dan laut di Kawasan Selat Sunda dan sekitarnya dalam 10 menit kedepan diprediksi berpotensi:...</p><br>
        
      <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-primary">Selengkapnya!</a>
    </div>
  </div>
</div>
@endforeach

@endsection