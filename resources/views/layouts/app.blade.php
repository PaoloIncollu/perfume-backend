<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/svg+xml" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw7HGZeDZhcenqWe4MQTJ2N8BFRZQ4VOibKw&s" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Douglas</title>

        <!-- Scripts -->
        @vite('resources/js/app.js')

        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"|
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header class="d-flex align-items-center">
            <nav class="navbar navbar-expand col-12">
                <div class="container-fluid px-5">
                    
                    
                    <div class="collapse navbar-collapse" id="navbarText">

                        <img class="img-logo col-auto me-auto " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw7HGZeDZhcenqWe4MQTJ2N8BFRZQ4VOibKw&s" alt="douglas">

                        <h1 class='text-center fw-bold col me-auto title'>
                            DOUGLAS
                        </h1>
                    <!--<ul class="navbar-nav me-auto ">
                            <li class="nav-item">
                                <a class="nav-link fw-bold fs-4" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold fs-4" href="{{ route('admin.perfumes.index') }}">Profumi</a>
                            </li>
                        </ul>-->

                        <button type="button" class="text-white fw-bold btn bg-black me-2" >

                            <a href="{{ env('FRONTEND_URL') }}" class="nav-link ">

                                <span>
                                    Homepage
                                </span>
                            </a>
                        </button>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn bg-black text-white fw-bold">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <main class="">
            <div class="container-fluid">
                @yield('main-content')
            </div>
        </main>
    </body>
</html>
