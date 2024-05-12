<h1>Detail Pendidikan</h1>

<p>Jenjang Pendidikan : <?= $pendidikan['jenjang_pendidikan'] ?></p>
<p>Institusi : <?= $pendidikan['institusi'] ?></p>
<p>Tahun Lulus : <?= $pendidikan['tahun_lulus'] ?></p>
<p>No. Ijazah : <?= $pendidikan['no_ijazah'] ?></p>
<p>Created At : <?= $pendidikan['created_at'] ?></p>
<p>Last Update : <?= $pendidikan['updated_at'] ?></p>

<br>
<hr>
<a href="<?= url("/pendidikan/edit?id={$pendidikan['id']}") ?>">Edit</a>