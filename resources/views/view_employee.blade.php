@extends('utama')

@section('view_employee')
ini ditampilkan section  {{ $id }} <br>
@endsection

@for ($x = 0; $x <= $id; $x++)
        nilainya adalah {{ $x }} <br>
    @endfor


