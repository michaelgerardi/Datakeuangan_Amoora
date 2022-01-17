<form action="/pemasukkan/tambah" method="POST">
{{csrf_field()}}
  <div class="form-group {{$errors->has('total_pendapatan')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Total Pendapatan</label>
    <div class="col-sm-10">
      <textarea name="total_pendapatan" class="form-control" id="email" placeholder="total pendapatan">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('avg_perbulan')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Average per Bulan</label>
    <div class="col-sm-10">
      <textarea name="avg_perbulan" class="form-control" id="email" placeholder="avg perbulan">
      </textarea>
    </div>
  </div>
  <div class="form-group {{$errors->has('laba_kotor')? 'has-error':''}}">
        <label class="control-label col-sm-2" for="email">Laba Kotor</label>
    <div class="col-sm-10">
      <textarea name="laba_kotor" class="form-control" id="email" placeholder="laba kotor">
      </textarea>
    </div>
  </div>
  <label class="control-label col-sm-2" for="email">Laba Bersih</label>
    <div class="col-sm-10">
      <textarea name="laba_bersih" class="form-control" id="email" placeholder="laba bersih">
      </textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>Total Pendapatan</tr>
      <tr>Average per Bulan</tr>
      <tr>Laba Kotor</tr>
      <tr>Laba Bersih</tr>
    </thead>
    @foreach ($data_pemasukkan as $pemasukkan)
      <td>{{$pemasukkan->total_pendapatan}}</td>
      <td>{{$pemasukkan->avg_perbulan}}</td>
      <td>{{$pemasukkan->laba_kotor}}</td>
      <td>{{$pemasukkan->laba_bersih}}</td>
      <td><a href="" class="btn btn-default">update</a></td>
      <td><a href="/deletepemasukkan/{{$pemasukkan->id_pemasukkan}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/pemasukkanpdf"> download file</a></td>
    @endforeach
  </div>
 

  </table>
</form>