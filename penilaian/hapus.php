        <?php
            include("../pages/koneksi.php");
            $query = "DELETE FROM nilai_normalisasi_alternatif WHERE id_santri='$_GET[id]'";
            $hapus = mysqli_query($koneksi, $query);
            if ($hapus) {
            echo "<script>alert('Hapus data sukses!');
                window.location='data.php';</script>";
            }
        ?>
