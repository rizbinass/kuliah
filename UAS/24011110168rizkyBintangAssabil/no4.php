<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nomor 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css"/>

</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Data Parsing</h1>

    <?php
    $txt_file = file_get_contents('data.txt');
    $rows = explode("\n", $txt_file);
    array_shift($rows);
    $info = [];
    foreach($rows as $row => $data){
        $row_data = explode('|', $data);
        for ($i = 0; $i < 9; $i++) {
            $info[$row]['data' . ($i + 1)] = $row_data[$i] ?? null;
        }
    }

    $processed = [
        ['K' => 400, 'L' => 340.032133, 'M' => 5.876507,  'N' => 65.890087],
        ['K' => 410, 'L' => 506.738525, 'M' => 9.606292,  'N' => 113.631558],
        ['K' => 420, 'L' => 534.924701, 'M' => 10.809955, 'N' => 121.024306],
    ];
    foreach ($processed as &$row) {
        $row['O'] = $row['M'] - (0.028 * $row['N']);
        $row['P'] = $row['O'] / $row['N'];
    }
    unset($row);
    ?>

    <table id="table1" class="table table-striped table-bordered">
        <thead class="table-dark text-center">
        <tr>
            <th>A</th><th>B</th><th>C</th>
            <th>D</th><th>E</th><th>F</th>
            <th>G</th><th>H</th><th>I</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < count($info); $i++): ?>
            <tr>
                <?php for ($j = 1; $j <= 9; $j++): ?>
                    <td><?= isset($info[$i]['data' . $j]) ? $info[$i]['data' . $j] : '' ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>

    <h1 class="text-center my-5">Data Perhitungan</h1>

    <table id="table2" class="table table-bordered table-hover">
        <thead class="table-dark text-center">
        <tr>
            <th>K</th><th>L</th><th>M</th><th>N</th><th>O</th><th>P</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($processed as $row): ?>
            <tr>
                <td><?= $row['K'] ?></td>
                <td><?= number_format($row['L'], 6) ?></td>
                <td><?= number_format($row['M'], 6) ?></td>
                <td><?= number_format($row['N'], 6) ?></td>
                <td><?= number_format($row['O'], 6) ?></td>
                <td><?= number_format($row['P'], 6) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table1').DataTable();
        $('#table2').DataTable();
    });
</script>

</body>
</html>
