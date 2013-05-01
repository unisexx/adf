<li class="dropdown">
<a href="contents/view/articles/7"><i class="icon-leaf"></i> เพจ</a>
<ul class="dropdown-menu">
    <?php foreach($categories as $category):?>
        <li class="dropdown"><a href="#"><i class="icon-leaf"></i> <?php echo $category->name?></a>
            <ul class="dropdown-menu sub-menu">
                <?php foreach($category->content->order_by('id','asc')->get() as $content):?>
                    <li><a href="contents/view/articles/<?php echo $content->id?>"><i class="icon-chevron-right"></i> <?php echo $content->title?></a></li>
                <?php endforeach;?>
            </ul>
        </li>
    <?php endforeach;?>
</ul>
</li>