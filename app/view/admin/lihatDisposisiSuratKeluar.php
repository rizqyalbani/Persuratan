<!-- PROTOTYPE  -->
<h1>Lihat Disposisi</h1>
    <?php
        // print_r($data['disposisi']);
        $a = 0;
        foreach ($data['disposisi'] as $disposisi) : 
     ?>
        <ul>
            <li>Tanggal : <?=$data['disposisi'][$a]['tanggal'] ?></li>
            <li>Tanggal penyelesaian : <?=$data['disposisi'][$a]['tanggal_penyelesaian'] ?></li>
            <li>No agenda : <?=$data['disposisi'][$a]['no_agenda'] ?></li>
            <li>perihal : <?=$data['disposisi'][$a]['no_agenda'] ?></li>
            <li>instruksi : <?=$data['disposisi'][$a]['instruksi'] ?></li>
            <li>Jenis Disposisi : <?=$data['jenis'][$a] ?></li>
            <li>Surat dari Instansi : <?=$data['asal'][$a] ?></li>
            <li>User : <?=$data['user'][$a]['nama'] ?></li>
            <li>Dikirim pada : <?=$data['disposisi'][$a]['postedTime'] ?></li>
            <li>Status Surat : <?=$data['status'][$a] ?> </li>
<<<<<<< HEAD
            <li><a href="<?=BASE_URL?>Admin/deleteDisposisi/<?=$disposisi['id_disposisi_keluar']?>">Hapus Disposisi</a></li>
=======
            <li><a href="<?=BASE_URL?>Admin/deleteDisposisi/<?=$disposisi['id_disposisi']?>">Hapus Disposisi</a></li>
            <li><a href="<?=BASE_URL?>adminDisposisiKeluar/updateDisposisiKeluar/<?=$disposisi['id_disposisi_keluar']?>">edit Disposisi</a></li>
>>>>>>> 6112d4b629b03bcff6000617a78d87ac10a7b9fb
            
        </ul>
        
    <?php
        $a++;
        endforeach;
    ?>
    <a href="<?= BASE_URL?>adminDisposisiKeluar/disposisi/<?= $data['id_surat']?>">Tambah Disposisi</a>