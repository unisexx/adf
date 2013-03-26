<div class="row">
    <div class="span3">
        <div class="accordion" id="accordion2">
          <?php foreach($categories as $key=>$category):?>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?php echo $key?>">
                    <?php echo $category->name?>
                  </a>
                </div>
                <div id="collapse_<?php echo $key?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    Anim pariatur cliche...
                  </div>
                </div>
              </div>
          <?php endforeach;?>
         </div>
    </div>
    <div class="span9">
        <ul class="breadcrumb">
          <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
          <li class="muted"><?php echo $content->category->name?> <span class="divider">/</span></li>
          <li class="active"><?=$content->title?></li>
        </ul>
        <h1><?=lang_decode($content->title)?></h1>
        <!-- <div style="text-align: center; margin:15px auto;"><img src="uploads/content/<?=$content->image?>"></div> -->
        <div><?=$content->detail?></div>
    </div>
</div>
