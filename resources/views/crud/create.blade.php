@extends('crud.template.app')
@section('content')
<a href="{{route('post.index')}}" class="btn-flat blue lighten-2 white-text">Kembali <i class="material-icons left">chevron_left</i></a>
<div class="card col s12" style="padding: 30px;">
	<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="input-field col s12 {{ $errors->has('judul') ? ' has-error' : '' }}">
			<input id="judul" type="text" name="judul" class="{{$errors->has('judul')}}" required>
			@if($errors->has('judul'))
			<span class="">
				{{ $errors->first('judul') }}
			</span>
			@endif
			<label for="judul">Judul</label>
		</div>
		<div class="input-field col s12">
			<label for="title">Isi</label>
			<textarea id="isi" name="isi" required></textarea>
			<span>
				{{ $errors->first('isi') }}
			</span>
		</div>
		<div class="file-field input-field col s12">
			<div class="btn">
				<span>File</span>
				<input type="file" name="image">
			</div>
			<div class="file-path-wrapper">
				<input type="text" class="file-path validate">
			</div>
		</div>
		<div class="input-field col s12">
			<button type="submit" class="white-text btn-flat green darken-1 ">Simpan <i class="material-icons right">create</i></button>
			<button type="reset" class="white-text btn-flat red ">reset <i class="material-icons right"></i></button>
		</div>
	</form>
</div>
@endsection