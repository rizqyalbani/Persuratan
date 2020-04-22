<h1>Update Surat Keluar</h1>
<form action="<?php echo BASE_URL?>adminDisposisiKeluar/updateDataSuratKeluar/<?=$data['surat']['id_surat_keluar']?>" method="POST">
    <div>
        <label for="nmr_srt_klr">Nomor surat keluar</label>
        <input type="hidden" value="<?= $data['surat']['id_surat_keluar'] ?>" id="nmr_srt_klr" name="id_srt_klr" >
        <input type="text" value="<?= $data['surat']['nomor_surat_keluar'] ?>" id="nmr_srt_klr" name="nmr_srt_klr" >
    </div>
    <br>
    <!-- Tanggal surat keluar -->
    <div>
        <label for="tgl_srt_klr">Tanggal surat keluar</label>
        <input type="date" value="<?= $data['surat']['tanggal_surat_keluar'] ?>" id="tgl_srt_klr" name="tgl_srt_klr" >
    </div>
    <br>
    <!-- Alamat Pengirim -->
    <div>
        <label for="alamat_srt_klr">Alamat Tujuan</label>
        <input type="text" value="<?= $data['surat']['alamat_tujuan'] ?>" id="alamat_srt_klr" name="alamat_srt_klr" >
    </div>
    <br>
    <!-- perihal -->
    <div>
        <label for="perihal_srt_klr">Perihal Surat keluar</label>
        <input type="text" value="<?= $data['surat']['perihal_surat_keluar'] ?>" id="perihal_srt_klr" name="perihal_srt_klr" >
    </div>
    <br>
    <!-- lampiran dokumen -->
    <div>
        <label for="lampiran_srt_klr">Lampiran Surat keluar</label>
        <input type="text" value="<?= $data['surat']['lampiran_surat_keluar'] ?>" id="lampiran_srt_klr" name="lampiran_srt_klr" >
    </div>

    <div>
        <label for="lampiran_srt_klr">Nama Instansi</label>
        <input type="text" value="<?= $data['surat']['nama_instansi_surat_keluar'] ?>" id="nama_instansi_surat_keluar" name="nama_instansi_surat_keluar">
    </div>

    <br>
    <div>
        <button type="submit" name="submit" >Send data</button>
    </div>
</form>
<!-- <option value=""></option> -->
        <?php
            // for ($i=0; $i < count($data['jDisposisi']) ; $i++) { 
                
            //     foreach ($data['jDisposisi'][ $keys[$i] ] as $key => $value) {
            //         echo "<br>";
            //         echo $value["jenis_disposisi"];
            //     }
            // }
        ?>
