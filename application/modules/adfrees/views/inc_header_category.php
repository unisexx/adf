<li class="dropdown">
<a href="adfrees"><i class="icon-star"></i> หมวดหมู่</a>
<ul class="dropdown-menu">
    <?php foreach($categories as $category):?>
        <li class="dropdown"><a href="adfrees/c/<?php echo $category->slug?>"><i class="<?php echo $category->icon?>"></i> <?php echo $category->title?></a>
            <ul class="dropdown-menu sub-menu">
                <?php foreach($category->adf_sub_category->order_by('id','asc')->get() as $sub_category):?>
                    <li><a href="adfrees/s/<?php echo $sub_category->slug?>"><i class="icon-chevron-right"></i> <?php echo $sub_category->title?></a></li>
                <?php endforeach;?>
            </ul>
        </li>
    <?php endforeach;?>
</ul>
</li>