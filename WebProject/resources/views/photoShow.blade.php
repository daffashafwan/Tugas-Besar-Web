<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<title>Tutorial Grid System Bootstrap 4 - www.malasngoding.com</title> 
</head> 
<body> 


	<div class="container-fluid" style="margin:10%">

		<center>
			<h3>Grid Bootstrap</h3>
			<h4>www.malasngoding.com</h4>
		</center>

		<div class="row">
			@foreach($gambar as $g)
			<div class="col-md-3">
				<img width="150px" src="{{ url('/data_file/'.$g->file) }}">
				</br>
			</div>
			@endforeach
		</div>


	</div>


	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
</body> 
</html>
