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
<h1>Tambah film</h1>

{!! Form::open(['url' => '/admin/kategori/'.$kategori->slug,'files' => 'true','enctype'=>'multipart/form-data'])  !!}

<div class="form-group">
{!! Form::label('judul', 'Judul:') !!}
{!! Form::text('judul',null,['class'=>'form-control', 'maxlength' => '100']) !!}
</div>

<div class="form-group">
{!! Form::label('tahun', 'Tahun:') !!}
{!! Form::text('tahun',null,['class'=>'form-control', 'maxlength' => '100']) !!}
</div>

<div class="form-group">
{!! Form::label('deskripsi', 'Deskripsi:') !!}
{!! Form::textarea('deskripsi',null,['class'=>'form-control', 'maxlength' => '1000']) !!}
</div>

<div class="form-group">
{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
</body>
</html>