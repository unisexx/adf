<?php foreach($contents as $content):?>
    <li><a href="contents/view/articles/<?php echo $content->id?>"><?php echo $content->title?></a></li>
<?php endforeach;?>
