@extends('layouts.layout')
@section('konten')
<form action="{{route('daftar.show')}}" method="GET">
    <div class="container">
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-center">{{ $message }}</strong>
        </div>
        @endif

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="kota">Pilih Cabang</label>
                <select name="id_regencies" class="select form-control" id="kota" data-live-search="true">
                    <option selected disabled>--Pilih--</option>
                    @foreach($cities as $reg)
                    <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="outlet">Pilih Kota Bimbel</label>
                <select name="outlet_id" id="outlet" class="select form-control selects" disabled
                    data-live-search="true">
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="jadwal_program">Pilih Tingkat Kelas</label>
                <select name="jadwal_program" id="program" class="select form-control" disabled>
                </select>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-red btn-block" type="submit" id="search">
                Cek Harga
            </button>
        </div>
    </div>
</form>
@endsection