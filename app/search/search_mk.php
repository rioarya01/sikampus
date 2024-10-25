<?php
include('../../conf/config.php');

// Periksa dari tabel mana pencarian berasal
$table_id = $_POST['table_id'];
$search_query = "";

if (isset($_POST['search'])) {
    $search_query = mysqli_real_escape_string($connection, $_POST['search']);
}

// Tabel TI
if ($table_id == 1) {
    if ($search_query != "") {
        $query = mysqli_query($connection, "SELECT * FROM tb_mk_ti 
        WHERE 
        kode LIKE '%$search_query%' OR 
        nama LIKE '%$search_query%' OR 
        sks LIKE '%$search_query%' OR
        jenis LIKE '%$search_query%' OR
        semester LIKE '%$search_query%'
    ");
    } else {
        $query = mysqli_query($connection, "SELECT * FROM tb_mk_ti");
    }
} 

// Tabel SK
elseif ($table_id == 2) {
    if ($search_query != "") {
        $query = mysqli_query($connection, "SELECT * FROM tb_mk_sk 
        WHERE 
        kode LIKE '%$search_query%' OR 
        nama LIKE '%$search_query%' OR 
        sks LIKE '%$search_query%' OR
        jenis LIKE '%$search_query%' OR
        semester LIKE '%$search_query%'
    ");
    } else {
        $query = mysqli_query($connection, "SELECT * FROM tb_mk_sk");
    }
}

// Output Tabel
$no = 0;
while($mk = mysqli_fetch_array($query)){
    $no++;
    echo "
        <tr>
            <td width='5%'>$no</td>
            <td>{$mk['kode']}</td>
            <td>{$mk['nama']}</td>
            <td>{$mk['sks']}</td>
            <td>{$mk['jenis']}</td>
            <td>{$mk['semester']}</td>
        </tr>
    ";
}
?>
