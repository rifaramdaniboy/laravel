<html>
<head>
</head>
<body>
    <center>List Barang</center>
    <table border = "1">
      <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga</th>
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