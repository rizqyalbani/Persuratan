<?php
  if (isset($data['failed'])) {
    echo $data['failed'];
  }
?>
    <h1>List User</h1>


    <?php foreach ($data['user'] as $getData) : ?>
    <ul>
        <li>nama : <?=$getData['nama']?> </li>
        <li>nip : <?=$getData['nip']?> </li>
        <li>pass : <?=$getData['password']?></li>
        <li>  <a href="<?=BASE_URL?>user/deleteUser/<?=$getData['id_user']?>">Delete</a></li>
    </ul>
    <?php endforeach ?>