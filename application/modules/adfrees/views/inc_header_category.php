<li class="dropdown primary">
<a href="adfrees"><i class="icon-star icon-white"></i> หมวดหมู่</a>
<ul class="dropdown-menu">
    <?php foreach($categories as $category):?>
        <li class="dropdown"><a href="adfrees?adf_category_id=<?php echo $category->id?>"><i class="<?php echo $category->icon?>"></i> <?php echo $category->title?></a>
            <ul class="dropdown-menu sub-menu">
                <?php foreach($category->adf_sub_category->order_by('id','asc')->get() as $sub_category):?>
                    <li><a href="adfrees?adf_category_id=<?php echo $category->id?>&adf_sub_category_id=<?php echo $sub_category->id?>"><i class="icon-chevron-right"></i> <?php echo $sub_category->title?></a></li>
                <?php endforeach;?>
            </ul>
        </li>
    <?php endforeach;?>
</ul>
</li>