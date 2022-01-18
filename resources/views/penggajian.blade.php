<form action="/penggajian/tambah" method="POST">
{{csrf_field()}}
  <div class="form-group {{$errors->has('gaji')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Gaji</label>
    <div class="col-sm-10">
      <textarea name="gaji" class="form-control" id="email" placeholder="gaji">
      </textarea>
    </div>
  </div>
  <div class="form-group">
                         
                         <label for="exampleInputEmail1">Jenis Gaji </label>
                         <select class="selectpicker form-control" name="jenis_gaji">
                         <option>Borongan</option>
                         <option>Harian</option>
                         </select>
                 </div>
  <div class="form-group {{$errors->has('tgl_gaji')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Tanggal Gaji</label>
    <div class="col-sm-10">
      <input name="tgl_gaji"type="date" class="form-control" id="email" placeholder="tanggal gaji">
    </div>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  </form>
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
      <td><a href="/editgaji/{{$penggajian->id_gaji}}" class="btn btn-default">update</a></td>
      <td><a href="/deletegaji/{{$penggajian->id_gaji}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/gajipdf"> download file</a></td>
      </tr>
      @endforeach
  </div>
 

  </table>
