<html>
<head>
</head>
<body>
    <center>List Book</center>
    <nav>
         <a href = "/belajarlaravel/public/home">Home</a>
         <a href = "/belajarlaravel/public/buku">Buku</a>
         <a href = "/belajarlaravel/public/barang">Barang</a>
    </nav>
    <table border = "1">
      <thead>
        <tr>
            <th>Title</th>
            <th>Publisher</th>
            <th>Pages</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($book as $data)
          <tr>
             <td>{{$data->title}}</td>
             <td>{{$data->publisher}}</td>
             <td>{{$data->pages}}</td>
             <td><a href ="/belajarlaravel/public/book/{{$data->id}}">show</a></td>
             </tr>
          @endforeach
          </tbody>                       
</body>
</html>