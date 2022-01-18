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
         <th>Total Pendapatan</th>
         <th>Average per Bulan</th>
         <th>Laba Kotor</th>
         <th>Laba Bersih</th> 
    </tr>
    
       @foreach ($data_pemasukkan as $pemasukkan)
        <tr>
            <td>{{$pemasukkan->total_pendapatan}}</td>
            <td>{{$pemasukkan->avg_perbulan}}</td>
            <td>{{$pemasukkan->laba_kotor}}</td>
            <td>{{$pemasukkan->laba_bersih}}</td>
        </tr>
      @endforeach
  </table> 