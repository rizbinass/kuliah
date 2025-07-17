<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
</head>
<body>
    <?php

    $txt_file=file_get_contents('data.txt');
			$rows=explode("\n",$txt_file);
			array_shift($rows);

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

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>O</th>
                <th>P</th>
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
</body>
</html>