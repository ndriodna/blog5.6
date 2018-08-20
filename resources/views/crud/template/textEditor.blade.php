<head>
	<script type="text/javascript" src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
	<script type="text/javascript">
	tinymce.init({
	selector: '#isi',
	theme: 'modern',
	width: 600,
	height: 300,
	 plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
	});
	</script>
</head>
@yield('textEditor')