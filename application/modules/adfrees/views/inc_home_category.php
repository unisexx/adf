<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;หมวดหมู่ประกาศ</h3>
<div class="row">
<?php foreach($adf_categories as $adf_category):?>
<div class="span6">
    <div class="well well-primary box">
        <a href="adfrees?adf_category_id=<?php echo $adf_category->id?>">
        <i class="m-icon-big-swapdown m-icon-white"></i> <h3><?php echo $adf_category->title?></h3></a>
        <?php foreach($adf_category->adf_sub_category->get() as $adf_sub_category):?>
            <a href="adfrees?adf_category_id=<?php echo $adf_category->id?>&adf_sub_category_id=<?php echo $adf_sub_category->id?>"><?php echo $adf_sub_category->title?></a>, 
        <?php endforeach;?>
    </div>
</div>
<?php echo alternator('','<br clear="all">')?>
<?php endforeach;?>
</div>
