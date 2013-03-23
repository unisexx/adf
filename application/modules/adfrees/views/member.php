<ul class="breadcrumb">
    <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
    <li class="active">รายการประกาศของ <?php echo $adfrees->user->username?></li>
</ul>

<div class="row">
    <div class="span4">
        <ul class="nav nav-list well">
            <li><a href="#global"><i class="icon-chevron-right"></i> Global styles</a></li>
            <li><a href="#gridSystem"><i class="icon-chevron-right"></i> Grid system</a></li>
            <li><a href="#fluidGridSystem"><i class="icon-chevron-right"></i> Fluid grid system</a></li>
            <li><a href="#layouts"><i class="icon-chevron-right"></i> Layouts</a></li>
            <li><a href="#responsive"><i class="icon-chevron-right"></i> Responsive design</a></li>
        </ul>
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