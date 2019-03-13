@extends('layouts.adminmaster')
@section('kategori')
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<form action="{{ url()->current() }}">
    <div class="col-md-11">
        <input type="text" name="keyword" class="form-control" placeholder="Search users...">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form>
              
              
<table id="example1" class="table table-bordered table-striped">
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
 
          @endsection
