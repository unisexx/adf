<h3>ประกาศล่าสุด</h3>

<!-- <table class="table table-hover">
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
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<div class="row">
    <div class="span12">
        <div class="divider">
        </div>
    </div>
</div> -->

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
                <p><?php echo $adfree->adf_sub_category->title?></p>
                <p><i class="icon-map-marker"></i> <?php echo $adfree->user->amphur->amphur_name?> <?php echo $adfree->user->province->name?></p>
                <p><i class="icon-calendar"></i> <?php echo mysql_to_th($adfree->updated,'f',TRUE)?></p>
                <div class="btn btn-mini btn-primary pull-right"><?php echo ($adfree->price)?$adfree->price.' บาท':'ไม่ระบุราคา'; ?></div>
                <br clear="all">
            </div>
        </div>
        </a>
    </li>
    <?php endforeach;?>
</ul>