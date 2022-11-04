<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form action="<?= base_url('admin/edit_karya') ?>" method="post" enctype="multipart">
              <div class="card-header">
                <h3 class="card-title">Jumlah Peserta dan Penerimaan Karya</h3>
                <button type='submit' name='submit' class='float-right btn btn-primary btn-sm'>Simpan</button>
              </div>
              <div class="card-body">
                <table class="table table-borderless table-sm pb-3" style="border:2px solid #ffffff;" >
                    <thead>
                        <tr style="text-align:center;">
                            <th width='25%'></th>
                            <th width='5%'>Minggu 1</th>
                            <th width='5%'>Minggu 2</th>
                            <th width='5%'>Minggu 3</th>
                            <th width='5%'>Minggu 4</th>
                            <th width='5%'>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border:2px solid #ffffff; text-align:center;">
                            <td style="background: #244784;color: white; border:2px solid #ffffff; text-align:center;">
                                <b> Total Peserta </b></td>
                            <th><input type="number" onchange="TotalPeserta()" class="form-control fee" name="pminggu1" id="pminggu" value="<?php echo $dKarya->pminggu1 ?>"></th>
                            <th><input type="number" onchange="TotalPeserta()" class="form-control fee" name="pminggu2" id="pminggu" value="<?php echo $dKarya->pminggu2 ?>"></th>
                            <th><input type="number" onchange="TotalPeserta()" class="form-control fee" name="pminggu3" id="pminggu" value="<?php echo $dKarya->pminggu3 ?>"></th>
                            <th><input type="number" onchange="TotalPeserta()" class="form-control fee" name="pminggu4" id="pminggu" value="<?php echo $dKarya->pminggu4 ?>"></th>
                            <th><input type="text" class="form-control" id="total_fee" placeholder="<?php echo $sump ?>" readonly></th>
                        </tr>
                        <tr style="border:2px solid #ffffff; border:2px solid #ffffff; text-align:center;">
                            <td style="background: #244784;color: white;">
                                <b> Total Karya </b></td>
                            <th><input type="number" onchange="TotalKarya()" class="form-control karya" name="kminggu1" value="<?php echo $dKarya->kminggu1 ?>"></th>
                            <th><input type="number" onchange="TotalKarya()" class="form-control karya" name="kminggu2" value="<?php echo $dKarya->kminggu2 ?>"></th>
                            <th><input type="number" onchange="TotalKarya()" class="form-control karya" name="kminggu3" value="<?php echo $dKarya->kminggu3 ?>"></th>
                            <th><input type="number" onchange="TotalKarya()" class="form-control karya" name="kminggu4" value="<?php echo $dKarya->kminggu4 ?>"></th>
                            <th><input type="text" class="form-control" id="total_karya" placeholder="<?php echo $sumk ?>" readonly></th>
                        </tr>
                    </tbody>
                </table>

              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  function TotalPeserta() {
    const fees = document.querySelectorAll(".fee");
    const total = document.querySelector("#total_fee");
    let sum = 0;

    fees.forEach(fee => {
        if(fee.valueAsNumber){
        sum += fee.valueAsNumber;
        }
    });
    total.value = sum;
  }

  function TotalKarya() {
    const fees = document.querySelectorAll(".karya");
    const total = document.querySelector("#total_karya");
    let sum = 0;

    fees.forEach(fee => {
        if(fee.valueAsNumber){
        sum += fee.valueAsNumber;
        }
    });
    total.value = sum;
  }
</script>
