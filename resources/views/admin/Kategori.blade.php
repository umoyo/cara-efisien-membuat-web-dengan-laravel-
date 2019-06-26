<html>


<head>

    <title>kategori</title>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
	$('.table-paginate').dataTable();
 } );
</script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" language="javascript" src="https:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body >
<th><font color="black" style="text-align: center">
<h3><b >KATEGORI</b></h3> 
</font>

@if (Session::get('alert-success'))
     <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> data berhasil ditambah.
  </div>  
@elseif (Session::get('alert-ganti'))
     <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> data berhasil diganti.
  </div>   
  
  @endif

<font color="black" style="text-align: left">
<p><a href="{{url('admin/kategori/create')}}" class="btn btn-success">Tambah</a></p>
</font>

<div style="overflow-x:auto;">
<table id="myTable" class="table table-paginate" cellspacing="0" border="0" width="100%" >
<thead>
<tr bgcolor="">
</th>
<tr>
      <th>id</th>
      <th>Nama</th>
      <th>detail</th>
      <th>Aksi</th>
    </tr>			
</tr>
</thead>	
<tbody>	
@foreach ($kategori as $index => $ajar)
    <tr>
<td>{!! $index +1 !!}</td>

<td>{!!$ajar->nama!!} </td>
<td>{!!$ajar->deskripsi!!} </td>
<td>
<div class="row">
<div class="col-sx-4">
<a href="{{url('admin/kategori/'.$ajar->slug)}}" class="btn btn-primary">Isi kategori</a>
</div>
<div class="col-sx-4">
<a href="{{url('admin/kategori/'.$ajar->slug.'/edit')}}" ><span class = "btn btn-success glyphicon glyphicon-edit">ganti</span></a>
</div>
<div class="col-sx-4">
<form method="post" action="{{url('admin/kategori/'.$ajar->id)}}">@csrf  @method('delete')<input type="submit" name="hapus" value="hapus"> </form>
</div>

</div>
</td>
</tr>
@endforeach</tbody>
</table>
</div>
</body>

