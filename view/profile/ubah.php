<h1>Ini Profile Saya</h1>

<form action="/profile/update" method="POST">
    <input type="text" name="id" value="<?= $items['id']; ?>">
    <label for="">Nama</label>
    <input type="text" name="nama" placeholder="nama" value="<?= $items['nama']; ?>">

    <label for="">jenis_kelamin</label>
    <input type="text" name="jenis_kelamin" placeholder="jenis_kelamin" value="<?= $items['jenis_kelamin']; ?>">
    
    <label for="">tanggal_lahir</label>
    <br>
    <input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?= $items['tanggal_lahir']; ?>">

    <br>
    <br>
    <label for="">instagram</label>
    <input type="text" name="instagram" placeholder="instagram" value="<?= $items['instagram']; ?>">

    <br>
    <button type="submit">Kirim</button>
</form>

