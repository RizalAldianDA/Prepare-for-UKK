<html>
<head>
	
</head>
<body>
	<center><?php echo anchor('insert/tambah','Tambah Data');?></center>
	<table style ="margin: 20px auto;" border="1" >
		<tr>
			<th>No</th>
			<th>Userid</th>
			<th>Username</th>
			<th>Password</th>
			<th>Fullname</th>
			<th>Action</th>
		</tr>

		<?php
		$no = 1 ;
		foreach ($user as $u) {
			?>
		
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $u->userid?></td>
			<td><?php echo $u->username?></td>
			<td><?php echo $u->password?></td>
			<td><?php echo $u->fullname?></td>
			<td>
				<?php echo anchor('insert/edit' .$u->userid, 'Edit'); ?>
				<?php echo anchor('insert/hapus','hapus'); ?>
			</td>
		</tr>
		
		<?php } ?>
	</table>
	
</body>
</html>