<ul class="breadcrumb mywizard">
  <li><a href="forms/admin/forms/categories">หมวดหมู่</a></li>
  <li class="active"><?=$category->title?></li>
</ul>

<div class="page-header">
	<h1><?=$category->title?></h1>
</div>

<form method="post" action="forms/admin/forms/sub_categories_save/<?=$subcat_id->id?>" class="well form-inline">
	<input type="text" name="title" value="<?=$subcat_id->title?>" placeholder="หมวดหมู่ย่อย">
	<input type="hidden" name="adf_category_id" value="<?=$category->id?>">
	<input type="submit" class="btn btn-primary" value="บันทึก">
</form>

<table class="table table-hover">
    <thead>
	<tr>
	    <th>สถานะ</th>
		<th>#</th>
		<th>ชื่อหมวดหมู่ย่อย</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($category->adf_sub_category->get() as $key=>$row):?>
    	<tr>
    	    <td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> <?php echo (@$_POST['status']=="approve")?'':'' ?> /></td>
    		<td><?=$key+1?></td>
	        <td><?=$row->title?></td>
	        <td>
	        	<a href="forms/admin/forms/sub_categories/<?=$category->id?>/<?=$row->id?>" class="btn btn-mini">แก้ไข</a>
	        	<a href="forms/admin/forms/sub_categories_delete/<?=$row->id?>" class="btn btn-mini" onclick="return(confirm('ยืนยันการลบข้อมูล'))" >ลบ</a>
	        </td>
        </tr>
    <?php endforeach;?>
	</tbody>
</table>