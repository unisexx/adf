<h1 style="margin:0 0 15px;">หมวดหมู่</h1>
<form method="post" action="categories/admin/categories/save/<?php echo $category->id?>" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<th>ชื่อหมวดหมู่ :</th>
			<td>
				<input type="text" name="name" rel="th" value="<?php echo $category->name?>" />
			</td>
		</tr>
		<tr>	
			<th></th>
			<td>
			<input type="hidden" name="parents" value="<?php echo $parent->id ?>"  />
			<input type="hidden" name="module" value="<?php echo $parent->module ?>"  />
			<input type="submit" value="บันทึก" class="btn" />
			<input type="button" value="ย้อนกลับ" class="btn" onclick="window.location = 'categories/admin/categories/<?php echo $parent->module?>'" />
			</td>
		</tr>
	</table>
</form>
