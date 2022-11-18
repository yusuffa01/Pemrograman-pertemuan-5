<?php
    $connection = mysqli_connect("localhost", "root", "", "belajar_ajax");
    $sql = " Select Distinct prodi from mahasiswa";
    $result = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script type="text/javascript" src="js.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <style type="text/css">
            table{
                border: 1px solid;
                border-collapse: collapse;
                padding: 10px;
            }
            th, td, tr{    
                border: 1px solid;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        Program Studi : 
        <select id="mahasiswa" onchange="selectprodi()">
            <?php while( $rows =  mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $rows['prodi'];   ?>"><?php echo $rows['prodi'];   ?></option>

            <?php
            }
            ?>
        </select>
        <br> <br> <br>

        <table>
            <thead>
                <th style="">nama</th>
                <th style="">nim</th>
                <th style="">Prodi</th>
                <th style="">domisili</th>
            </thead>
            <tbody id="ans">

            </tbody>
        </table>
    </body>
</html>