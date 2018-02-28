<html lang="en">
	<style type="text/css">
		<style type="text/css">
		.bg{
				background: url(<?php echo base_url();?>assets/images/3.png);
				background-size: cover;
		}
		td {
			padding: 10px 20px;
		}
		th {
			padding: 5px 10px;
		}
	</style>
<table style="margin:20px auto;" border="1">
				<thead>
				<tr>
					<th>Berangkat</th>
					<th>Dari</th>
					<th>ke</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
				</thead>
				<!-- Script menampilkan hasil pencarian -->
				<tbody>
					<?php
					foreach ($rute->result() as $rute) 
						{?>
						<tr>
							<td><?php echo $rute->depart_at ?></td>
							<td><?php echo $rute->rute_from ?></td>
							<td><?php echo $rute->rute_to ?></td>
							<td><?php echo $rute->price ?></td>
							<td>
								<a href="<?php echo base_url();?>welcome/pesan/<?php echo  $rute->ruteid; ?>" class="btn btn-info" onclick="pesan(<?php echo $rute->ruteid;?>)">pesan</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
	</html>