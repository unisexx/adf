<div class="row">
    <div class="span8">
        <h1><?php echo $adfree->title?></h1>
        <div class="wraptocenter"><span></span>
            <img src="<?php echo $attach->url?>" alt="<?php echo $adfree->title?>"></div>
        <div class="row thumbrow">
        <?php foreach($attachs as $attach):?>
            <div class="span1">
                <img class="img-polaroid" src="<?php echo $attach->url?>">
            </div>
        <?php endforeach;?>
        </div>
        <hr>
        <div>
            <h2>รายละเอียดสินค้า</h2>
            <div class="row">
                <div class="span1">ต้องการ<?php echo $adfree->adf_want->title?></div>
                <div class="span3">ราคา <?php echo $adfree->price?> บาท</div>
            </div>
            <div><?php echo $adfree->detail?></div>
        </div>
        <hr>
        <div>
            <?php echo $adfree->user->username?>
        </div>
    </div>
    
    <div class="span4">
        <div class="well">
            fasdf
        </div>
    </div>
</div>