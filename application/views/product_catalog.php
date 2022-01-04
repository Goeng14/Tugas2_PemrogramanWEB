<html>

<head>
    <title><?php echo $title; ?></title>
</head>

<body>
    <h1><?php echo $brand; ?></h1>
    <!-- tampilkan data product disini dengan perulangan dan di dalam tabel -->
    <table border="1" cellspasing="0" style='border: 1px solid black;'>
        <tr>
            <th>No</th>
            <th>Smartphone</th>
        </tr>
        <?php $no = 0 ?>
        <?php foreach ($product as $item) : ?>
            <?php $no++ ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>