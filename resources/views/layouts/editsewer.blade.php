<form action="{{route('editsewer',['id'=>$data_sewer->id])}}" method="GET">
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
  
</form>