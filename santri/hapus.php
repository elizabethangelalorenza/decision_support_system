        <?php include("../pages/koneksi.php"); ?>
        <?php
            $query = "DELETE FROM santri WHERE id_santri='$_GET[id]'";
            $hapus = mysqli_query($koneksi, $query);
            if($hapus) {
                echo "<script>alert('Hapus data sukses!');
                window.location='data.php';</script>";
            }
        ?>
