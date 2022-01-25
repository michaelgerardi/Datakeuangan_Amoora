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
  <canvas id="coin_sales4" height="100"></canvas>
  <script>
    if ($('#coin_sales4').length) {
    var ctx = document.getElementById("coin_sales4").getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10"],
            datasets: [{
                label: "Sales",
                data: [250, 320, 380, 330, 420, 250, 180, 250, 100, 300],
                backgroundColor: [
                    '#8416fe',
                    '#3a3afb',
                    '#8416fe',
                    '#3a3afb',
                    '#8416fe',
                    '#3a3afb',
                    '#8416fe',
                    '#3a3afb',
                    '#3a3afb',
                    '#8416fe'
                ]
            }]
        },
        // Configuration options go here
        options: {
            legend: {
                display: false
            },
            animation: {
                easing: "easeInOutBack"
            },
            scales: {
                yAxes: [{
                    display: !1,
                    ticks: {
                        fontColor: "#cccccc",
                        beginAtZero: !0,
                        padding: 0
                    },
                    gridLines: {
                        zeroLineColor: "transparent"
                    }
                }],
                xAxes: [{
                    display: !1,
                    gridLines: {
                        zeroLineColor: "transparent",
                        display: !1
                    },
                    ticks: {
                        beginAtZero: !0,
                        padding: 0,
                        fontColor: "#cccccc"
                    }
                }]
            }
        }
    });
}
  </script>
  
  <div class="table-responsive">
  <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
      <th>Total Pendapatan</th>
      <th>Average per Bulan</th>
      <th>Laba Kotor</th>
      <th>Laba Bersih</th>
    </tr>
    @foreach ($data_pemasukkan as $pemasukkan)
    <tr>
      <td>{{$pemasukkan->total_pendapatan}}</td>
      <td>{{$pemasukkan->avg_perbulan}}</td>
      <td>{{$pemasukkan->laba_kotor}}</td>
      <td>{{$pemasukkan->laba_bersih}}</td>
      <td><a href="/editpemasukkan/{{$pemasukkan->id_pemasukkan}}" class="btn btn-default">update</a></td>
      <td><a href="/deletepemasukkan/{{$pemasukkan->id_pemasukkan}}" class="btn btn-default">delete</a></td>
      <td><a href="/downloadPDF/pemasukkanpdf"> download file</a></td>
    </tr>
    @endforeach
  </div>
 

  </table>
</form>