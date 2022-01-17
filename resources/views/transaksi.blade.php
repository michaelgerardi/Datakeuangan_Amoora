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
</form>

<div class="table-responsive">
<table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
      <td><a href="/edittransaksi/{{$transaksi->id_transaksi}}" class="btn btn-default">update</a></td>
      <td><a href="/deletetransaksi/{{$transaksi->id_transaksi}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/transaksipdf"> download file</a></td>
    </tr>
    @endforeach
  
  </table>
  </div>