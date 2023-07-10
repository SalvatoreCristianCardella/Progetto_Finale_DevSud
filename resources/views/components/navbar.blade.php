<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 w-100 d-flex justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tutti gli articoli</a>
        </li>       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cerca tra gli annunci" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
      
      {{-- Bottoni registrati e login --}}
      <button class="button-48 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#registrati" role="button"><span class="text">Registrati</span></button>

      <button class="button-48 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#login" role="button"><span class="text">Login</span></button>
      {{-- fine bottoni --}}
   </div>
  </div>
</nav>
{{-- Offcanvas bottoni navbar --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="registrati" aria-labelledby="registrati">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="login" aria-labelledby="login">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
{{-- Fine offcanvas --}}

  
