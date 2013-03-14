<div class="row">
    <div class="span8">
        <h1><?php echo $adfree->title?></h1>
        <?php
            $attach = new Attach();
            $attach->where("module = 'adfrees' and content_id = ".$adfree->id)->order_by('id','asc')->get(1);
        ?>
        <div>
            <img class="img-polaroid" src="<?php echo $attach->url?>">
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