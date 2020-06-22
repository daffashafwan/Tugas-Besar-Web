@extends('layouts.app')

@section('content') 
<p>Cari Gambar :</p>
<form action="/photo/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari Gambar .." value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>


	<div class="container-fluid" style="margin:10%">
		<div class="row">
			@foreach($gambar as $g)
			<div class="col-md-3">
	     <img data-toggle="modal" data-target="#myModal" src="{{ url('/data_file/'.$g->file) }}" style="width:50%;height:50%">
			</div>
			
			@endforeach
						<div id="myModal" class="modal fade" role="dialog">
    			<div class="modal-dialog">
        		<div class="modal-content">
            	<div class="modal-body">
                <img class="img-responsive" src="" />
            	</div>
            	<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            	</div>
        	</div>
    		</div>
			</div>
		</div>


	</div>

	<script>
		$(document).ready(function () {
        $('#myModal').on('show.bs.modal', function (e) {
            var image = $(e.relatedTarget).attr('src');
            $(".img-responsive").attr("src", image);
        });
		});
	</script>
	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
@endsection

