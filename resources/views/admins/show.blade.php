@extends('admins.layadm.main')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Peringatan Dini Cuaca</h5>
        <p class="mb-0">{{ $admin->created_at }} </p>
        <p class="mb-0">-===========================-<br>
        Penyebrangan Merak - Bakauheni<br><br>
        Berdasarkan analisis dinamika atmosfer dan laut di Kawasan Selat Sunda dan sekitarnya dalam 10 menit kedepan diprediksi berpotensi:</p>
        
        <p class="mb-0 text-dark fw-semibold">A. Kondisi Hujan: {{ $admin->k_hjn }} </p>
        <p class="mb-0">B. Kondisi Cuaca Maritim:<br>
        Diprediksi dalam waktu 3jam kedepan berpotensi terjadi</p>
        <p class="text-dark fw-semibold">  - Angin Kencang: {{ $admin->angin }} </p>
        <p class="text-dark fw-semibold">  - Gelombang Tinggi: {{ $admin->gel_tg }} </p>
        <p class="mb-0 text-dark fw-semibold">  - Arus Laut: {{ $admin->arus }} menuju arah {{ $admin->arh_angin }}</p>
        <br>
        <p class="mb-0">Informasi selengkapnya dan updatenya di <a href="www.maritim.bmkg.go.id">www.maritim.bmkg.go.id</a>
        <br>
        Disampaikan Oleh: <br>
        <h6 class="mb-0 text-dark fw-semibold">Stasiun Meteorologi Maritim BMKG - Pelabuhan Merak</h6></p>
        <p class="mb-0 text-dark fw-semibold">Prakirawan: {{ $admin->fctr }} </p>
      </div>
    </div>
</div>
@endsection