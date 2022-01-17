<form action="" method="GET">
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