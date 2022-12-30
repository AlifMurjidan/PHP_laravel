@extends('layouts.mainlayout')

@section('title', 'Home')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Home</title>
     CSS only
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body> -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Blade Templating</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
    <!-- <div class="container"> -->
    @section('content')
    <h1>Ini Halaman Home</h1>
    <h2>Selamat datang, {{ $name }}. Anda adalah {{ $role }}</h2>

    <!-- @if ($role == 'admin')
        <a href="">ke halaman admin</a>
    @elseif ($role == 'staff')
        <a href="">ke halaman gudang</a>
    @else
        <a href="">ke halaman whatewer</a>
    @endif -->

    <!-- @switch($role)
        @case($role=='admin')
            <a href="">ke halaman admin</a>
            @break

        @case($role=='staff')
            <a href="">ke halaman gudang</a>
            @break

        @default
            <a href="">ke halaman whatewer</a>

    @endswitch -->

    <!-- @for($i = 0; $i < 5; $i++)
        {{$i}} <br>
    @endfor -->

    <!-- @foreach($buah as $data)
    {{$data}} <br>
    @endforeach -->
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
        @foreach($buah as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
        </tr>
    @endforeach
    </table>
    <!-- JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> -->
    @endsection