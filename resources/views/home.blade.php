<form action="/sewer/tambah" method="POST">
{{csrf_field()}}
  <div class="form-group {{$errors->has('nama_sewer')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Nama Sewer</label>
    <div class="col-sm-10">
      <textarea name="nama_sewer" class="form-control" id="email" placeholder="nama sewer">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('gaji_sewer')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Gaji Sewer</label>
    <div class="col-sm-10">
      <textarea name="gaji_sewer" class="form-control" id="email" placeholder="gaji sewer">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('tgl_gaji')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Tanggal Gaji :</label>
    <div class="col-sm-10">
      <input name="tgl_gaji"type="date" class="form-control" id="email" placeholder="tanggal gaji">
    </div>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  <a href="" class="btn btn-default">update</a></td>
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>Nama Sewer</tr>
      <tr>Gaji Sewer</tr>
      <tr>Tanggal Penggajian</tr>
    </thead>
    @foreach ($data_sewer as $sewer)
      <td>{{$sewer->nama_sewer}}</td>
      <td>{{$sewer->gaji_sewer}}</td>
      <td>{{$sewer->tgl_gaji}}</td>
    @endforeach
  </div>
 

  </table>
</form>