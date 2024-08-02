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
                   <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
               </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
           </ul>
       </div>
</nav>
<!-- End navbar -->

<!-- Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>TOP 1 ANIME</h2>
      <h5>"Spirited Away"</h5>
      <div class="fakeimg"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
</div>

<div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>


<!-- {{--- Top 10 movies section --}}
    <div class="mt-12 col-sm-5">
        <span class="font-inter font-bold text-xl ml-28">Top 10 Movies</span>
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
{{--- End top 10 movies section --}} -->
<!-- End content -->

<div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
</div>

</div>
<!-- End header -->
</body>
</html>
