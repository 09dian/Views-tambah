<!DOCTYPE html>
<html>

<head>
    <title>Counter PHP | Kursus Web YELLOWWEB.ID</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include "koneksi.php";

    $sql_hitung = mysqli_query($konek, "SELECT * FROM tbl_visitor");

    while ($row = mysqli_fetch_array($sql_hitung)) {
        $jml_sekarang = $row['counts'];
        $jml_baru = $jml_sekarang + 1;
        $update_counts = mysqli_query($konek, "UPDATE tbl_visitor SET counts='$jml_baru'");
    }

    ?>

    <div id="wrapper">
        pengunjung <br> <i class="fa fa-user fa-fw"></i><?php echo $jml_baru; ?>
</body>

</html>