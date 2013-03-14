<ul class="breadcrumb">
  <li class="active">หมวดหมู่</li>
</ul>

<div class="page-header">
	<h1>หมวดหมู่</h1>
</div>

<form method="post" action="forms/admin/forms/categories_save/<?=$category->id?>" class="well form-inline">
	<input type="text" name="title" value="<?=$category->title?>" placeholder="หมวดหมู่">
	<input type="submit" class="btn" value="บันทึก">
</form>

<table class="table table-hover">
    <thead>
	<tr>
		<th>#</th>
		<th>ชื่อหมวดหมู่</th>
		<th>จำนวนหมวดหมู่ย่อย</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($categories as $key=>$row):?>
    	<tr>
    		<td><?=$key+1?></td>
	        <td><?=$row->title?></td>
	        <td><?=$row->adf_sub_category->result_count()?></td>
	        <td>
	        	<a href="forms/admin/forms/sub_categories/<?=$row->id?>" class="btn btn-mini">เพิ่มหมวดหมู่ย่อย</a>
	        	<a href="forms/admin/forms/categories/<?=$row->id?>" class="btn btn-mini">แก้ไข</a>
	        	<a href="forms/admin/forms/categories_delete/<?=$row->id?>" class="btn btn-mini" onclick="return(confirm('ยืนยันการลบข้อมูล'))" >ลบ</a>
	        </td>
        </tr>
    <?php endforeach;?>
	</tbody>
</table>