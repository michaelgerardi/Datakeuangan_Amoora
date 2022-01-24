<form action="/keuntungan/tambah" method="POST">
{{csrf_field()}}
<div class="form-group {{$errors->has('tanggal')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Tanggal</label>
    <div class="col-sm-10">
      <input name="tanggal"type="date" class="form-control" id="email" placeholder="tanggal">
    </div>
  </div>
  <div class="form-group {{$errors->has('ket_pemasukkan')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Keterangan Pemasukkan</label>
    <div class="col-sm-10">
      <textarea name="ket_pemasukkan" class="form-control" id="email" placeholder="ket pemasukkan">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('nominal')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Nominal</label>
    <div class="col-sm-10">
      <textarea name="nominal" class="form-control" id="email" placeholder="nominal">
      </textarea>
    </div>
  <button type="submit" class="btn btn-default">Save</button>
  
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
      <th>Tanggal</th>
      <th>Keterangan Pemasukkan</th>
      <th>Nominak</th>
    </tr>
    @foreach ($data_keuntungan as $keuntungan)
    <tr>
      <td>{{$keuntungan->tanggal}}</td>
      <td>{{$keuntungan->ket_pemasukkan}}</td>
      <td>{{$keuntungan->nominal}}</td>
      <td><a href="/editkeuntungan/{{$keuntungan->id_keuntungan}}" class="btn btn-default">update</a></td>
      <td><a href="/deletekeuntungan/{{$keuntungan->id_keuntungan}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/keuntunganpdf"> download file</a></td>
    </tr>
    @endforeach
  </div>
 

  </table>
</form>