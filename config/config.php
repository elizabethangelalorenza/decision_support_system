<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_abc');
if(mysqli_connect_errno()) {
	echo mysqli_connect_error();
}
?>