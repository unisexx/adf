<?php foreach($categories as $category):?>
    <div class="item<?php echo $category->icon == "icon-shopping-cart" ? ' active' : '';?>"><div><i class="<?php echo $category->icon?>"></i></div></div>
<?php endforeach;?>
