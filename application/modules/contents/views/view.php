<div class="row">
    <div class="span3">
        <div class="accordion" id="accordion2">
          <?php foreach($categories as $category):?>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?php echo $category->id?>">
                    <?php echo $category->name?>
                  </a>
                </div>
                <div id="collapse_<?php echo $category->id?>" class="accordion-body collapse <?php echo $category->id == $content->category->id ?"in":"";?>">
                  <div class="accordion-inner">
                    <ul>
                    <?php foreach($category->content->get() as $content_title):?>
                        <li><a href="contents/view/articles/<?php echo $content_title->id?>"><?php echo $content_title->title?></a></li>
                    <?php endforeach;?>
                    </ul>
                  </div>
                </div>
              </div>
          <?php endforeach;?>
         </div>
    </div>
    <div class="span9">
        <ul class="breadcrumb">
          <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
          <li class="active"><?=$content->title?></li>
        </ul>
        <h1><?php echo $content->title?></h1>
        <div><?php echo $content->detail?></div>
    </div>
</div>
