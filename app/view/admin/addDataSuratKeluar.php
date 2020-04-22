<a href="javascript:void(0);" id="jwpopupLink" style="text-decoration: none;"><button class="btn" style="margin-top:15px; margin-left:1100px;">Tambah Data Surat</button></a>

<table class="content-table">
    <thead>
    <tr>
        <th>No</th>
        <th>Nomor Surat Keluar</th>
        <th>Perihal Surat Keluar</th>
        <th>Lampiran Surat Keluar</th>
        <th>Alamat Tujuan Surat Keluar</th>
        <th>Tanggal Surat Keluar</th>
        <th>Tujuan Instansi</th>
        <th>Disposisi</th>
        <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
    <?php
        $no = 1;
        foreach($data['surat'] as $srt):
    ?>

    <tr>
        <td><?= $no ?></td>
        <td><?= $srt['nomor_surat_keluar'] ?></td>
        <td><?= $srt['perihal_surat_keluar'] ?></td>
        <td><?= $srt['lampiran_surat_keluar'] ?></td>
        <td><?= $srt['alamat_tujuan'] ?></td>
        <td><?= $srt['tanggal_surat_keluar'] ?></td>
        <td><?= $srt['nama_instansi_surat_keluar'] ?></td>
        <td>
            <a href="<?= BASE_URL?>adminDisposisiKeluar/lihatDisposisiSuratKeluar/<?php echo $srt['id_surat_keluar'] ?>">Kirim / Lihat</a>
        </td>
        <td>
            <a onclick="confirm('Are you sure want to delete this?')" href="<?= BASE_URL?>adminDisposisiKeluar/deleteSuratKeluar/<?php echo $srt['id_surat_keluar'] ?>"><button>Delete</button></a>
            <a href="<?= BASE_URL?>adminDisposisiKeluar/UpdateSuratKeluar/<?php echo $srt['id_surat_keluar'] ?>"><button>Update</button></a>
        </td>

    </tr>
    <?php 
        $no++;
        endforeach 
    ?>
    </tbody>
  
   
</table>



<div id="jwpopupBox" class="jwpopup">
  <!-- jwpopup content -->
  <div class="jwpopup-content">
    <div class="jwpopup-head">
      <span class="close">×</span>
      <h2>Isi Form berikut untuk menambahkan Data Surat Keluar</h2>
    </div>

    <div class="jwpopup-main">
      <form action="<?php echo BASE_URL . $data['process'] ?>" method="POST">
      <label>No.Surat Keluar :</label>
      <input style="margin-left: 82.5px" type="number" id="nmr_srt_klr" name="nmr_srt_klr"><br>
 
      <label>Perihal Surat Keluar :</label>
      <input style="margin-left: 54px" type="text" id="perihal_srt_klr" name="perihal_srt_klr"><br>

      <label>Lampiran Surat Keluar :</label>
      <input style="margin-left: 3em" type="text" id="lampiran_srt_klr" name="lampiran_srt_klr"><br>

      <label>Alamat Tujuan Surat Keluar :</label>
      <input type="text" id="alamat_srt_klr" name="alamat_srt_klr"><br>

      <label>Tgl Surat Keluar :</label>
      <input style="margin-left: 6.4em" type="date" id="tgl_srt_klr" name="tgl_srt_klr"><br>

      <label>Tujuan Instansi :</label>
      <input style="margin-left: 7.21em" type="text" id="nama_instansi_surat_keluar" name="nama_instansi_surat_keluar"><br>

      <label>Disposisi :</label>
      <input style="margin-left: 10.2em" type="text"><br>
 
      <input style="margin-left: 32em; width: 50px;" type="submit" name="Submit" class="tombol_login" value="SAVE">
 
      <br/>
      <br/>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  // untuk mendapatkan jwpopup
var jwpopup = document.getElementById('jwpopupBox');

// untuk mendapatkan link untuk membuka jwpopup
var mpLink = document.getElementById("jwpopupLink");

// untuk mendapatkan aksi elemen close
var close = document.getElementsByClassName("close")[0];

// membuka jwpopup ketika link di klik
mpLink.onclick = function() {
    jwpopup.style.display = "block";
}

// membuka jwpopup ketika elemen di klik
close.onclick = function() {
    jwpopup.style.display = "none";
}

// membuka jwpopup ketika user melakukan klik diluar area popup
window.onclick = function(event) {
    if (event.target == jwpopup) {
        jwpopup.style.display = "none";
    }
}
</script>

