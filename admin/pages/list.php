<?php

?>

<br />


<h1>Todo:</h1>
<ul>
	<li>New entry implementation!</li>
</ul>

<div id="addButton"><a href="?page=listAdd">Add New</a></div>

<table>
	<tr>
		<td>ID</td>
		<td>Short</td>
		<td>Long</td>
		<td>Date</td>
		<td>Clicks</td>
		<td>Last Visit</td>
		<td>Action</td>
	</tr>
	<?php
	$shorts = $admin->getAll();
	foreach($shorts as $short){
		//printr($short);
		?>
		<tr>
			<td><?=$short['id'];?></td>
			<td><?=$short['short'];?></td>
			<td><?=$short['original'];?></td>
			<td><?=date("Y-m-d \a\\t H:m", $short['savedate']);?></td>
			<td><?=$short['clicks'];?></td>
			<td><?=(!empty($short['last_visit'])) ? date("Y-m-d \a\\t H:m", $short['last_visit']) : 'n/a';?></td>
			<td><a href="?page=listEdit&id=<?=$short['id'];?>">Edit</a><!-- | <a href="?page=listDelete&id=<?=$short['id'];?>">Delete</a--></td>
		</tr>

		<?php
	}
	?>
</table>