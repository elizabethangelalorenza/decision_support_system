        <?php
        include("pages/header.php");
        if (isset($_POST['simpan'])) {
            $santri = $_POST['nama'];
            $nilai_alternatif = [$_POST['nilai_k1'], $_POST['nilai_k2'], $_POST['nilai_k3'], $_POST['nilai_k4'], $_POST['nilai_k5']];
            $kriteria = [$_POST['k1'], $_POST['k2'], $_POST['k3'], $_POST['k4'], $_POST['k5']];
            foreach ($kriteria as $i => $k) {
                $query = 'INSERT INTO nilai_normalisasi_alternatif (id_kriteria, id_santri, nilai_alternatif)
                        VALUES (' . $k . ', ' . $santri . ', ' . $nilai_alternatif[$i] . ')';
                $tes = mysqli_query($koneksi, $query);
            }
            echo "<script>alert('Simpan data sukses!');
            window.location='data.php';</script>";
        }
        ?>
