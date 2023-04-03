<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
   
    <nav>
         <h2>Supply Chain Management System</h2>

         <ul class="navlist">
         @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                </li>
                                <li>
                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
         </ul>
</nav>
                    @if(Session::has('alert'))
                            <div class="alert">
                            <strong>Success!</strong> {{ Session::get('alert') }}
                            </div>
                        @endif   

   <script>
  
  const alert = document.getElementsByClassName('alert');
  setTimeout(() => {
    alert[0].style.display = 'none';
  }, 3000);
 </script>
 
</body>
</html>
