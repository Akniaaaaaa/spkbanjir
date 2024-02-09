<!DOCTYPE html>
<html>

<head>
    <title>CETAK DATA RANGKING DARI SIMOORA PUPR</title>
</head>

<body>

    <img src="<?php echo base_url('assets/assets_stisla/') ?>assets/img/logoPU.png" style="float: left; height: 60px">
    <div class="a">
        <div style="margin-left: 20px">
            <div style="font-size: 18px">PEMERINTAH KOTA BENGKULU</div>
            <div style="font-size: 18px">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</div>
            <div style="font-size: 18px">JL. Terminal Betungan Kelurahan Betungan Kecamatan Selebar Kota Bengkulu</div>
        </div>

        <hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">

        <br />
        <div style="font-size: 18px">DATA RANKING LOKASI PENANGANAN GENANGAN BANJIR KOTA BENGKULU</div>
        <br />

        <style>
            div.a {
                text-align: center;
            }
        </style>

        <div class="a">
            <table border="1" style="width: 100%">
                <tr>
                    <th>NO.</th>
                    <th>KELURAHAN</th>
                    <th>KECAMATAN</th>
                    <th>NILAI YI</th>
                    <th>RANGKING</th>
                </tr>

                <?php $no = 1;
                foreach ($hasil_moora as $key) : ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td class="text-center"><?php echo $key->kelurahan; ?></td>
                        <td class="text-center"><?php echo $key->kecamatan; ?></td>
                        <td class="text-center"><?php echo $key->nilai; ?></td>
                        <td class="text-center"><?php echo $no++; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>


        <script>
            window.print();
        </script>

</body>

</html>