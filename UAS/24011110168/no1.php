<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
</head>
<body>
    <?php

			$txt_file=file_get_contents('data.txt');
			$rows=explode("\n",$txt_file);
			array_shift($rows);
			echo'<center><h3>Data Parsing</h3></center>';
			$i='A';
			foreach($rows as $row=>$data){
			$row_data=explode('|',$data);
			$info[$row]['data1']=$row_data[0];
			$info[$row]['data2']=$row_data[1];
			$info[$row]['data3']=$row_data[2];
			$info[$row]['data4']=$row_data[3];
			$info[$row]['data5']=$row_data[4];
			$info[$row]['data6']=$row_data[5];
			$info[$row]['data7']=$row_data[6];
			$info[$row]['data8']=$row_data[7];
			$info[$row]['data9']=$row_data[8];
			}
    unset($row);
		?>
		<table border="1" class="table table-striped">
			<thead class="table thead-dark">
				<td>A</td>
				<td>B</td>
				<td>C</td>
				<td>D</td>
				<td>E</td>
				<td>F</td>
				<td>G</td>
				<td>H</td>
				<td>I</td>
			</thead>
			<tr>
				<td><?=$info[0]['data1']?></td>
				<td><?=$info[1]['data1']?></td>
				<td></td>
				<td><?=$info[2]['data1']?></td>
				<td><?=$info[3]['data1']?></td>
				<td></td>
				<td><?=$info[4]['data1']?></td>
				<td><?=$info[5]['data1']?></td>
				<td></td>
			</tr>
			<tr>
				<td><?=$info[0]['data2']?></td>
				<td><?=$info[1]['data2']?></td>
				<td></td>
				<td><?=$info[2]['data2']?></td>
				<td><?=$info[3]['data2']?></td>
				<td></td>
				<td><?=$info[4]['data2']?></td>
				<td><?=$info[5]['data2']?></td>
				<td></td>
			</tr>
			<tr>
				<td><?=$info[0]['data3']?></td>
				<td><?=$info[1]['data3']?></td>
				<td><?= round(($info[1]['data1']+$info[1]['data2']+$info[1]['data3']) / 3,4) ?></td>
				<td><?= $info[2]['data3']?></td>
				<td><?= $info[3]['data3']?></td>
				<td><?= round(($info[3]['data1']+$info[3]['data2']+$info[3]['data3']) / 3,6) ?></td>
				<td><?= $info[4]['data3']?></td>
				<td><?= $info[5]['data3']?></td>
				<td><?= round(($info[5]['data1']+$info[5]['data2']+$info[5]['data3']) / 3,5) ?></td>
			</tr>
			<tr>
				<td><?=$info[0]['data4']?></td>
				<td><?=$info[1]['data4']?></td>
				<td></td>
				<td><?=$info[2]['data4']?></td>
				<td><?=$info[3]['data4']?></td>
				<td></td>
				<td><?=$info[4]['data4']?></td>
				<td><?=$info[5]['data4']?></td>
				<td></td>
			</tr>
			<tr>
				<td><?=$info[0]['data5']?></td>
				<td><?=$info[1]['data5']?></td>
				<td></td>
				<td><?=$info[2]['data5']?></td>
				<td><?=$info[3]['data5']?></td>
				<td></td>
				<td><?=$info[4]['data5']?></td>
				<td><?=$info[5]['data5']?></td>
				<td></td>
			</tr>
			<tr>
				<td><?=$info[0]['data6']?></td>
				<td><?=$info[1]['data6']?></td>
				<td><?= round(($info[1]['data4']+$info[1]['data5']+$info[1]['data6']) / 3,4) ?></td>
				<td><?= $info[2]['data6']?></td>
				<td><?= $info[3]['data6']?></td>
				<td><?= round(($info[3]['data4']+$info[3]['data5']+$info[3]['data6']) / 3,8) ?></td>
				<td><?= $info[4]['data6']?></td>
				<td><?= $info[5]['data6']?></td>
				<td><?= round(($info[5]['data4']+$info[5]['data5']+$info[5]['data6']) / 3,4) ?></td>
			</tr>
			<tr>
				<td><?=$info[0]['data7']?></td>
				<td><?=$info[1]['data7']?></td>
				<td></td>
				<td><?=$info[2]['data7']?></td>
				<td><?=$info[3]['data7']?></td>
				<td></td>
				<td><?=$info[4]['data7']?></td>
				<td><?=$info[5]['data7']?></td>
				<td></td>
			</tr>
			<tr>
				<td><?=$info[0]['data8']?></td>
				<td><?=$info[1]['data8']?></td>
				<td></td>
				<td><?=$info[2]['data8']?></td>
				<td><?=$info[3]['data8']?></td>
				<td></td>
				<td><?=$info[4]['data8']?></td>
				<td><?=$info[5]['data8']?></td>
				<td></td>
			</tr>
			<tr>
				<td><?=$info[0]['data9']?></td>
				<td><?=$info[1]['data9']?></td>
				<td><?= round(($info[1]['data7']+$info[1]['data8']+$info[1]['data9']) / 3,4) ?></td>
				<td><?= $info[2]['data9']?></td>
				<td><?= $info[3]['data9']?></td>
				<td><?= round(($info[3]['data7']+$info[3]['data8']+$info[3]['data9']) / 3,5) ?></td>
				<td><?= $info[4]['data9']?></td>
				<td><?= $info[5]['data9']?></td>
				<td><?= round(($info[5]['data7']+$info[5]['data8']+$info[5]['data9']) / 3,5) ?></td>
			</tr>
		</table>
</body>
</html>