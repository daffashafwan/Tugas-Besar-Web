<!DOCTYPE html>
<html>

<Head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/photographer.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Photographer</title>
</Head>

<body>
    <div id="container">
        <nav id="navbar">
            <h2 id="logo">Pamer.io</h2>
            <div class="navigation">
            @guest
                <a href="/landing">Home</a>
                <a href="/photo">Explore</a>
                <a href="">Photographer</a>
                <form action="/photo/cari" method="GET">
                <input id="formCari" name="cari" class="form-control form-control-sm" type="text" placeholder="Portofolio" value="{{ old('cari') }}">
                </form>
                <button class="btn btn-sm btn-outline-light" onclick="window.location.href='/login';">Sign In</button>
                @else
                <a href="/landing">Home</a>
                <a href="/photo">Explore</a>
                <a href="">Photographer</a>
                <form action="/photo/cari" method="GET">
                <input id="formCari" name="cari" class="form-control form-control-sm" type="text" placeholder="Portofolio" value="{{ old('cari') }}">
                </form>
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:black" href="/profil/{{ Auth::user()->id }}">Profil</a>
                                    <a class="dropdown-item" style="color:black" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                <button type="button" class="btn btn-sm btn-outline-light" onclick="window.location.href='/upload'";>Upload</button>
						@endguest
						</div>
        </nav>
        <div class="subtitle">
            <p>Para Fotografer yang mengabadikan kreasinya</p>

        </div>
        <div class="wrapper">
            @foreach($User as $u)
            <div class="item">
                <div class="item_left">
                    <div class="box">
                        <img src="asset/ava1.png" alt="profile1">
                        <div class="id">
                            <h5>{{$u->name}}</h5>
                            <h6>{{$u->email}}</h6>
                            <p>Fotografer pribadi</p>
                            <p>Cp = +39 222 333 555</p>
                        </div>
                    </div>
                </div>
                <div class="item_right">
               	@foreach($gambar as $g)
               		@if($g->user_id==($u->id))
                    <div class="imgcontainer">
                        <img src="{{ url('/data_file/'.$g->file) }}" alt="image1" width="272" height="177">
                        <div class="bottom-left">{{$g->keterangan}}</div>
                    </div>
                    @endif
                @endforeach    

                </div>
            </div>
            <hr>
            @endforeach
            <!--<div class="item">
                <div class="item_left">
                    <div class="box">
                        <img src="./css/asset/ava2.png" alt="profile1">
                        <div class="id">
                            <h5>Bucchiarati</h5>
                            <h6>Italy</h6>
                            <p>Fotografer pribadi</p>
                            <p>Cp = +39 222 333 555</p>
                        </div>
                    </div>
                </div>
                <div class="item_right">
                    <div class="imgcontainer">
                        <img src="./css/asset/porto4.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>
                    <div class="imgcontainer">
                        <img src="./css/asset/porto5.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>
                    <div class="imgcontainer">
                        <img src="./css/asset/porto6.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>

                </div>
            </div>
            <hr>
            <div class="item">
                <div class="item_left">
                    <div class="box">
                        <img src="./css/asset/ava3.png" alt="profile1">
                        <div class="id">
                            <h5>Bucchiarati</h5>
                            <h6>Italy</h6>
                            <p>Fotografer pribadi</p>
                            <p>Cp = +39 222 333 555</p>
                        </div>
                    </div>
                </div>
                <div class="item_right">
                    <div class="imgcontainer">
                        <img src="./css/asset/porto7.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>
                    <div class="imgcontainer">
                        <img src="./css/asset/porto8.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>
                    <div class="imgcontainer">
                        <img src="./css/asset/porto1.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>

                </div>
            </div>
            <hr>
-->
        </div>

        </div>

</body>
<footer>

</footer>

</html>
