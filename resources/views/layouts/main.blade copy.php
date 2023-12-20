<!DOCTYPE html>
<html>
<head>
<style>
body { margin:0; }
.atas { 
    display:flex; 
    height: 50px;
    line-height: 50px;
    background: lightseagreen;
}
.bawah {
  display: flex;
  height: calc(100vh - 50px);
  align-items: stretch;
  grid-template-columns: auto 1fr;
}

.bawah > div {
  
  width: 100px;
  padding:20px;
  flex-wrap: wrap;
}
.logo {flex:20%;}
.top-nav {flex:80%;}
.sidebar {flex:20%;min-width:120px;background: lightblue;}
.content {flex:80%;background:lightcyan;}
</style>
</head>
<body>

<div class="atas">
    <div class="logo">Logo</div>
    <div class="top-nav">User | Logout</div>
</div>
<div class="bawah">
  <div class="sidebar">
    <h3>Menu Utama</h3>
    <ul>
        <li><a href="{{ route('buku.index') }}">Buku</a></li>
        <li><a href=""></a>Anggota</li>
        <li><a href=""></a>Pinjam</li>
    </ul>
  </div>
  <div class="content"> @yield('content') </div>  
</div>

</body>
</html>


