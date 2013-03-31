<ul class="breadcrumb">
  <li class="active">หมวดหมู่</li>
</ul>

<div class="page-header">
	<h1>หมวดหมู่</h1>
</div>

<form method="post" action="forms/admin/forms/categories_save/<?=$category->id?>" class="well form-inline">
	<input class="input" type="text" name="title" value="<?=$category->title?>" placeholder="หมวดหมู่">
	
	<!-- <div class="input-append">
	<input class="input input-xlarge" type="text" name="image" placeholder="ไอค่อนหมวดหมู่" value="<?php echo $category->image?>"/><input class="btn" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'image')" />
	</div> -->
	
	<div class="input-append">
      <input class="input-medium" id="iconInput" type="text" name="icon" placeholder="ไอค่อนหมวดหมู่" value="<?php echo $category->icon?>">
      <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">เลือก <span class="caret"></span></button>
        <ul class="dropdown-menu" style="width:690px; left:-380px;">
          <?php foreach($icons as $icon):?>
              <li class="select-icon pull-left"><a><i class="<?php echo $icon->name?>"></i> <?php //echo $icon->name?></a></li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>

	<input type="submit" class="btn btn-primary" value="บันทึก">
</form>

<form id="order" action="forms/admin/forms/save_orderlist" method="post">
<table class="table table-hover">
    <thead>
	<tr>
	    <th>สถานะ</th>
	    <th>ลำดับ</th>
		<th>ไอค่อน</th>
		<!-- <th>รูปภาพ</th> -->
		<th>ชื่อหมวดหมู่</th>
		<th>จำนวนหมวดหมู่ย่อย</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($categories as $key=>$row):?>
    	<tr>
    	    <td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> <?php echo (@$_POST['status']=="approve")?'':'' ?> /></td>
    	    <td>
    	        <input type="text" name="orderlist[]" value="<?php echo $row->orderlist ? $row->orderlist : $row->id ; ?>" class="input-mini">
                <input type="hidden" name="orderid[]" value="<?php echo $row->id ?>">
            </td>
    		<td><i class="<?=$row->icon?> icon-2x"></i></td>
    		<!-- <th><img src="<?=$row->image?>"></th> -->
	        <td><?=$row->title?></td>
	        <td><?=$row->adf_sub_category->result_count()?></td>
	        <td>
	        	<a href="forms/admin/forms/sub_categories/<?=$row->id?>" class="btn btn-mini">เพิ่มหมวดหมู่ย่อย</a>
	        	<a href="forms/admin/forms/categories/<?=$row->id?>" class="btn btn-mini">แก้ไข</a>
	        	<a href="forms/admin/forms/categories_delete/<?=$row->id?>" class="btn btn-mini" onclick="return(confirm('การลบหมวดหมู่หลักจะทำให้หมวดหมู่ย่อยถูกลบไปด้วย ยืนยันการลบข้อมูล'))" >ลบ</a>
	        </td>
        </tr>
    <?php endforeach;?>
	</tbody>
</table>
<input class="btn" type="submit" value="เรียงลำดับ">  
</form>