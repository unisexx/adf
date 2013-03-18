<ul class="breadcrumb mywizard">
  <li class="active">ผู้ดูแล</li>
</ul>

<h1>ผู้ดูแล</h1>
<table class="table table-striped">
    <thead>
	<tr>
		<th>ยูสเซอร์เนม</th>
		<th>ชื่อ - นามสกุล</th>
		<th>อีเมล์</th>
		<th>กลุ่มผู้ใช้งาน</th>
		<th width="100">
			<?php if(permission('administrators', 'create')):?>
				<?php echo anchor('users/admin/administrators/form',lang('btn_add'),'class="btn btn-mini"')?>
			<?php endif;?>
		</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($users->order_by('id','desc')->get_page() as $user):?>
	<tr <?php echo cycle()?>>
		<td><?php echo $user->username?></td>
		<td><?php echo $user->display?></td>
		<td><?php echo $user->email?></td>
		<td><?php echo $user->user_type->name?></td>
		<td>
			<?php if(permission('administrators', 'update')):?>
				<?php echo anchor('users/admin/administrators/form/'.$user->id,lang('btn_edit'),'class="btn btn-mini"')?>
			<?php endif;?>
			<?php if(permission('administrators', 'delete')):?>
				<?php echo anchor('users/admin/administrators/delete/'.$user->id,lang('btn_delete'),'class="btn btn-mini" onclick="return confirm(\''.lang('confirm_delete').'\')"')?>
			<?php endif;?>
		</td>
	</tr>
	<?php endforeach?>
	</tbody>
</table>
<?php echo $users->pagination()?>
