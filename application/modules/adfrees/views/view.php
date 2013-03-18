<div class="row">
    <div class="span8">
        <ul class="breadcrumb">
            <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
            <li><a href="#"><?php echo $adfree->adf_category->title?></a> <span class="divider">/</span></li>
            <li><a href="#"><?php echo $adfree->adf_sub_category->title?></a> <span class="divider">/</span></li>
            <li class="active"><?php echo $adfree->title?></li>
        </ul>

        <h1><?php echo $adfree->title?></h1>
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
        <table class="table">
            <tr>
                <th>ชื่อ</th>
                <td><?php echo $adfree->user->username?></td>
            </tr>
            <tr>
                <th>ที่อยู่</th>
                <td><?php echo $adfree->user->address?></td>
            </tr>
            <tr>
                <th>เบอร์โทรศัพท์</th>
                <td><?php echo $adfree->user->phone?></td>
            </tr>
            <tr>
                <th>อีเมล์</th>
                <td><?php echo $adfree->user->email?></td>
            </tr>
            <tr>
                <th>facebook</th>
                <td><?php echo $adfree->user->facebook?></td>
            </tr>
            <tr>
                <th>twitter</th>
                <td><?php echo $adfree->user->twitter?></td>
            </tr>
            <tr>
                <th>google+</th>
                <td><?php echo $adfree->user->googleplus?></td>
            </tr>
            <tr>
                <th>other</th>
                <td><?php echo $adfree->user->other?></td>
            </tr>
        </table>
    </div>
    <div class="span8">
		<h3>ประกาศอื่นๆของ <?php echo $adfree->user->username?></h3>
		<div class="row-fluid">
            <ul class="thumbnails">
            <?php foreach($adfrees as $adfree):?>
        	<li class="span3">
				<div class="thumbnail">
					<img data-src="holder.js/300x200" alt="300x200" src="http://placehold.it/300x300">
					<div class="caption">
						<h6><a href=""><?php echo $adfree->title?></a></h6>
						<div class="btn btn-mini btn-primary pull-right"><?php echo ($adfree->price)?$adfree->price.' บาท':'ไม่ระบุราคา'; ?></div>
						<br clear="all">
					</div>
				</div>
			</li>
            <?php endforeach;?>
			</ul>
		</div>
		
	</div>
</div>