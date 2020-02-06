<html>
<head>
</head>
<body>
    <center>List Book</center>
          @foreach($book as $data)
          
            TIitle    :{{$data->title}}
            Publisher :{{$data->publisher}}
            Pages     :{{$data->pages}}
             <a href ="/belajarlaravel/public/book/{{$data->id}}">show</a>
          @endforeach                      
</body>
</html>