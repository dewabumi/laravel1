@extends('layouts.layout')
@section('judul_header', 'Pilih Program Belajarmu di '.$outlet->outlet_name)
@section('judul_header_2', 'Untuk Program '.$jadwal)
@section('konten')
<div class="container">
    <div class="row mx-auto">
        @foreach($program as $prog)
        @if((strpos($prog->nama_program, 'INDIVIDU')) !== false)
        @continue
        @else
        <div class="col-md-12">
            <?php
            $param = $prog->id;
            $param = Crypt::encrypt($param);
            ?>
            <a href="/daftar/form/{{$param}}" class="custom-card box-wrap text-center">
                <div class="card box">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                @if(strpos($prog->nama_program, 'Reguler') !== False )
                                <img src="/img/shield/cuu.png" alt="Reguler" class="rounded float left" width="195px" />
                                @elseif(strpos($prog->nama_program, 'Gold') !== False)
                                <img src="/img/shield/auu.png" alt="Gold" class="rounded float left" width="175px" />
                                @elseif(strpos($prog->nama_program, 'Silver') !== False)
                                <img src="/img/shield/agg.png" alt="Silver" class="rounded float left" width="175px" />
                                @else
                                <img src="/img/shield/ptt.png" alt="platinum" class="rounded float left"
                                    width="175px" />
                                @endif
                            </div>
                            <div class="col-md-10">
                                <h3 class="card-title">{{ $prog->nama_program }}</h3>
                                <h2 style="margin-bottom: 10px;"><b>Rp. {{ number_format($prog->harga_program, 0) }}</b>
                                </h2>
                                <hr>
                                <div class="row">
                                    @if(strpos($prog->nama_program, 'Reguler') !== False )
                                    <div class="col-md-3">
                                        @if(strpos($prog->nama_program, '3 SD') !== False)
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasitas Kelas <br> <b> maksimal 15 siswa</b></p>
                                        @elseif(strpos($prog->nama_program, 'SMA') !== False)
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasitas Kelas <br> <b> maksimal 25 siswa</b></p>
                                        @elseif(strpos($prog->nama_program, 'SMP') !== False)
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasitas Kelas <br> <b> maksimal 25 siswa</b></p>
                                        @else
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasitas Kelas <br> <b> maksimal 20 siswa</b></p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/epb.png"
                                            style="width:54px">
                                        <p class="text-center">Evaluasi Prestasi Belajar (EPB)</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @elseif(strpos($prog->nama_program, 'Gold') !== False)
                                    <!-- kelas 12 Gold -->
                                    @if(strpos($prog->tingkat_program, '12') !== FALSE)
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk PTN Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 16 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    <!-- kelas 9 Gold -->
                                    @elseif(strpos($prog->tingkat_program, '9') !== FALSE)
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk SMA Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 16 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    <!-- kelas 6 Gold -->
                                    @elseif((strpos($prog->tingkat_program, '6') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '5 SD') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '4 SD') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '3 SD') !== FALSE))
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 8 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/epb.png"
                                            style="width:54px">
                                        <p class="text-center">Evaluasi Prestasi Belajar (EPB)</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @else
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan nilai rata-rata rapor ≥ 80,00</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 16 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @endif
                                    @elseif(strpos($prog->nama_program, 'Silver') !== False)
                                    <!-- kelas 12 Silver -->
                                    @if(strpos($prog->tingkat_program, '12') !== FALSE)
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk PTN Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 20 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    <!-- kelas 9 Silver -->
                                    @elseif(strpos($prog->tingkat_program, '9') !== FALSE)
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk SMA Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 20 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    <!-- kelas 6 Silver -->
                                    @elseif((strpos($prog->tingkat_program, '6') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '5 SD') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '4 SD') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '3 SD') !== FALSE))
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 8 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/epb.png"
                                            style="width:54px">
                                        <p class="text-center">Evaluasi Prestasi Belajar (EPB)</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @else
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan nilai rata-rata rapor ≥ 80,00</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 20 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @endif
                                    @else
                                    <!-- kelas 12 platinum -->
                                    @if(strpos($prog->tingkat_program, '12') !== FALSE)
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk PTN Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 10 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    <!-- kelas 9 platinum -->
                                    @elseif(strpos($prog->tingkat_program, '9') !== FALSE)
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk SMA Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 10 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    <!-- kelas 6 platinum -->
                                    @elseif((strpos($prog->tingkat_program, '6 SD') !== FALSE))
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan Masuk SMP Favorit</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 5 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @elseif((strpos($prog->tingkat_program, '5 SD') !== FALSE) ||
                                    (strpos($prog->tingkat_program, '4 SD') !== FALSE))
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan nilai rata-rata rapor ≥ 80,00</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 5 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @else
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/jaminan.png"
                                            style="width:54px">
                                        <p class="text-center"><b>Jaminan nilai rata-rata rapor ≥ 80,00</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/kapasitas.png"
                                            style="width:54px">
                                        <p class="text-center">Kapasistas kelas <br><b>maksimal 10 siswa</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/tst.png"
                                            style="width:54px">
                                        <p class="text-center">Mendapatkan Layanan <br> <b>TST</b></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="rounded mx-auto d-block" src="/img/program/siaga.png"
                                            style="width:54px">
                                        <p class="text-center">Dan masih banyak fasilitas lainnya</p>
                                    </div>
                                    @endif
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection