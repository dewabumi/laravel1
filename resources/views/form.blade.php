@extends('layouts.layout')

@section('title', $passId->nama_program)
@section('judul_header', 'Daftar Program '.$passId->nama_program)

@section('konten')

<div class="container">
    <form action="/daftar/store" method="post" id="form_daftar">
        {{ csrf_field() }}
        <div id="section1">
            <!-- nama & sex -->
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="pendaftar_nama" id="pendaftarNama" class="form-control" value="{{ old('pendaftar_nama' )}}">
                        @if($errors->has('pendaftar_nama'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_nama') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="sex">Jenis Kelamin</label>
                        <select name="pendaftar_jenis_kelamin" id="pendaftarSex" class="form-control">
                            <option selected disabled>Pilih Salah Satu</option>
                            @if(old('pendaftar_jenis_kelamin') == 'pria')
                            <option value="pria" selected>Pria</option>
                            @else
                            <option value="pria">Pria</option>
                            @endif

                            @if(old('pendaftar_jenis_kelamin') == 'wanita')
                            <option value="wanita" selected>Wanita</option>
                            @else
                            <option value="wanita">Wanita</option>
                            @endif
                        </select>
                        @if($errors->has('pendaftar_jenis_kelamin'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_jenis_kelamin') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- nama & sex ends -->

            <!-- email & telp -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{ old('pendaftar_email' )}}" name="pendaftar_email" id="pendaftarEmail" class="form-control" />
                        @if($errors->has('pendaftar_email'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_email') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input type="number" value="{{ old('pendaftar_telepon' )}}" name="pendaftar_telepon" id="pendaftarTelepon" class="form-control" />
                        </div>
                        @if($errors->has('pendaftar_telepon'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_telepon') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- email & telp ends -->

            <!-- Alamat -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" value="{{ old('pendaftar_alamat_jalan' )}}" name="pendaftar_alamat_jalan" id="pendaftarAlamat" class="form-control">
                        @if($errors->has('pendaftar_alamat_jalan'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_alamat_jalan') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="alamatKota">Kota Domisili</label>
                        <select name="pendaftar_alamat_kota" id="pendaftarKota" class="form-control" data-live-search="true">
                            <option selected disabled>Pilih Salah Satu</option>
                            @foreach($kota as $k)
                            @if(old('pendaftar_alamat_kota') == $k->id )
                            <option value="{{ $k->name }}" selected>{{ $k->name }}</option>
                            @else
                            <option value="{{ $k->name }}">{{ $k->name }}</option>
                            @endif
                            @endforeach
                        </select>
                        @if($errors->has('pendaftar_alamat_kota'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_alamat_kota') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="alamatPostal">Kode Pos</label>
                        <input type="number" value="{{ old('pendaftar_alamat_postal' )}}" name="pendaftar_alamat_postal" id="pendaftarPostal" class="form-control">
                        @if($errors->has('pendaftar_alamat_postal'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_alamat_postal') }}
                        </div>
                        @endif
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="form-group">
                        <label for="kotaLahir">Kota Lahir</label>
                        <select name="pendaftar_lahir_kota" id="pendaftarKotaLahir" class="form-control" data-live-search="true">
                            <option selected disabled>Pilih Kota Lahir Kamu</option>
                            @foreach($kota as $k)
                            @if(old('pendaftar_lahir_kota') == $k->id )
                            <option value="{{ $k->name }}" selected>{{ $k->name }}</option>
                            @else
                            <option value="{{ $k->name }}">{{ $k->name }}</option>
                            @endif
                            @endforeach
                        </select>
                        @if($errors->has('pendaftar_lahir_kota'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_lahir_kota') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="date" value="{{ old('pendaftar_lahir' )}}" name="pendaftar_lahir" id="pendaftarLahir" class="form-control" min="1990-01-01">
                        @if($errors->has('pendaftar_lahir'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_lahir') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Alamat Ends -->

            <!-- ibu dan sekolah -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pendaftarIbuKandung">Nama Ibu Kandung</label>
                        <input type="text" name="pendaftar_ibu" value="{{ old('pendaftar_ibu' )}}" id="pendaftarIbu" class="form-control">
                        @if($errors->has('pendaftar_ibu'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_ibu') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pendaftarAsalSekolah">Asal Sekolah</label>
                        <input type="text" name="pendaftar_sekolah" value="{{ old('pendaftar_sekolah' )}}" id="pendaftarSekolah" class="form-control">
                        @if($errors->has('pendaftar_sekolah'))
                        <div class="text-danger">
                            {{ $errors->first('pendaftar_sekolah') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- ibu dan sekolah ends -->

            <!-- program -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pendaftarProgram">Program yang di pilih</label>
                        <input readonly type="text" class="form-control" value="{{ $passId->nama_program }}" />
                        <input type="text" name="pendaftar_program" id="pendaftarProgram" value="{{ $passId->nama_program }}" hidden>
                        <input type="text" name="harga_program" id="hargaProgram" value="{{ $passId->harga_program }}" hidden>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pendaftarProgram">Harga Program</label>
                        <input readonly type="text" class="form-control" type="text" value="RP. {{ number_format($passId->harga_program, 0) }}">
                        <input readonly hidden type="text" class="form-control" type="text" name="harga_program" id="hargaProgram" value="{{ $passId->harga_program }}">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pendaftarProgram">Kota Bimbel</label>
                        <input readonly type="text" class="form-control" type="text" name="harga_program" id="hargaProgram" value="{{ $kotas->outlet_name }}">
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="mx-auto">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="/daftar" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            <!-- program ends -->
        </div>

        <div id="section2">

        </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{ asset('js/form.js') }}"></script>
<script>
    $('#form_daftar').submit(function() {
        $('#over').css('visibility', 'visible');
        $('body').addClass('hs');
    })

    $('#pendaftarKotaLahir').selectpicker();
</script>
@endsection