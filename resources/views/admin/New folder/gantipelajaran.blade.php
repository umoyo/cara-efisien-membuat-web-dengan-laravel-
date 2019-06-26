@extends('layouts.app')


<form method="post" action="{{ url('admin/pengetahuan/'.$pelajaran->id) }}">

              @csrf
	        @method('patch')
          <div class="form-group">
              <label for="name">Nama Pelajaran:</label>
              <input type="text" class="form-control" name="nama" value="{{$pelajaran->nama}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Deskripsi :</label>
              <input type="textarea" class="form-control" name="deskripsi" value="{{$pelajaran->deskripsi}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Book</button>
      </form>
