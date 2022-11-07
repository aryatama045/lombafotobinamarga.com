<?php $tanggal = tgl_indo($record['tgl_posting']);
$url = $this->uri->ruri_string();
$card = $url!='page/detail/hadiah-juara'?'card':'';
$card_body = $url!='page/detail/hadiah-juara'?'card-body':'';

// tesx($url);
?>

<!-- <div class="post__header post-header" 
    style="background: hsl(196deg 100% 47%) !important;
    margin-bottom: 20px;
    margin-top: 0px;
    padding-top: 50px;
    padding-bottom: 24px;">
    <h4 class="post-header__title" style="text-align:center;color:white;"><?= $record['judul']; ?></h4>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <div class="block <?= $card ?> post--layout--classic"> -->
            <div class="block  post--layout--classic" style="padding-top: 50px;"> 

                <!-- <div class="post__featured"><a href="#"><img src="" alt=""></a></div> -->

                <div class=" post__content typography">

                    <?= $record['isi_halaman']; ?>

                </div>

            </div>
        </div>

    </div>

    <?php if($url == "page/detail/pengiriman-karya"){ ?>

    
    <div class="row" >
        <div class="col-lg-12 col-md-6" >
            <h5 class=" align-center" style="text-align:center; margin-bottom:2em; color:#3961a7;"> JUMLAH PESERTA DAN KARYA YANG DITERIMA</h5>
            <table class="table table-borderless table-sm pb-3" style="border:2px solid #ffffff;" >
                <thead>
                    <tr style="text-align:center;">
                        <th width='25%'></th>
                        <th>Minggu 1</th>
                        <th>Minggu 2</th>
                        <th>Minggu 3</th>
                        <th>Minggu 4</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border:2px solid #ffffff; text-align:center;">
                        <td style="background: #244784;color: white; border:2px solid #ffffff; text-align:center;">
                            <b> Total Peserta </b></td>
                        <th  style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->pminggu1 ?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->pminggu2 ?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->pminggu3 ?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->pminggu4 ?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $sump ?></th>
                    </tr>
                    <tr style="border:2px solid #ffffff; border:2px solid #ffffff; text-align:center;">
                        <td style="background: #244784;color: white;">
                            <b> Total Karya </b></td>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->kminggu1 ?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->kminggu2 ?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->kminggu3?> </th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $dKarya->kminggu4?></th>
                        <th style="background: #ffc200;border:2px solid #ffffff; text-align:center;">
                            <?php echo $sumk ?> </th>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>

    <?php } ?>
</div>