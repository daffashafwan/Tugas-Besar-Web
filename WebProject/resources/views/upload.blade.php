@extends('layouts.app')

@section('content')
@foreach($User as $p)
@endforeach
	<div class="row" style="margin-top:2%">
		<div class="container">

			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $p->id }}">
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
				<h4 class="my-5">Data</h4>
				
				 <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Keterangan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
							@if($g->email==(Auth::user()->email))
								<tr>
									<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
									<td>{{$g->keterangan}}</td>
									<td>
									<a class="btn btn-danger" href="/upload/{{ $g->id }}">Hapus</a>
									</td>
									</tr>
							@endif
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
	@endsection
