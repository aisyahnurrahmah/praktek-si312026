<?php include 'includes/meta.php';?>
<?php include 'includes/header.php';?>

<section>
    <?php
    $nama = "mahasiswa Si";
    $jurusan ="Sistem informasi";
    $hobi = ["membaca", "desain", "coding"];
    ?>

    Nama : <?php echo $nama?> <br>
    jurusan: <?php echo $jurusan?> <br>
    hobi:

    <ul>
        <?php foreach ($hobi as $key => $value):?>
            <li><?php echo $value; ?></li>
        <?php endforeach?>
    </ul>
</section>
    
<?php include 'includes/footer.php';?>