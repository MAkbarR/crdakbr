@extends('admins.layadm.main')
@section('content')
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">FORM DATA MARITIM</h5>
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Prakirawan</label>
                      <input type="text" class="form-control @error('fctr') is-invalid @enderror" name="fctr" value="{{ old('fctr'), $admin->fctr }}" placeholder="Masukkan Nama Prakirawan">
                      <div id="emailHelp" class="form-text">Masukan Nama Prakirawan.</div>
                      @error('fctr')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kondisi Hujan</label>
                      <input type="text" class="form-control @error('k_hjn') is-invalid @enderror" name="k_hjn" value="{{ old('k_hjn', $admin->k_hjn) }}" placeholder="Masukkan Informasi Kondisi Hujan">
                      <div id="emailHelp" class="form-text">Isi "NULL" jika tidak terdapat Hujan.</div>
                      @error('k_hjn')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Angin Kencang</label>
                      <input type="text" class="form-control @error('angin') is-invalid @enderror" name="angin" value="{{ old('angin',$admin->angin) }}" placeholder="Masukkan Informasi Angin Kencang">
                      <div id="emailHelp" class="form-text">Isi "NULL" jika tidak terdapat Angin Kencang.</div>
                      @error('angin')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Gelombang Tinggi</label>
                      <input type="text" class="form-control @error('gel_tg') is-invalid @enderror" name="gel_tg" value="{{ old('gel_tg',$admin->gel_tg) }}" placeholder="Masukkan Informasi Gelommbang Tinggi">
                      <div id="emailHelp" class="form-text">Isi "NULL" jika tidak terdapat Gelombang Tinggi.</div>
                      @error('gel_tg')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Arus Kuat</label>
                      <input type="text" class="form-control @error('arus') is-invalid @enderror" name="arus" value="{{ old('arus',$admin->arus) }}" placeholder="Masukkan Informasi Arus Kuat">
                      <div id="emailHelp" class="form-text">Isi "NULL" jika tidak terdapat Arus Kuat.</div>
                      @error('arus')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Arah Angin</label>
                      <input type="text" class="form-control @error('arh_angin') is-invalid @enderror" name="arh_angin" value="{{ old('arh_angin',$admin->arh_angin) }}" placeholder="Masukkan Informasi Arah Angin">
                      @error('arh_angin')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
            CKEDITOR.replace( 'content' );
      </script>
@endsection