<ul class="breadcrumb">
  <li class="active">ประเภทสินค้า</li>
</ul>

<div class="page-header">
    <h1>ประเภทสินค้า</h1>
</div>

<form method="post" action="forms/admin/forms/types_save/<?=$category->id?>" class="well form-inline">
    <input type="text" name="title" value="<?=$category->title?>" placeholder="ประเภทสินค้า">
    <input type="submit" class="btn" value="บันทึก">
</form>

<table class="table table-hover">
    <thead>
    <tr>
        <th>สถานะ</th>
        <th>#</th>
        <th>ประเภทสินค้า</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($categories as $key=>$row):?>
        <tr>
            <td><input type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?> <?php echo (@$_POST['status']=="approve")?'':'' ?> /></td>
            <td><?=$key+1?></td>
            <td><?=$row->title?></td>
            <td>
                <a href="forms/admin/forms/types/<?=$row->id?>" class="btn btn-mini">แก้ไข</a>
                <a href="forms/admin/forms/types_delete/<?=$row->id?>" class="btn btn-mini" onclick="return(confirm('ยืนยันการลบข้อมูล'))" >ลบ</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>