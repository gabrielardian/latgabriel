<html>
<head>
	<title>Tambah kategori</title>
</head>
<body>
 
	<h3>Tambah Kategori</h3>
 
	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="{{ route('kategori.store') }}" method="post">
		{{ csrf_field() }}
		Kategori <input type="text" name="nama_kategori" class="form-control"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>