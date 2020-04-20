<h1>Update Surat Masuk</h1>
<form action="<?php echo BASE_URL . $data['process']?>" method="POST">
    <input value="<?php echo $data['surat_masuk']['id_surat_masuk'] ?>" id="id_surat_masuk" name="id_surat_masuk" type="hidden"> <br>

    <label for="lampiran_surat_masuk">Lampiran Surat Masuk</label>
    <input value="<?php echo $data['surat_masuk']['lampiran_surat_masuk'] ?>" id="lampiran_surat_masuk" name="lampiran_surat_masuk" type="text"> <br>

    <label for="alamat_pengirim">Alamat Pengirim</label>
    <input value="<?php echo $data['surat_masuk']['alamat_pengirim'] ?>" id="alamat_pengirim" name="alamat_pengirim" type="text"> <br>

    <label for="tanggal_surat_masuk">Tanggal surat masuk</label></label>
    <input value="<?php echo $data['surat_masuk']['tanggal_surat_masuk'] ?>" id="tanggal_surat_masuk" name="tanggal_surat_masuk" type="date"> <br>

    <label for="nomor_surat_masuk">Nomor Surat masuk</label>
    <input value="<?php echo $data['surat_masuk']['nomor_surat_masuk'] ?>" id="nomor_surat_masuk" name="nomor_surat_masuk" type="text"> <br>

    <label for="perihal_surat_masuk">perihal Surat masuk</label>
    <input value="<?php echo $data['surat_masuk']['perihal_surat_masuk'] ?>" id="perihal_surat_masuk" name="perihal_surat_masuk" type="text"> <br>

    <label for="nama_instansi_surat_masuk">Nama Instansi Surat masuk</label>
    <input value="<?php echo $data['surat_masuk']['nama_instansi_surat_masuk'] ?>" id="nama_instansi_surat_masuk" name="nama_instansi_surat_masuk" type="text"> <br>
   

    
    <button name="submit" type="submit">Kirim Disposisi</button>
</form>

    
