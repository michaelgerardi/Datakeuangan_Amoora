<form action="/sewer/tambah" method="POST">
{{csrf_field()}}
  <div class="form-group {{$errors->has('nip')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">NIP</label>
    <div class="col-sm-10">
      <textarea name="nip" class="form-control" id="email" placeholder="nip">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('nama')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Nama</label>
    <div class="col-sm-10">
      <textarea name="nama" class="form-control" id="email" placeholder="nama">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('tgl_lahir')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input name="tgl_lahir"type="date" class="form-control" id="email" placeholder="tanggal lahir">
    </div>
  </div>
  <div class="form-group {{$errors->has('alamat')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" class="form-control" id="email" placeholder="alamat">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('no_hp')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Nomor HP</label>
    <div class="col-sm-10">
      <textarea name="no_hp" class="form-control" id="email" placeholder="no_hp">
      </textarea>
    </div>
  </div>
  <div class="form-group">
                         
                         <label for="exampleInputEmail1">Jenis Kelamin </label>
                         <select class="selectpicker form-control" name="jenis_kelamin">
                         <option>Laki-laki</option>
                         <option>Perempuan</option>
                         </select>
                 </div>
  <div class="form-group {{$errors->has('gaji')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Gaji</label>
    <div class="col-sm-10">
      <textarea name="gaji" class="form-control" id="email" placeholder="gaji">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('posisi')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Posisi</label>
    <div class="col-sm-10">
      <textarea name="posisi" class="form-control" id="email" placeholder="posisi">
      </textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  </form>
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
      <th>NIP</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Nomor HP</th>
      <th>Jenis Kelamin</th>
      <th>Gaji</th>
      <th>Posisi</th>
    </tr>
    @foreach ($data_sewer as $sewer)
    <tr>
      <td>{{$sewer->nip}}</td>
      <td>{{$sewer->nama}}</td>
      <td>{{$sewer->tgl_lahir}}</td>
      <td>{{$sewer->alamat}}</td>
      <td>{{$sewer->no_hp}}</td>
      <td>{{$sewer->jenis_kelamin}}</td>
      <td>{{$sewer->gaji}}</td>
      <td>{{$sewer->posisi}}</td>
      <td><a href="/editsewer/{{$sewer->id_sewer}}" class="btn btn-default">update</a></td>
      <td><a href="/deletesewer/{{$sewer->id_sewer}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/sewerpdf"> download file</a></td>
      </tr>
      @endforeach
  </div>
 

  </table>
