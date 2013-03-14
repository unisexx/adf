<h1>ฟรีประกาศ</h1>

<form class="form-inline well" method="get" action="adfrees">
  <?php echo form_dropdown('adf_want_id',get_option('id','title','adf_wants'),@$_GET['adf_want_id'],'','--- ความต้องการ ---') ?>
   <?php echo form_dropdown('adf_category_id',get_option('id','title','adf_categories'),@$_GET['adf_category_id'],'','--- หมวดหมู่ประกาศหลัก ---') ?>
   <?php echo form_dropdown('adf_sub_category_id',get_option('id','title','adf_sub_categories'),@$_GET['adf_sub_category_id'],'','--- หมวดหมู่ประกาศย่อย ---') ?>
  <input type="text" name="title" placeholder="คำค้นหา" value="<?php echo @$_GET['title']?>">
  <input type="submit" class="btn" value="ค้นหา">
</form>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>ความต้องการ</th>
            <th>หัวข้อประกาศ</th>
            <th>หมวดหมู่</th>
            <th>หมวดหมู่ย่อย</th>
            <th>ประกาศโดย</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($adfrees as $key=>$adfree):?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $adfree->adf_want->title?></td>
                <td><?php echo $adfree->title?></td>
                <td><?php echo $adfree->adf_category->title?></td>
                <td><?php echo $adfree->adf_sub_category->title?></td>
                <td><?php echo $adfree->user->username?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
