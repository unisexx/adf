<div class="row">
    <div class="span8">
        <ul class="breadcrumb">
            <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
            <li><a href="adfrees/c/<?php echo $adfree->adf_category->slug?>"><?php echo $adfree->adf_category->title?></a> <span class="divider">/</span></li>
            <li><a href="adfrees/s/<?php echo $adfree->adf_sub_category->slug?>"><?php echo $adfree->adf_sub_category->title?></a> <span class="divider">/</span></li>
            <li class="active"><?php echo $adfree->title?></li>
        </ul>

        <h1><?php echo $adfree->title?></h1>
        <span class="badge badge-warning"><?php echo mysql_to_th($adfree->updated,'S',true)?> น.</span>
        <span class="badge badge-info">ความต้องการ : <?php echo $adfree->adf_want->title?></span>
        <span class="badge badge-important">สภาพสินค้า : <?php echo $adfree->adf_type->title?></span>
        <div class="loading-blk"><img class="loading" src="media/images/ajax-loader.gif"></div>
        <div class="wraptocenter"><span></span>
            <img src="<?php echo $attach->url?>" alt="<?php echo $adfree->title?>">
        </div>
        <div class="row thumbrow">
        <?php foreach($attachs as $attach):?>
            <div class="span1 wrapthumb thumbnail">
                <input type="hidden" name="thumbnail_id" value="<?php echo $attach->id?>">
                <img src="<?php echo $attach->url?>">
            </div>
        <?php endforeach;?>
        </div>
        <hr>
        <div>
            <h2>รายละเอียดสินค้า</h2>
            <div><?php echo $adfree->detail?></div>
        </div>
    </div>
    
    <div class="span4">
        <div class="btn btn-xlarge btn-primary">
            <?php echo ($adfree->price)?$adfree->price.' บาท':'ไม่ระบุราคา'; ?>
        </div>
        <h3>รายละเอียดผู้ประกาศ</h3>
        <table class="table userpost-detail">
            <tr>
                <th><i class="icon-user"></i> ชื่อ</th>
                <td><?php echo $adfree->user->username?></td>
            </tr>
            <tr>
                <th><i class="icon-map-marker"></i> ที่ตั้ง</th>
                <td>อ.<?php echo $adfree->user->amphur->amphur_name?> จ.<?php echo $adfree->user->province->name?></td>
            </tr>
            <tr>
                <th><i class="icon-phone"></i> เบอร์โทรศัพท์</th>
                <td><?php echo $adfree->user->phone?></td>
            </tr>
            <tr>
                <th><i class="icon-envelope"></i> อีเมล์</th>
                <td><?php echo $adfree->user->email?></td>
            </tr>
            <tr>
                <th><i class="icon-bookmark"></i> other</th>
                <td><?php echo $adfree->user->other?></td>
            </tr>
            <tr>
                <th></th>
                <td>
                	<?php echo $adfree->user->facebook?'<a href="'.$adfree->user->facebook.'" target="_blank"><i class="icon-facebook-sign icon-2x facebookIcon"></i></a>':'';?>
                	<?php echo $adfree->user->twitter?'<a href="'.$adfree->user->twitter.'" target="_blank"><i class="icon-twitter-sign icon-2x twitterIcon"></i></a>':'';?>
                	<?php echo $adfree->user->googleplus?'<a href="'.$adfree->user->googleplus.'" target="_blank"><i class="icon-google-plus-sign icon-2x googleplusIcon"></i></a>':'';?>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><a href="adfrees/member/<?php echo $adfree->user_id?>" class="pull-right btn btn-small btn-success">ดูสินค้าอื่นๆของ <?php echo $adfree->user->username?></a></td>
            </tr>
        </table>
    </div>
    <div class="span12">
		<h3>ประกาศอัพเดทล่าสุดของ <?php echo $adfree->user->username?></h3>
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
		
	</div>
</div>