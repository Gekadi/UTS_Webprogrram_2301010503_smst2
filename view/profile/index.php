<a href="/profile/tambah">Tambah Data</a>
<table>
    <thead>
        <tr>
            <th>nama</th>
            <th>jenis_kelamin</th>
            <th>tanggal_lahir</th>
            <th>instagram</th>
            <th>Kirim</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item) : ?>
            <tr>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['jenis_kelamin']; ?></td>
                <td><?= $item['tanggal_lahir']; ?></td>
                <td><?= $item['instagram']; ?></td>
                <td>
                    <a href="/profile/ubah?id=<?= $item['id']; ?>"><button>ubah</button></a>
                    <form action="/profile/delete?id=<?= $item['id']; ?>" method="POST">
                        <button type="submit">hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
