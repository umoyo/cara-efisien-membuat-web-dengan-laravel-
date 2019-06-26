

<h1>Ganti film</h1>

{!! Form::model($film,['method' => 'patch','url'=>['admin/kategori/film',$film->slug] ,'files' => 'true','enctype'=>'multipart/form-data']) !!}
 <div class="form-group">
{!! Form::label('judul', 'judul:') !!}
{!! Form::text('judul',null,['class'=>'form-control', 'maxlength' => '100']) !!}
{!! Form::text('kategori_id',$kategori->id,['class'=>'form-control', 'maxlength' => '100']) !!}
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
{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}