<style>
    #table {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #table td, #table th {
      border: 1px solid #000000;
      padding: 8px;
    }
    
    #table tr:nth-child(even){background-color: #f2f2f2;}
    
    #table tr:hover {background-color: #ddd;}
    
    #table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #00BFFF;
      color: white;
    }
    </style>
<h1>Laporan Penggajian Sewer </h1>
<table id="table" class="table" ref="content">
    <tr>
      <th>NIP</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Nomor HP</th>
      <th>Jenis Kelamin</th>
      <th>Gaji</th>
      <th>Posisi</th>
    </tr>
       @foreach ($data_sewer as $sewer)
        <tr>
        <td>{{$sewer->nip}}</td>
      <td>{{$sewer->nama}}</td>
      <td>{{$sewer->tgl_lahir}}</td>
      <td>{{$sewer->alamat}}</td>
      <td>{{$sewer->no_hp}}</td>
      <td>{{$sewer->jenis_kelamin}}</td>
      <td>{{$sewer->gaji}}</td>
      <td>{{$sewer->posisi}}</td>
        </tr>
      @endforeach
  </table> 