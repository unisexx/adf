<div class="row">
    <div class="span8">
        <h1><?php echo $adfree->title?></h1>
        <div class="loading-blk"><img class="loading" src="media/images/ajax-loader.gif"></div>
        <div class="wraptocenter"><span></span>
            <img src="<?php echo $attach->url?>" alt="<?php echo $adfree->title?>"></div>
        <div class="row thumbrow">
        <?php foreach($attachs as $attach):?>
            <div class="span1">
                <input type="hidden" name="thumbnail_id" value="<?php echo $attach->id?>">
                <img class="img-polaroid thumbnail" src="<?php echo $attach->url?>">
            </div>
        <?php endforeach;?>
        </div>
        <hr>
        <div>
            <h2>รายละเอียดสินค้า</h2>
            <div><?php echo $adfree->detail?></div>
        </div>
        <hr>
        <div>
            <?php echo $adfree->user->username?>
        </div>
    </div>
    
    <div class="span4">
        <div class="btn btn-xlarge btn-primary">
            <?php echo ($adfree->price)?$adfree->price.' บาท':'ไม่ระบุ'; ?>
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
        </table>
    </div>
</div>