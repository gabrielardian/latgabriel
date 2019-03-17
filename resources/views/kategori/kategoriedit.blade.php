<html>
<head>
	<h2>Edit Kategori</h2>
</head>
<body>
 
	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($kategoris as $kategori)
	<form action="/kategori/update" method="post">
		{{ csrf_field() }}
     
		<input type="hidden" name="id" value="{{ $kategori->id }}"> <br/>
		Kategori <input type="text" required="required" name="nama_kategori" value="{{ $kategori->kategori }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>