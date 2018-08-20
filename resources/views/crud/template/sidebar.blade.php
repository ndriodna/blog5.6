<ul class="sidenav" id="mobile-demo" style="width: 200px; background-color: #e3f2fd ">
	<li>
		<a class="waves-effect " href="{{url('/')}}">
			Dashboard
		</a>
	</li>
	<li>
		<a class="waves-effect " href="{{route('post.index')}}">
			Posting
		</a>
	</li>
	<li>
		<a class="waves-effect " href="">
			Game
		</a>
	</li>
	<li>
		<a class="waves-effect " href="">
			Buku
		</a>
	</li>
</ul>

@role('superadministrator')
<div class="grey lighten-3 he-s2 hide-on-med-and-down" style="padding: 0;" >		
		<ul class="pad-li" >
			<li>
				<a class="waves-effect " href="{{url('/')}}">
					Dashboard
				</a>
			</li>
			<li>
				<a class="waves-effect " href="{{route('post.index')}}">
					Posting
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Game
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Buku
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Superadministrator
				</a>
			</li>
		</ul>
	</div>
	@else
	<div class="grey lighten-3 he-s2 hide-on-med-and-down" style="padding: 0;">
		<ul class="pad-li">
			<li>
				<a class="waves-effect " href="{{url('/')}}">
					Dashboard
				</a>
			</li>
			{{-- <li>
				<a class="waves-effect " href="{{route('post.index')}}">
					Posting
				</a>
			</li> --}}
			<li>
				<a class="waves-effect " href="">
					Game
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Buku
				</a>
			</li>
		</ul>
	</div>
@endrole

@role('administrator')
<div class="grey lighten-3 he-s2 hide-on-med-and-down" style="padding: 0;">
		<ul class="pad-li">
			<li>
				<a class="waves-effect " href="{{url('/')}}">
					Dashboard
				</a>
			</li>
			<li>
				<a class="waves-effect " href="{{route('post.index')}}">
					Posting
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Game
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Buku
				</a>
			</li>
			<li>
				<a class="waves-effect " href="">
					Administrator
				</a>
			</li>
		</ul>
	</div>
@endrole
