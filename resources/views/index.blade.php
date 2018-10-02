<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Halaman Utama Dari View</h1>

	@if($d>=70 && $d<=100)
	<body style="background-color: red"></body>

	@elseif($d>30 && $d<=69)
	<body style="background-color: blue"></body>

	@elseif($d<=29 && $d>0)
	<body style="background-color: orange"></body>

	@else
	<body style="background-color: yellow"></body>

	@endif
	<h1>Nilai Anda adalah {{$d}}</h1>

	

	@foreach($namaArray as $nama)

		<h3>{{$nama}}</h3>

	@endforeach
</body>
</html>