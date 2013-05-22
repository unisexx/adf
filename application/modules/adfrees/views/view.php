<style>
.sidebar{position:absolute; width:300px;}
	.sidebar.affix {
    position: fixed;
  }
  .sidebar.affix-bottom {
    <?php echo ($adfrees->result_count() > 3)?'bottom: 1530px;':'bottom: 1100px;';?>
  }
</style>
<div class="row">
    <div class="span8">
        <ul class="breadcrumb">
            <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
            <li><a href="adfrees/c/<?php echo $adfree->adf_category->slug?>"><?php echo $adfree->adf_category->title?></a> <span class="divider">/</span></li>
            <li><a href="adfrees/s/<?php echo $adfree->adf_sub_category->slug?>"><?php echo $adfree->adf_sub_category->title?></a> <span class="divider">/</span></li>
            <li class="active"><?php echo $adfree->title?></li>
        </ul>

        <h1><?php echo $adfree->title?></h1>
        <span class="badge badge-warning"><?php echo mysql_to_th($adfree->updated,'S',true)?></span>
        <span class="badge badge-info">ความต้องการ : <?php echo $adfree->adf_want->title?></span>
        <span class="badge badge-important">สภาพสินค้า : <?php echo $adfree->adf_type->title?></span>
		<div class="loading-blk"><img class="loading" src="media/images/ajax-loader.gif"></div>
        
        <div class="wraptocenter"><span></span>
            <?php if($attach->url):?>
                <img src="<?php echo $attach->url?>" alt="<?php echo $adfree->title?>">
            <?php else:?>
                <img data-src="holder.js/300x300" alt="<?php echo $adfree->title?>" src="http://placehold.it/300x300">
            <?php endif;?>
        </div>
        <div class="thumbrow">
        <?php foreach($attachs as $attach):?>
            <div class="span1 wrapthumb thumbnail">
                <input type="hidden" name="thumbnail_id" value="<?php echo $attach->id?>">
                <img src="<?php echo $attach->thumb?>">
            </div>
        <?php endforeach;?>
            <br clear="all">
            <div class="pull-right">
                จำนวนผู้เข้าชม <?php echo $adfree->counter?> ครั้ง<br>
                หมายเลขประกาศ : <?php echo $adfree->id?>
            </div><br>
            <?php echo addThis()?>
        </div>
        
        <hr>
        <div>
            <h3>รายละเอียดสินค้า</h3>
            <div>
                <strong>
                <div class="span2">ความต้องการ : <?php echo $adfree->adf_want->title?></div>
                <div class="span2">ราคา : <?php echo ($adfree->price)?number_format($adfree->price).' บาท':'ไม่ระบุราคา';?></div>
                <div class="span2">สภาพสินค้า : <?php echo $adfree->adf_type->title?></div>
                </strong>
                <br clear="all"><br>
            	<?php echo $adfree->detail?>
            </div>
        </div>
        <hr>
    </div>
    
    <div class="span4">
    	<div class="sidebar" data-spy="affix" <?php echo ($adfrees->result_count() > 3)?'data-offset-bottom="1530"':'data-offset-bottom="1100"';?>>
        <div class="btn btn-xlarge btn-primary">
            <?php echo ($adfree->price)?number_format($adfree->price).' บาท':'ไม่ระบุราคา'; ?>
        </div>
        <h3>รายละเอียดผู้ประกาศ</h3>
        <table class="table userpost-detail">
            <tr>
                <th><i class="icon-user"></i> ชื่อ</th>
                <td><?php echo $adfree->user->username?></td>
            </tr>
            <?php if($adfree->user->amphur->amphur_name != '' or $adfree->user->province->name != ''):?>
            <tr>
                <th><i class="icon-map-marker"></i> ที่ตั้ง</th>
                <td>อ.<?php echo $adfree->user->amphur->amphur_name?> จ.<?php echo $adfree->user->province->name?></td>
            </tr>
            <?php endif;?>
            <?php if($adfree->user->phone):?>
            <tr>
                <th><i class="icon-phone"></i> เบอร์โทรศัพท์</th>
                <td><?php echo $adfree->user->phone?></td>
            </tr>
            <?php endif;?>
            <?php if($adfree->user->email):?>
            <tr>
                <th><i class="icon-envelope"></i> อีเมล์</th>
                <td><?php echo $adfree->user->email?></td>
            </tr>
            <?php endif;?>
            <?php if($adfree->user->other):?>
            <tr>
                <th><i class="icon-bookmark"></i> other</th>
                <td><?php echo $adfree->user->other?></td>
            </tr>
            <?php endif;?>
            <?php if($adfree->user->facebook != '' or $adfree->user->twitter != '' or $adfree->user->googleplus):?>
            <tr>
                <th></th>
                <td>
                	<?php echo $adfree->user->facebook?'<a href="'.$adfree->user->facebook.'" target="_blank"><i class="icon-facebook-sign icon-2x facebookIcon"></i></a>':'';?>
                	<?php echo $adfree->user->twitter?'<a href="'.$adfree->user->twitter.'" target="_blank"><i class="icon-twitter-sign icon-2x twitterIcon"></i></a>':'';?>
                	<?php echo $adfree->user->googleplus?'<a href="'.$adfree->user->googleplus.'" target="_blank"><i class="icon-google-plus-sign icon-2x googleplusIcon"></i></a>':'';?>
                </td>
            </tr>
            <?php endif;?>
            <tr>
                <th></th>
                <td><a href="adfrees/member/<?php echo $adfree->user_id?>" class="pull-right btn btn-small btn-success">ดูสินค้าอื่นๆของ <?php echo $adfree->user->username?></a></td>
            </tr>
        </table>
        </div>
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
                        <h4><?php echo $adfree->title?></h4>
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
		<a href="adfrees/member/<?php echo $adfree->user_id?>" class="pull-right btn btn-small btn-success">ดูสินค้าอื่นๆของ <?php echo $adfree->user->username?></a>
	</div>
</div>