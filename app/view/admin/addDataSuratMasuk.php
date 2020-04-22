<a href="javascript:void(0);" id="jwpopupLink" style="text-decoration: none;"><button class="btn" style="margin-top:15px; margin-left:1100px;">Tambah Data Surat</button></a>

<table class="content-table">
  <thead>
     <tr>
      <th style="width: 70px">No. Surat Masuk</th>
      <th style="width: 150px">Perihal Surat Masuk</th>
      <th style="width: 150px">Lampiran Surat Masuk</th>
      <th style="width: 200px">Alamat Tujuan Surat Masuk</th>
      <th style="width: 105px">Tgl Surat Masuk</th>
      <th style="width: 100px">Nama Instansi</th>
      <th style="width: 100px">Disposisi</th>
      <th style="width: 50px">OPSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        foreach($data['surat'] as $srt):
    ?>
    <tr>
        <td><?= $srt['nomor_surat_masuk'] ?></td>
        <td><?= $srt['perihal_surat_masuk'] ?></td>
        <td><?= $srt['lampiran_surat_masuk'] ?></td>
        <td><?= $srt['alamat_pengirim'] ?></td>
        <td><?= $srt['tanggal_surat_masuk'] ?></td>
        <td><?= $srt['nama_instansi_surat_masuk'] ?></td>
        <td>
          <a href="<?=BASE_URL?>admin/lihatDisposisi/<?=$srt['id_surat_masuk']?>">Kirim/Lihat</a>
        </td>
        <td>
         
          <a onclick="confirm('Are you sure want to delete this?')" href="<?=BASE_URL?>admin/deleteSuratMasuk/<?=$srt['id_surat_masuk']?>"><button>Delete</button> </a>
          <a href="<?=BASE_URL?>admin/updateSuratMasuk/<?=$srt['id_surat_masuk']?>"><button>Update</button></a>

        </td>
    </tr>
    <?php
        $no++;
        endforeach 
    ?>
     <script>
      function konfirmasi(){
         var tanya = confirm("Apakah Anda Yakin Menghapus Data Ini ?");
 
         if(tanya === true) {
            pesan = "";
         }else{
            pesan = "";
         }
 
         document.getElementById("pesan").innerHTML = pesan;
      }
    </script>
  </tbody>
</table>

<div id="jwpopupBox" class="jwpopup">
  <!-- jwpopup content -->
  <div class="jwpopup-content">
    <div class="jwpopup-head">
      <span class="close">×</span>
      <h2>Isi Form berikut untuk menambahkan Data Surat</h2>
    </div>

    <div class="jwpopup-main">
      <form action="<?php echo BASE_URL . $data['process'] ?>" method="POST">
      <label>No.Surat Masuk :</label>
      <input style="margin-left: 82.5px" type="number" id="nmr_srt_msk" name="nmr_srt_msk"><br>
 
      <label>Perihal Surat Masuk :</label>
      <input style="margin-left: 54px" type="text" id="perihal_srt_msk" name="perihal_srt_msk"><br>

      <label>Lampiran Surat Masuk :</label>
      <input style="margin-left: 3em" type="text" id="nlampiran_srt_msk" name="lampiran_srt_msk"><br>

      <label>Alamat Tujuan Surat Masuk :</label>
      <input type="text" id="alamat_srt_msk" name="alamat_srt_msk"><br>

      <label>Tgl Surat Masuk :</label>
      <input style="margin-left: 6.4em" type="date" id="tgl_srt_msk" name="tgl_srt_msk"><br>

      <label>Nama Instansi :</label>
      <input style="margin-left: 7.21em" type="text" id="nama_instansi_surat_masuk" name="nama_instansi_surat_masuk"><br>

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



  