<form action="" method="GET">
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
  
</form>