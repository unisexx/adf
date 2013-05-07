<ul class="breadcrumb">
  <li class="active">สมาชิก</li>
</ul>

<div class="page-header">
    <h1>สมาชิก</h1>
</div>

<table class="table table-hover">
	<tr>
    	<th>หมายเลขสมาชิก</th>
		<th>ยูสเซอร์เนม</th>
		<th>อีเมล์</th>
		<th>ลงทะเบียนเมื่อ</th>
		<th width="100"><?php echo anchor('users/admin/users/form','เพิ่มรายการ','class="btn btn-mini"')?></th>
	</tr>
	<?php foreach($users->order_by('id','desc')->get_page() as $user):?>
	<tr <?php echo cycle()?>>
    	<td><?php echo sprintf("%05d",$user->id)?></td>
		<td><?php echo $user->username?></td>
		<td><?php echo $user->email?></td>
		<!--<td><?php echo $user->level->level?></td>-->
        <td><?php echo mysql_to_th($user->created,'S',TRUE) ?></td>
		<td>
			<?php echo anchor('users/admin/users/form/'.$user->id,'แก้ไข','class="btn btn-mini"')?>
			<?php echo anchor('users/admin/users/delete/'.$user->id,'ลบ','class="btn btn-mini" onclick="return confirm(\''.lang('confirm_delete').'\')"')?>
		</td>
	</tr>
	<?php endforeach?>
</table>
<?php echo $users->pagination()?>
