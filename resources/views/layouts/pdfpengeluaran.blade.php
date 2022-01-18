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
<h1>Laporan Pemasukkan Amoora </h1>
<table id="table" class="table" ref="content">
    <tr>
         <th>Keterangan Pengeluaran</th>
         <th>Jumlah Pengeluaran</th>
         <th>Tanggal Pengeluaran</th>
    </tr>
    
       @foreach ($data_pengeluaran as $pengeluaran)
        <tr>
            <td>{{$pengeluaran->ket_pengeluaran}}</td>
            <td>{{$pengeluaran->jml_pengeluaran}}</td>
            <td>{{$pengeluaran->tgl_pengeluaran}}</td>
        </tr>
      @endforeach
  </table> 