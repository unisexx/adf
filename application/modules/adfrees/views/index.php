<?php echo modules::run('adfrees/search_form')?>
<ul class="thumbnails">
    <?php foreach($adfrees as $adfree):?>
    <li class="span3">
        <a href="adfrees/view/<?php echo $adfree->id?>">
        <div class="thumbnail">
            <?php if($adfree->image):?>
                <img src="<?php echo $adfree->image?>">
            <?php else:?>
                <img data-src="holder.js/300x200" alt="300x200" src="http://placehold.it/300x300">
            <?php endif;?>
            <div class="caption thumb-detail-block">
                <h6><?php echo $adfree->title?></h6>
                <p><i class="<?php echo $adfree->adf_category->icon?>"></i> <?php echo $adfree->adf_sub_category->title?></p>
                <?php if($adfree->user->amphur->amphur_name != '' or $adfree->user->province->name != ''):?>
                    <p><i class="icon-map-marker"></i> <?php echo $adfree->user->amphur->amphur_name?> <?php echo $adfree->user->province->name?></p>
                <?php endif;?>
                <p><i class="icon-calendar"></i> <?php echo mysql_to_th($adfree->updated,'f',TRUE)?></p>
                <div class="btn btn-mini btn-primary pull-right"><?php echo ($adfree->price)?number_format($adfree->price).' บาท':'ไม่ระบุราคา'; ?></div>
                <br clear="all">
            </div>
        </div>
        </a>
    </li>
    <?php endforeach;?>
</ul>
<?php echo $adfrees->pagination()?>