<?php
    $k = $_POST['id'];
    $k = trim($k);
    $connection = mysqli_connect("localhost", "root", "", "belajar_ajax");
    $sql = " Select * from mahasiswa where prodi='{$k}'";
    $result = mysqli_query($connection, $sql);
    while($rows = mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $rows['nama'];   ?></td>
        <td><?php echo $rows['nim'];   ?></td>
        <td><?php echo $rows['prodi'];   ?></td>
        <td><?php echo $rows['domisili'];   ?></td>
    </tr>

<?php
    }

    echo $sql;
?>