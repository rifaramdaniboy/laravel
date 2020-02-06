<html>
<head>
</head>
<body>
      <fieldset>
      <legend>show data</legend>
      Title     :<b>{{$book->title}}</b><br>
      Publisher :<b>{{$book->publisher}}</b><br>
      Price     :<b>{{$book->price}}</b><br>
      synopsis  :<b>{{$book->synopsis}}</b>      
      status    :<br>
                @if($book->status == 1)
                Premium
                @else
                Pirated
                @endif
      Date      :{{ $book->date }}
      </fieldset>       
</body>
</html>