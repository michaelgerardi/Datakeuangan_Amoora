<form action="/pengeluaran/tambah" method="POST">
{{csrf_field()}}
  <div class="form-group {{$errors->has('ket_pengeluaran')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Keterangan Pengeluaran</label>
    <div class="col-sm-10">
      <textarea name="ket_pengeluaran" class="form-control" id="email" placeholder="keterangan pengeluaran">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('jml_pengeluaran')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Jumlah Pengeluaran</label>
    <div class="col-sm-10">
      <textarea name="jml_pengeluaran" class="form-control" id="email" placeholder="jumlah pengeluaran">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('tgl_pengeluaran')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Tanggal Pengeluaran</label>
    <div class="col-sm-10">
      <input name="tgl_pengeluaran"type="date" class="form-control" id="email" placeholder="tanggal pengeluaran">
    </div>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
      <td><a href="/editpengeluaran/{{$pengeluaran->id_pengeluaran}}" class="btn btn-default">update</a></td>
      <td><a href="/deletepengeluaran/{{$pengeluaran->id_pengeluaran}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/pengeluaranpdf"> download file</a></td>
    </tr>
    @endforeach
  </div>
 

  </table>
</form>