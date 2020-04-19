<!-- PROTOTYPE  -->
<h1>Lihat Disposisi</h1>
    <?php
        // print_r($data['perihal']);
        $a = 0;
        $count = 1;
        foreach ($data['disposisi'] as $disposisi) : 
     ?> 
        <ul>
            <li>No : <?=$count ?></li>
            <li>Tanggal : <?=$data['disposisi'][$a]['tanggal'] ?></li>
            <li>Tanggal penyelesaian : <?=$data['disposisi'][$a]['tanggal_penyelesaian'] ?></li>
            <li>No agenda : <?=$data['disposisi'][$a]['no_agenda'] ?></li>
            <li>perihal : <?=$data['perihal'][$a]?></li>
            <li>instruksi : <?=$data['disposisi'][$a]['instruksi'] ?></li>
            <li>Jenis Disposisi : <?=$data['jenis'][$a] ?></li>
            <li>Surat dari Instansi : <?=$data['asal'][$a] ?></li>
            <li>User : <?=$data['user'][$a]['nama'] ?></li>
            <li>Dikirim pada : <?=$data['disposisi'][$a]['postedTime'] ?></li>
            <li>Status Surat : <?=$data['status'][$a] ?> </li>
            <li><a href="<?=BASE_URL?>adminDisposisiKeluar/deleteDisposisi/<?=$disposisi['id_disposisi_keluar']?>">Hapus Disposisi</a></li>
            <li><a href="<?=BASE_URL?>adminDisposisiKeluar/updateDisposisiKeluar/<?=$disposisi['id_disposisi_keluar']?>">Edit Disposisi</a></li>
            
        </ul>
        
    <?php
        $a++;
        $count++;
        endforeach;
    ?>
    <a href="<?= BASE_URL?>adminDisposisiKeluar/disposisi/<?= $data['id_surat']?>">Tambah Disposisi</a>