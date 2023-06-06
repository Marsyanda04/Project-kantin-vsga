<!DOCTYPE html>
<html>
<head>
	<title>Menu Pembayaran</title>
</head>
<body>
	<?php
			$Makanan = $_POST['foods'];
			$Minuman = $_POST['drinks'];
			
			if(isset($Makanan) && isset ($Minuman)){
				$total_bayar = array_sum($Makanan) + array_sum($Minuman);
				$total_makan = array_sum($Makanan);
				$total_minum = array_sum($Minuman);
			} 
			else {
				$total_bayar = 0;
			}

	?>
				<table border = '1' cellpadding = '4'>
					<tr>
						<th>Your Foods</th>
						<th>Your Drinks</th>
					</tr>
					<tr align = 'right'>
						<td><?php echo implode (' <br>', $Makanan);?></td>
						<td><?php echo implode (' <br>', $Minuman);?></td>
					</tr>
					<tr align = 'right'>
						<td><?php echo $total_makan ?></td>
						<td><?php echo $total_minum ?></td>
					</tr>
					<tr>
						<td>Total</td>
						<td align = 'right'><?php echo $total_bayar ?></td>
					</tr>
				</table>	
		
</body>
</html>