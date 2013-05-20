<?php include("_tabmenu.php")?>

<!-- <form class="form-inline well" method="get" action="myaccounts/adfree">
    <?php // echo form_dropdown('adf_want_id',get_option('id','title','adf_wants'),@$_GET['adf_want_id'],'','--- ความต้องการ ---') ?>
    <?php echo form_dropdown('adf_category_id',get_option('id','title','adf_categories'),@$_GET['adf_category_id'],'','--- หมวดหมู่ประกาศหลัก ---') ?>
    <?php echo form_dropdown('adf_sub_category_id',get_option('id','title','adf_sub_categories'),@$_GET['adf_sub_category_id'],'','--- หมวดหมู่ประกาศย่อย ---') ?>
    <?php echo form_dropdown('province_id',get_option('id','name','provinces'),@$_GET['province_id'],'','--- ทุกจังหวัด ---') ?>
    <input type="text" name="title" placeholder="คำค้นหา" value="<?php echo @$_GET['title']?>">
    <input type="submit" class="btn" value="ค้นหา">
</form> -->

<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th width="185"><a href="myaccounts/adfree_form"><div class="btn btn-primary"><i class="icon-plus icon-large"></i> เพิ่มรายการ</div></a></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($adfrees as $key=>$adfree):?>
            <tr>
                <td class="middle">
                    <div><?php echo mysql_to_th($adfree->updated)?></div>
                </td>
                <td>
                    <a href="adfrees/view/<?php echo $adfree->id?>">
                    <?php if($adfree->image):?>
                        <img src="<?php echo $adfree->image?>" width="90">
                    <?php else:?>
                        <img data-src="holder.js/90x60" alt="90x60" src="http://placehold.it/90x60">
                    <?php endif;?>
                    </a>
                </td>
                <td>
                    <a href="adfrees/view/<?php echo $adfree->id?>"><strong><?php echo $adfree->title?></strong></a>
                    <div class="muted"><?php echo $adfree->adf_category->title?> » <?php echo $adfree->adf_sub_category->title?></div>
                </td>
                <td>
                    <?php if($adfree->price):?>
                        <strong><?php echo $adfree->price?> บาท</strong>
                    <?php else:?>
                        <strong>ไม่ระบุราคา</strong>
                    <?php endif;?>
                </td>
                <td class="muted">
                    <div><?php echo $adfree->user->province->name?></div>
                    <div><?php echo $adfree->user->amphur->amphur_name?></div>
                </td>
                <td>
                    <a class="btn btn-success btn-small" href="adfrees/view/<?php echo $adfree->id?>" target="_blank"><i class="icon-zoom-in icon-large"></i> วิว</a>
                    <a class="btn btn-info btn-small" href="myaccounts/adfree_form/<?php echo $adfree->id?>"><i class="icon-edit icon-large"></i> แก้ไข</a>
                    <a class="btn btn-danger btn-small" href="myaccounts/adfree_delete/<?php echo $adfree->id?>"><i class="icon-trash icon-large"></i> ลบ</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>