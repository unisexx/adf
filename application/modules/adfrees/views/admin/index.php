<ul class="breadcrumb mywizard">
    <li class="active">ฟรีประกาศ</li>
</ul>

<div class="page-header">
    <h1>ฟรีประกาศ</h1>
</div>

<form class="form-inline well" method="get" action="adfrees">
    <?php // echo form_dropdown('adf_want_id',get_option('id','title','adf_wants'),@$_GET['adf_want_id'],'','--- ความต้องการ ---') ?>
    <?php echo form_dropdown('adf_category_id',get_option('id','title','adf_categories'),@$_GET['adf_category_id'],'','--- หมวดหมู่ประกาศหลัก ---') ?>
    <?php echo form_dropdown('adf_sub_category_id',get_option('id','title','adf_sub_categories'),@$_GET['adf_sub_category_id'],'','--- หมวดหมู่ประกาศย่อย ---') ?>
    <?php echo form_dropdown('province_id',get_option('id','name','provinces'),@$_GET['province_id'],'','--- ทุกจังหวัด ---') ?>
    <input type="text" name="title" placeholder="คำค้นหา" value="<?php echo @$_GET['title']?>">
    <input type="submit" class="btn" value="ค้นหา">
</form>

<table class="table table-hover">
    <tbody>
        <?php foreach($adfrees as $key=>$adfree):?>
            <tr>
                <td class="middle">
                    <div><?php echo mysql_to_th($adfree->created)?></div>
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
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
