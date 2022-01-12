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
         <th>Nama Sewer</th>
         <th>Position</th>
         <th>Gaji Sewer</th>
         <th>Tanggal Penggajian</th> 
    </tr>
    
       @foreach ($data_sewer as $sewer)
        <tr>
            <td>{{$sewer->nama_sewer}}</td>
            <td>{{$sewer->position}}</td>
            <td>{{$sewer->gaji_sewer}}</td>
            <td>{{$sewer->tgl_gaji}}</td>
        </tr>
      @endforeach
  </table> 