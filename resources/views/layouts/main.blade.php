<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Informasi Perpustakaan</title>

  <link href="/css/bootstrap.css" rel="stylesheet">
  <script src="/js/bootstrap.js"></script>

  @stack('style')
  <style>
    /* body { margin:0; }

    .top { height: 50px; background: darkblue;}

    .row {
      min-height: calc(100vh - 50px);
      background: lightgray;
      display:flex;
    }
    .sidebar {
      flex:20%;
      background: grey;
      min-width: 200px;
      padding:20px;
    }
    .content { flex:80%;padding:20px;}
    table.dataTable tbody tr.redClass { background:lightpink;} */
    .sidebar {min-height: calc(100vh - 56px);}
  </style>
</head>

<body>
  
    <nav class="navbar flex-md-nowrap bg-primary navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll d-flex justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  
  <div class="container-fluid ">
    <div class="row">
      <div class="sidebar col-2 bg-secondary-subtle offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <h3>Menu Utama</h3>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="Buku">Buku</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Anggota</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Pinjam</a></li>
        </ul>
      </div>
      <div class="content col-10">
        @yield('content')
      </div>
    </div>
  </div>
  @stack('script')

</body>

</html>