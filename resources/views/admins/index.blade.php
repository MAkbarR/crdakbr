@extends('admins.layadm.main')
@section('content')
<div class="col-lg-8 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">DASHBOARD ADMIN</h5>
      <div class="table-responsive">
        <div class="card-body">
          <a href="{{ route('admins.create') }}" class="btn btn-md btn-success mb-3">INPUT DATA</a></div>
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Id</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Forcaster</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Kondisi Hujan</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Angin Kencang</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Gelombang Tinggi</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Arus Kuat</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Arah Angin</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Aksi</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($admins as $admin)
                
            <tr>
              <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $admin->id }}</h6></td>
              <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">{{ $admin->fctr }}</h6>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $admin->k_hjn }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $admin->angin }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $admin->gel_tg}}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $admin->arus }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $admin->arh_angin }}</p>
              </td>
              <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                    <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>
            </td>
            </tr> 
            @empty
                  <div class="alert alert-danger">
                  Data Post belum Tersedia.
                  </div>
            @endforelse
          </tbody>
        </table>
        {{ $admins->links() }}
      </div>
    </div>
  </div>
</div>
<a href="{{ route('logout') }}" class="btn btn-sm btn-danger mb-3">LOGOUT</a></div>
<script>
  //message with toastr
  @if(session()->has('success'))
  
      toastr.success('{{ session('success') }}', 'BERHASIL!'); 

  @elseif(session()->has('error'))

      toastr.error('{{ session('error') }}', 'GAGAL!'); 
      
  @endif
</script>
@endsection