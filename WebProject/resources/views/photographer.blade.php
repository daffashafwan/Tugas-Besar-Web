<!DOCTYPE html>
<html>

<Head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/photographer.css" />
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home/logout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profil/{{ Auth::user()->id }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
            @foreach($gambar as $g)
            <div class="item">
                <div class="item_left">
                    <div class="box">
                        <img src="asset/ava1.png" alt="profile1">
                        <div class="id">
                            <h5>{{$g->name}}</h5>
                            <h6>{{$g->email}}</h6>
                            <p>Fotografer pribadi</p>
                            <p>Cp = +39 222 333 555</p>
                        </div>
                    </div>
                </div>
                <div class="item_right">
                    <div class="imgcontainer">
                        <img src="./css/asset/porto1.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>
                    <div class="imgcontainer">
                        <img src="./css/asset/porto2.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>
                    <div class="imgcontainer">
                        <img src="./css/asset/porto3.png" alt="image1" width="272" height="177">
                        <div class="bottom-left">caption</div>
                    </div>

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
