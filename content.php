<?php
const MAX_ITEMS = 5;
$page = isset($_GET['page']) && (int)$_GET['page'] > 0 ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * MAX_ITEMS;
$max_page = ceil((count($items) / MAX_ITEMS));
$sub_items = array_slice($items, $offset, MAX_ITEMS);

?>

<table width="100%", border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Description</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($sub_items as $key => $item) : ?>
				<tr>
					<td><?php echo $item[0]?></td>
					<td><?php echo $item[1]?></td>
					<td><?php echo $item[2]?></td>
					<td><?php echo $item[3]?></td>
					<td>
						<a href="/bogdan/remove.php?id=<?= $key ?>">REMOVE</a>
					</td>
				</tr> 
			<?php endforeach?>
		</tbody>

	</table>

<ul class="pagination">
	<?php if ($page > 1): ?>
		<li><a href="?page=<?= $page - 1 ?>">&laquo;</a></li>
	<?php endif ?>
	<?php for ($i=1; $i <= $max_page; $i++): ?>
		<li class="<?php if ($i === $page) echo 'active' ?>">
	<a href="?page=<?= $i ?>"><?= $i ?></a></li>
	<?php endfor; ?>
	<?php if ($page < $max_page): ?>
		<li><a href="?page=<?= $page + 1 ?>">&raquo;</a></li>
	<?php endif ?>
</ul>
