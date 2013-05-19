<h3>หมวดหมู่ประกาศ</h3>
<div class="row">
<?php foreach($adf_categories as $adf_category):?>
<div class="span6">
    <div class="adf-category well">
        <a href="adfrees/c/<?php echo $adf_category->slug?>">
        <h4 style="font-size: 17.5px !important;"><i class="<?=$adf_category->icon?> icon-2x"></i> <img src="<?=$adf_category->image?>"> <?php echo $adf_category->title?> <span class="muted">(<?php echo $adf_category->adfree->result_count()?>)</span></h4></a>
        <?php foreach($adf_category->adf_sub_category->get() as $adf_sub_category):?>
            <h5 style="display:inline; font-size: 13px; font-weight: normal;"><a href="adfrees/s/<?php echo $adf_sub_category->slug?>"><?php echo $adf_sub_category->title?></a></h5>, 
        <?php endforeach;?>
    </div>
</div>
<?php echo alternator('','<br clear="all">')?>
<?php endforeach;?>
</div>
