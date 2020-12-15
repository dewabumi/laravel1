@extends('layouts.layout')

@section('konten')
<div class="jumbotron JumboHeaderImg">
    <div class="container">
        <div class="row mx-auto">
            @foreach($program as $prog)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>{{ $prog->nama_program }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection