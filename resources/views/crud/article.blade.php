@extends('crud.template.app')
@section('title', 'post')
@section('content')
<style type="text/css">
	td{
		max-width: 100px;
		box-sizing: border-box;
	}
	.maxWidth{
		max-width: 100px;
	}
	.maxHeight{
		max-height: 200px;
		overflow: hidden;
	}
	/*.maxHeight:hover{
		overflow: scroll;
	}*/
</style>
<table class="highlight">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Isi</th>
			<th>Image</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@if(count($post) > 0)
		@foreach($post as $data)
		<tr>
			<td class=""><a href=" {{route('post.show', $data->slug_judul)}} " title="lihat"><i class="material-icons left">
				search
			</i></a>{{str_limit($data->judul,30)}}
		</td>
		<td class="">
			<div class="maxHeight">{!!str_limit($data->isi,100,'(...)')!!}</div>
		</td>
		<td class=""><img class="maxWidth" src="{{Storage::url($data->image)}}" alt="">
		</td>
		<td colspan="2" class="">
			<form action="{{route('post.destroy', $data->id)}}" method="POST" id="delete-form">
				@csrf
				@method('DELETE')
				<a href="{{route('post.edit', $data->id)}}" class="btn-flat blue white-text"><i class="material-icons">edit</i></a>
				<button type="submit" class="btn-flat blue white-text"><i class="material-icons">delete</i></button>
			</form>
		</td>
	</tr>
	@endforeach
	@else
	<h4>No Record Found</h4>
	@endif
</tbody>
</table>
<div class="fixed-action-btn">
<a class="btn-floating btn-large red" href="{{route('post.create')}}">
	<i class="large material-icons">add</i>
</a>
</div>
{!!$post->render()!!}
@endsection