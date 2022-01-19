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
<h1>Laporan Penggajian </h1>
<table id="table" class="table" ref="content">
    <tr>
         <th>Gaji</th>
         <th>Jenis Gaji</th>
         <th>Tanggal Gaji</th>
    </tr>
    
       @foreach ($data_penggajian as $penggajian)
        <tr>
            <td>{{$penggajian->gaji}}</td>
            <td>{{$penggajian->jenis_gaji}}</td>
            <td>{{$penggajian->tgl_gaji}}</td>
        </tr>
      @endforeach
  </table> 