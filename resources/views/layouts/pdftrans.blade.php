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
<h1>Laporan Transaksi Amoora </h1>
<table id="table" class="table" ref="content">
    <tr>
         <th>Total Transaksi</th>
         <th>Average Transaksi</th>
         <th>Jumlah Transaksi</th> 
    </tr>
    
       @foreach ($data_transaksi as $transaksi)
        <tr>
            <td>{{$transaksi->total_transaksi}}</td>
            <td>{{$transaksi->avg_transaksi}}</td>
            <td>{{$transaksi->jumlah_transaksi}}</td>
        </tr>
      @endforeach
  </table> 