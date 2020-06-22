@extends('layouts.app')

@section('content') 

<div style="margin-top:5%">
<form action="/photo/cari" method="GET">
	<label>Cari Disini</label>
	<input type="text" name="cari" placeholder="Cari Gambar .." value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>

	<div class="container-fluid" style="margin:2%">
		<div class="content" style="    display:grid; grid-template-columns: 100% auto; padding: 4em 1em;">
				<ul style="overflow: hidden; display:grid; list-style-type:none; margin:0; padding:0; grid-template-columns: repeat(4, auto);grid-template-rows: repeat(2, auto);">
				@foreach($gambar as $g)
					<!--<div class="col-md-3">
	     			<img data-toggle="modal" data-target="#myModal" src="{{ url('/data_file/'.$g->file) }}" style="width:50%;height:50%">
						<p>{{$g->name}}</p>
					</div>-->
					<li style="margin:5px; border:3px solid #ccc; float: left; width: 350px; max-height: auto;">
                    <span style="display:block;font-size:1.4em;margin-bottom:1px;color: red;text-align: center;">
                    <img src="{{ url('/data_file/'.$g->file) }}" style="width: 95%; max-height: 175px; margin-top: 10px; margin-left: auto; margin-right: auto;"/>
                    </span>
                    <h3 style="    padding: 5px;text-align: left;font-size: 18px;font-family: 'Oswald', sans-serif;font-weight: normal;">{{$g->name}}</h3>
                </li>
			
				@endforeach
				<!--<div id="myModal" class="modal fade" role="dialog">
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
				</div>-->
				</ul>
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

