<ul class="breadcrumb">
    <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
    <li class="active">รายการประกาศของ <?php echo $adfrees->user->username?></li>
</ul>

<div class="row">
    <div class="span4">
        <table class="table table-bordered table-hover">
            <tr><td><a href="adfrees/member/<?php echo $adfrees->user_id?>"><i class="icon-chevron-right"></i> ประกาศทั้งหมด (<?php echo $allcount->result_count();?>)</a></td></tr>
            <?php foreach($sub_categories as $sub_category):?>
                <?php $count = new Adfree();?>
                <tr>
                    <td>
                        <a href="adfrees/member/<?php echo $adfrees->user_id?>/<?php echo $sub_category->adf_sub_category_id?>"><i class="icon-chevron-right"></i> <?php echo $sub_category->adf_sub_category->title?> (<?php echo $count->where("adf_sub_category_id",$sub_category->adf_sub_category_id)->get()->result_count();?>)</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
    <div class="span8">
        <ul class="thumbnails">
        <?php foreach($adfrees as $adfree):?>
        <li class="span2">
            <a href="adfrees/view/<?php echo $adfree->id?>">
            <div class="thumbnail">
                <?php if($adfree->image):?>
                    <img src="<?php echo $adfree->image?>">
                <?php else:?>
                    <img data-src="holder.js/300x200" alt="300x200" src="http://placehold.it/300x300">
                <?php endif;?>
                <div class="caption">
                    <h6><?php echo $adfree->title?></h6>
                    <div class="btn btn-mini btn-primary pull-right"><?php echo ($adfree->price)?$adfree->price.' บาท':'ไม่ระบุราคา'; ?></div>
                    <br clear="all">
                </div>
            </div>
            </a>
        </li>
        <?php echo alternator('','','','<br clear="all">')?>
        <?php endforeach;?>
        </ul>
    </div>
</div>