<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
@foreach($users as $p)
	<h2></h2>


	
	
	<br/>
	<br/>

	

	
		


 <div >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<table width="100%">
					<tr>
					<td align="left" width="50%">
                    <h4 class="modal-title" id="myModalLabel">Edit Profil {{ $p->name }}</h4>
					</td>
					<td align="right" width="50%">
					<div align="right"><a href="/profil/{{ $p->id }}"> Kembali</a></div>
					</td>
					</tr>
					</table>
                    </div>
                <div class="modal-body">

                    
					
					
					<form action="/profil/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->id }}">

                    <label for="exampleInputEmail1">Nama : </label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $p->name }}" name="name" value="{{ $p->name }}">
					
                     
					
					
                    
					<hr>
					
					<label for="exampleInputEmail1">Email : </label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $p->email }}" name="email" value="{{ $p->email }}">
					   
					
					<hr>
					
					<label for="exampleInputEmail1">Jenis Kelamin : </label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $p->jenis_kelamin }}" name="jenis_kelamin">
					
					
					<hr>
					
					<label for="exampleInputEmail1">Tanggal Lahir: </label>
					<input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $p->tanggal_lahir }}" name="tanggal_lahir">
					
					
					<hr>
					
					<label for="exampleInputEmail1">Alamat: </label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $p->alamat }}" name="alamat">
					
					
					<hr>
					
					<label for="exampleInputEmail1">Pengalaman: </label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $p->experience }}" name="experience">
					
                    
                </div>
                <div class="modal-footer">
                    <center>
					
                    <input type="submit" value="Simpan Data">
					
                    </center>
                </div>
				</form>
				@endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>