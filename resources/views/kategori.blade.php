<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <center><h2>Kategori FILM</h2></center>              
  
  <table class="table table-bordered">
    <thead>
      <tr>
          <th><center>idkategori</center></th> 
          <th> <center>kategori</center></th>
      </tr>
    </thead>
    <tbody>
      @foreach($kategoris as $kategori)
      <tr>
        <td>
         <center> {{$kategori->id}} </center>
        </td>
        <td>
          <center>{{$kategori->kategori}}</center>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
