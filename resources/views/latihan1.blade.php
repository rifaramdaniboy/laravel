<html>
<head>
</head>
<body>
    @foreach ($siswa as $data)
<br>
    Nama  : {[ $data['nama']  ]} 
    Kelas : {[ $data['kelas'] ]}
<hr> 
    @endforeach
</body>
</html>