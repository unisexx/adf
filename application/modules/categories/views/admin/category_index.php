<div class="page-header">
    <h1>หมวดหมู่</h1>
</div>

<?php echo $categories->pagination()?>
<form id="order" action="categories/admin/categories/save_orderlist" method="post">
<table class="table table-hover table-condensed">
    <thead>
	<tr>
    	<th>ลำดับ</th>
		<th>ชื่อ</th>
		<!-- <th>รายละเอียด</th> -->
		<th width="90"><a class="btn btn-mini" href="categories/admin/categories/<?php echo $module?>/form">เพิ่มรายการ</a></th>
	</tr>
	</thead>
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" class="span1" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td><?php echo $category->name?></td>
		<!-- <td><?php echo $category->description;?></td> -->
		<td>
			<a class="btn btn-mini" href="categories/admin/categories/<?php echo $module ?>/form/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn btn-mini" href="categories/admin/categories/delete/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<input type="hidden" name="module" value="<?php echo $module ?>"  />
<input class="btn btn-mini" type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>
	