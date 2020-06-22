@extends('layouts.app')

@section('content')
@foreach($users as $p)
@endforeach
    <!-- Modal -->
    <div >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Info Akun {{ $p->name }}</h4>
                    </div>
                <div class="modal-body">

                    <center>
                    <h3 class="media-heading">{{ $p->name }}</h3>
					<table border="0">
					<tr>
					<td>
                    <span><strong>Nama: </strong></span>
                        <span class="label label-warning">{{ $p->name }}</span>
                    </td>
					</tr>
					<tr>
					<td>
					<span><strong>Email: </strong></span>
                        <span class="label label-warning">{{ $p->email }}</span>
                    </center>
					</td>
                    </tr>
					<table>
					<hr>
					<center>
                    <p class="text-left"><strong>Jenis Kelamin: </strong><br>
                    {{ $p->jenis_kelamin }}    
					<br>
                    </center>
					<hr>
					<center>
                    <p class="text-left"><strong>Tanggal Lahir: </strong><br>
                    {{ $p->tanggal_lahir }}    
					<br>
                    </center>
					<hr>
					<center>
                    <p class="text-left"><strong>Alamat: </strong><br>
                    {{ $p->alamat }}    
					<br>
                    </center>
					<hr>
                    <center>
                    <p class="text-left"><strong>Pengalaman: </strong><br>
                    {{ $p->experience }}    
					<br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
					
                    <a href="/profil/edit/{{ $p->id }}" class="btn btn-primary" >Edit Profil</a>
                    </br>
                    <a href="/home" class="btn btn-Secondary" >Kembali</a>
					
                    </center>
                </div>
            </div>
        </div>
    </div>


@endsection















