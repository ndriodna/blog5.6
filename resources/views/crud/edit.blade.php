@extends('crud.template.app')
@section('content')
<a href="{{route('post.index')}}" class="btn-flat blue lighten-2 white-text">Kembali <i class="material-icons left">chevron_left</i></a>
<div class="card col s12" style="padding: 30px;">
	<form action="{{route('post.update', $post->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="input-field col s12">
			<input type="text" name="judul" value="{{$post->judul}}">
			<label>Judul</label>
		</div>
		<div class="input-field col s12">
			<label for="title">Isi</label>
			<textarea id="isi" name="isi"></textarea>
			<span>
				{{ $errors->first('isi') }}
			</span>
		</div>
		<div class="input-field col s12">
			<button type="submit" class="white-text btn-flat green lighten-1 ">Ubah <i class="material-icons right">create</i></button>
		</div>
	</form>
</div>

@endsection