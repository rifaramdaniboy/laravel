<html>
<head>
</head>
<body>
    <center>List Barang</center>
    <nav>
         <a href = "/belajarlaravel/public/home">Home</a>
         <a href = "/belajarlaravel/public/book">Buku</a>
         <a href = "/belajarlaravel/public/barang">Barang</a>
    </nav>
    <table border = "1">
      <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($barang as $data)
          <tr>
             <td>{{$data->kode}}</td>
             <td>{{$data->nama}}</td>
             <td>{{$data->harga}}</td>
             <td><a href ="/belajarlaravel/public/barang/{{$data->id}}">show</a></td>
             </tr>
          @endforeach
          </tbody>                       
</body>
</html>