<!DOCTYPE html>
<html>
<head>
<title>Profil</title>
</head>
<body>

<h1>Profil Mahasiswa</h1>

<p>Nama: {{ $nama }}</p>
<p>NIM: {{ $nim }}</p>
<p>Prodi: {{ $prodi }}</p>
<p>Semester: {{ $semester }}</p>
@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<h1>Profil Mahasiswa</h1>

<p>Nama : {{ $nama }}</p>
<p>NIM : {{ $nim }}</p>
<p>Prodi : {{ $prodi }}</p>
<p>Semester : {{ $semester }}</p>

<h3>Keahlian</h3>

<ul>
@foreach($keahlian as $skill)
<li>{{ $skill }}</li>
@endforeach
</ul>

</body>
</html>
@foreach ($keahlian as $k)
    <li>{{ $k }}</li>
@endforeach
</ul>
@endsection
