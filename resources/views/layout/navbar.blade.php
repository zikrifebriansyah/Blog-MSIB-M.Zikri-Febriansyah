<nav class="navbar navbar-expand-lg bg-body-tertiary">
     <div class="container-fluid">
          <a class="navbar-brand" href="/home">Blog MSIB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav me-auto mx-auto">
                    <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="/home">
                             <i class="bi bi-house-door"></i> Home
                         </a>
                     </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/post">Post</a>
                    </li>
               </ul>
               <div class="d-flex">
                    @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                         @csrf
                         <button type="submit" class="btn btn-danger">
                             <i class="bi bi-box-arrow-right"></i> Logout
                         </button>
                     </form>
                    @else
                   
                    <a class="btn btn-primary me-2" href="/register">
                        <i class="bi bi-person-plus"></i> Register
                    </a>
                         <a class="btn" href="/login">
                              <i class="bi bi-box-arrow-in-right"></i> Login
                          </a>
                    @endauth
               </div>
          </div>
     </div>
</nav>
