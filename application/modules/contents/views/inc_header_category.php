<li class="dropdown">
<a href="adfrees"><i class="icon-leaf"></i> เพจ</a>
<ul class="dropdown-menu">
    <?php foreach($categories as $category):?>
        <li class="dropdown"><a href=""><i class=""></i> <?php echo $category->name?></a></li>
    <?php endforeach;?>
</ul>
</li>