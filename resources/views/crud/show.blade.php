@extends('crud.template.app')
@section('content')
<style type="text/css">
	.max{
		max-width: 80%;
		max-height: 80%;
	}
</style>
<a href="{{route('post.index')}}" class="btn-flat blue lighten-2 white-text">Kembali <i class="material-icons left">chevron_left</i></a>
	<div class="card col s12">
		<div class="card-title">
			<h4>{{$post->judul}}</h4>
		</div>
		<div class="card-content">
			<span>{{$post->created_at->toFormattedDateString()}}</span>
			<div class="card-image">
				<img class="max" src="{{Storage::url($post->image)}}" alt="">
			</div>
			<p> {!!$post->isi!!} </p>
		</div>
	</div>
@endsection