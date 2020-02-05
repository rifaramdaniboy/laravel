<html>
<head>
</head>
<body>
    <center>Data Pegawai</center>
    @foreach ($pegawai as $data)
          @if ($data['jabatan'] == "manager")
               @php $jab =500000; @endphp
          @elseif ($data['jabatan'] == "sekretaris")
               @php $jab =350000; @endphp
          @elseif ($data['jabatan'] == "staff")
               @php $jab =250000; @endphp
          @endif
          
          @if ($data['jam_kerja'] > 250 )
              @php $bonus = 0.10 * $jab; @endphp
          @elseif ($data['jam_kerja'] > 200 )
              @php $bonus = 0.05 * $jab; @endphp
          @else
              @php $bonus = 0; @endphp
          @endif 
          
          
               @php $ppn = 0.025 * $jab; @endphp
               @php $gaber =($jab + $bonus) - $ppn; @endphp
               Nama         : {{$data['nama'] }} <br>
               Agama        : {{$data['agama'] }} <br>
               jabatan      : {{$data['jabatan'] }} <br>
               jam kerja    : {{$data['jam_kerja'] }} <br>
               Gaji         : {{$jab}} <br>
               Bonus        : {{$bonus}} <br>
               PPN          : {{$ppn}} <br>
               Gaji Bersih  : {{$gaber}} <br>
               <hr>
               @endforeach
               
</body>
</html>