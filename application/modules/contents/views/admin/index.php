<ul class="breadcrumb">
  <li class="active"><?=$type_name?></li>
</ul>

<div class="page-header">
	<h1><?=$type_name?></h1>
</div>

<form method="get" class="well form-inline">
	<table class="form">
		<tr>
			<th>หัวข้อ</th><td><input type="text" name="search" value="<?php echo (isset($_GET['search']))?$_GET['search']:'' ?>" /></td>
			<td><input class="btn" type="submit" value="ค้นหา" /></td>
		</tr>
	</table>
</form>
	
<?php echo $contents->pagination()?>
<form id="order" action="contents/admin/contents/save_orderlist/<?=$type?>" method="post">
<table class="table table-hover">
	<thead>
	<tr>
		<th width="70">แสดง</th>
		<?php if($type == 'seat' or $type == 'house'):?>
			<th>ลำดับ</th>
		<?php endif;?>
		<th>หัวข้อ</th>
		<?php if($type == 'articles'):?>
        <th><a rel="lightbox" class="btn btn-mini" href="categories/admin/categories/<?=$type?>?iframe=true&width=90%&height=90%">หมวดหมู่</a></th>
        <?php endif;?>
		<th width="90">
			<a class="btn btn-mini" href="contents/admin/contents/form/<?=$type?>">เพิ่มรายการ</a>
		</th>
	</tr>
	</thead>
	<?php foreach($contents as $row): ?>
	<tr <?php echo cycle()?>>
		<td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> /></td>
		<?php if($type == 'seat' or $type == 'house'):?>
			<td><input type="text" name="orderlist[]" size="1" value="<?php echo $row->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $row->id ?>"></td>
		<?php endif;?>
		<td><?php echo $row->title?></td>
		<?php if($type == 'articles'):?>
        <td><?php echo anchor('contents/admin/contents/index/'.$type.'?category_id='.$row->category_id,$row->category->name) ?></td>
        <?php endif;?>
		<td>
			<a class="btn btn-mini" href="contents/admin/contents/form/<?=$type?>/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn btn-mini" href="contents/admin/contents/delete/<?=$type?>/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
		<?php endforeach; ?>
	</table>
<?php echo $contents->pagination()?>
<input type="hidden" name="type" value="<?=$type?>">
</form>
