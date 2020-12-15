@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">List Semua Pendaftar</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
					</div>
					<table class="table table-striped">
					  <thead>
						<tr>

						  <th scope="col">No</th>
						  <th scope="col">Nama</th>
						  <th scope="col">E-mail</th>
						  <th scope="col">Nomor Handphone</th>
						  <th scope="col">Jenis Kelamin</th>
						  <th scope="col">Alamat</th>
						  <th scope="col">Asal Sekolah</th>
						  <th scope="col">Kota</th>
						  <th scope="col">Program</th>
						  <th scope="col">Unit Belajar</th>
						</tr>
					  </thead>
					  <tbody>
					  @foreach ($result as $r)
						<tr>
						<td> {{$r->pendaftarid }} </td>
						<td> {{$r->pendaftar_nama }} </td>
						<td> {{$r->pendaftar_email }} </td>
						<td> {{$r->pendaftar_telepon }} </td>
						<td> {{$r->pendaftar_jenis_kelamin }} </td>
						<td> {{$r->pendaftar_alamat_jalan }} </td>
						<td> {{$r->pendaftar_sekolah }} </td>
						<td> {{$r->pendaftar_alamat_kota }} </td>
						<td> {{$r->orders->id_program }} </td>
						<td> {{$r->orders->pendaftar_tagihan }} </td>
						<tr>
					@endforeach
					  </tbody>
					</table>			
            </div>
        </div>
    </div>
</div>
@endsection