<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($daftar_buku as $buku): ?>
            <li>
                <strong><?php echo $buku->judul; ?></strong> - 
                <?php echo $buku->pengarang; ?> 
                (<?php echo $buku->tahun_terbit; ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
