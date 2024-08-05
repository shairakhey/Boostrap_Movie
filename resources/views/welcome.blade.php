<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bstation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
    @vite('resources/css/app.css')
</head>
<body>
<!-- Header -->
<div>
   @include('navigasi') 
   
<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       <div class="container-fluid">
           <ul class="navbar-nav">
               <li class="nav-item">
                   <a class="nav-link active" href="#">DRAMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FANTASY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ROMANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CRIME</a>
               </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MYSTERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">COMEDY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HOROR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ANIME</a>
                </li>
           </ul>
       </div>
</nav>
<!-- End navbar -->

<!-- Content -->
@foreach ($banner as $bannerItem)
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2 class="font-bold font-kanit text-xl">TRENDING</h2>
      <br>
      <h5 class="font-bold font-lato">Inside Out 2</h5>
      <h1>June 11, 2024</h1>
      <img src="{{$imageBaseURL}}/original{{$bannerItem->backdrop_path}}" class="w-5px h-2.5px">
      <p>Genre : Adventure, Animation, Family.</p>
      <br>
      <h3 class="mt-4 font-bold font-lato text-1xl">Lihat lainnya</h3>
      <ul class="nav nav-pills flex-column bg-white navbar-dark">
                <li class="nav-item">
                   <a class="nav-link active" href="#">DRAMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FANTASY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ROMANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CRIME</a>
               </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MYSTERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">COMEDY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HOROR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ANIME</a>
                </li>
      </ul>
      <hr class="d-sm-none">
</div>


    <div class="col-sm-8">
      <h5 class="font-bold font-kanit text-xl">FILM TERBARU</h5>
      <br>
      <h2 class="font-lato font-bold">Deadpool & Wolverine</h2>
      <h1>July 24, 2024</h1>
      <img src="{{$imageBaseURL}}/original{{$bannerItem->backdrop_path}}" class="w-10px h-5px">
      <p>Genre : Action, Adventure, Science Fiction, Superhero</p>
      <p>Disutradarai oleh Shaw Levy, "Deadpool & Wolverine" menjadi salah satu film yang paling diantisipasi kehadirannya di tahun ini.</p>

      <h2 class="mt-5 font-lato font-bold">A Quiet Place: Day One</h2>
      <h1>June 26, 2024</h1>
      <img src="{{$imageBaseURL}}/original{{$bannerItem->backdrop_path}}" class="w-10px h-5px">
      <p>Genre : Horor, Fiksi Ilmiah</p>
      <p>Disutradarai oleh Michael Sarnoski, "A Quiet Place: Day One" adalah film horor dan fiksi ilmiah yang merupakan prekuel dari film "A Quiet Place.</p>
    </div>
  @endforeach

  </div>
</div>


{{--- Top 10 movies section --}}
    <div class="mt-12">
        <span class="font-kanit font-bold text-xl ml-28">Top 10 Movies</span>
        <div class="w-auto flex flex-row overflow-x-auto pl-10 pt-6 pb-10">
            @foreach ($loopMovies as $movieItem)

            @php 
                $original_date = $movieItem->release_date;
                $timestamp     = strtotime($original_date);
                $movieYear     = date("Y", $timestamp);

                $movieID       = $movieItem->id;
                $movieTitle    = $movieItem->title;
                $movieRating   = $movieItem->vote_average;
                $movieImage    = "{$imageBaseURL}/w500{$movieItem->poster_path}";
            @endphp
            <a href="movie/{{$movieID}}" class="group">
                <div class="min-w-[215px] min-h-[343px] bg-white drop-shadow-xl group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-4 flex flex-col mr-4 duration-100">
                    <div class="rounded-[32px] overflow-hidden">
                        <img src="{{$movieImage}}" class="w-full h-[248px] rounded-[32px] group-hover:scale-150 duration-200">
                    </div>
                    <span class="font-inter font-bold text-xl mt-5 line-clamp-1 group-hover:line-clamp-none">{{$movieTitle}}</span>
                    <span class="font-inter font-bold text-sm mt-1">{{$movieYear}}</span>
                    <div class="items-center flex flex-row mt-1">
                        <svg width="24" height="24"  xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.9 4.5C15.9 3 14.418 2 13.26 2c-.806 0-.869.612-.993 1.82-.055.53-.121 1.174-.267 1.93-.386 2.002-1.72 4.56-2.996 5.325V17C9 19.25 9.75 20 13 20h3.773c2.176 0 2.703-1.433 2.899-1.964l.013-.036c.114-.306.358-.547.638-.82.31-.306.664-.653.927-1.18.311-.623.27-1.177.233-1.67-.023-.299-.044-.575.017-.83.064-.27.146-.475.225-.671.143-.356.275-.686.275-1.329 0-1.5-.748-2.498-2.315-2.498H15.5S15.9 6 15.9 4.5zM5.5 10A1.5 1.5 0 0 0 4 11.5v7a1.5 1.5 0 0 0 3 0v-7A1.5 1.5 0 0 0 5.5 10z" fill="#000000"/></svg>
                        <span class="font-inter text-sm mt-1">{{$movieRating}}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
{{--- End top 10 movies section --}}
<!-- End content -->

<div class="mt-5 p-4 bg-dark text-white text-center">
    <p>DIBUAT OLEH <a href="https://www.instagram.com/shairakhey/">@SHAIRAKHEY</a></p>
</div>

</div>
<!-- End header -->
</body>
</html>
