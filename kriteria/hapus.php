        <?php include("../pages/koneksi.php"); ?>
        <?php
            $query = "DELETE FROM kriteria WHERE id_kriteria='$_GET[id]'";
            $hapus = mysqli_query($koneksi, $query);
            if($hapus) {
                echo "<script>alert('Hapus data sukses!'); 
                window.location='data.php';</script>";
            }
        ?>
