<form action="/transaksi/tambah" method="POST">
{{csrf_field()}}
  <div class="form-group {{$errors->has('total_transaksi')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Total Transaksi</label>
    <div class="col-sm-10">
      <textarea name="total_transaksi" class="form-control" id="email" placeholder="nama sewer">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('avg_transaksi')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Average Transaksi</label>
    <div class="col-sm-10">
      <textarea name="avg_transaksi" class="form-control" id="email" placeholder="position">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('jumlah_transaksi')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Jumlah Transaksi</label>
    <div class="col-sm-10">
      <textarea name="jumlah_transaksi" class="form-control" id="email" placeholder="gaji sewer">
      </textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>Total Transaksi</tr>
      <tr>Average Transaksi</tr>
      <tr>Jumlah Transaksi</tr>
    </thead>
    @foreach ($data_sewer as $sewer)
      <td>{{$sewer->nama_sewer}}</td>
      <td>{{$sewer->position}}</td>
      <td>{{$sewer->gaji_sewer}}</td>
      <td>{{$sewer->tgl_gaji}}</td>
      <td><a href="/editsewer/{{$sewer->id_sewer}}" class="btn btn-default">update</a></td>
      <td><a href="/deletesewer/{{$sewer->id_sewer}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/sewerpdf"> download file</a></td>
    @endforeach
  </div>
 

  </table>
</form>