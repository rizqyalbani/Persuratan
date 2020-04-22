<h1>Send disposisi</h1>
<form action="<?php echo BASE_URL?>home/showProfile" method="POST">
    
    <input value="<?php echo $data['user']['id_user'] ?>" id="id_user" name="id_user" type="hidden"> <br>

    <label for="nip">Nip</label>
    <input value="<?= $data['user']['nip'] ?>" id="nip" name="nip" type="number"> <br>

    <label for="nama">Nama</label>
    <input value="<?= $data['user']['nama'] ?>" id="nama" name="nama" type="text"> <br>

    <label for="password">Password</label></label>
    <input id="password" name="password" type="password"> <br>

    <button type="submit" name="submit">Submit</button>
</form>
