<h3>ประกาศล่าสุด</h3>

<table class="table table-hover">
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
</div>