<?php
    $user_id= auth()->id();    
?>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ $user_id }}/show">
              <span data-feather="home" class="align-text-bottom"></span>
              Mi perfil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Mis aplicaciones
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout')}}">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              LogOut
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

                        