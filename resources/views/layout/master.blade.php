<html>
<head>
</head>
<body>
    <nav>
         <a href = "/belajarlaravel/public/home">Home</a>
         <a href = "/belajarlaravel/public/book">Buku</a>
         <a href = "/belajarlaravel/public/barang">Barang</a>
    </nav>
    {{--Tempat Konten Dinamis--}}
        @yield('konten')
    {{--Akhir Tempat Konten Dinamis--}}

    <footer>Assalaam</footer>    
</body>
</html>