<h3>หมวดหมู่ประกาศ</h3>
<div class="row">
<?php foreach($adf_categories as $adf_category):?>
<div class="span6">
    <div class="well well-non">
        <a href="adfrees?adf_category_id=<?php echo $adf_category->id?>">
        <h4><i class="<?=$adf_category->icon?> icon-2x"></i> <img src="<?=$adf_category->image?>"> <?php echo $adf_category->title?></h4></a>
        <?php foreach($adf_category->adf_sub_category->get() as $adf_sub_category):?>
            <a href="adfrees?adf_category_id=<?php echo $adf_category->id?>&adf_sub_category_id=<?php echo $adf_sub_category->id?>"><?php echo $adf_sub_category->title?></a>, 
        <?php endforeach;?>
    </div>
</div>
<?php echo alternator('','<br clear="all">')?>
<?php endforeach;?>
</div>
