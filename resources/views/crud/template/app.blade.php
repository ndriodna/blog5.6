{{-- include header --}}
@include('crud.template.header')
<style type="text/css">
.he-s2{
		float: left;
		position: fixed;
		z-index: 99;
		display: block;
		top: 0;
		left: 0;
		padding: 0;
		height: 100%;
		width: 230px;
		line-height: 50px;
		padding-top: 50px;
	}
	.he-s2 li{
		
	}
	.pad-li li a{
		position: relative;
		top: 60px;
		padding-left: 30px;
		display: block;
	}
	.pad-li li a:hover{
		background-color:#cfd8dc;
	}
</style>
<div class="row" style="margin: 0">
	<!-- include sidebar -->
	
	@include('crud.template.sidebar')
	<div class="col s12">
		<div class="container">
			<div class="row">
				<div class="col s12 push-s1" style="top: 20px;">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</div>
{{-- include footer --}}
@include('crud.template.footer')