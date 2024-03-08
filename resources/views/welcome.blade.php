<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Slicing</title>
    </head>
    <body style="background-color: aqua">
            {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Home</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/admin/dashboard') }}" class="nav-link">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    @endif
                                @endauth
                        @endif
                  </div>              
                </div>
              </nav>
               --}}
            <div class="container m-5"><br>
              <div class="card text-center">
                <div class="card-header">
                  WELCOME TO TUGAS SLICING LARAVEL
                </div>
                <div class="card-body">
                  <h5 class="card-title">From: Tutorial Slicing Template Admin Stisla dengan Laravel</h5>
                  <p class="card-text">Dari tutorial hasil yang akan di dapatkan adalah: <br>
            1. Halaman Login dan Register <br>
        2. Halaman Dashboard <br></p>
        <a href="https://elearning.smapluspgri.sch.id/mod/book/view.php?id=50&chapterid=151">Tutorial ada di sini</>
                  @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                    @endif
                                @endauth
                        @endif
                </div>
              </div>
            </div>

            <footer>
                <div class="container"
                style="position: absolute; bottom:0%; width:100%; text-align:center; background-color:azure">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by Amelia Nurbaeti
                </div>
            </footer>
           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
