<?php foreach($contents as $content):?>
    <li><a href="<?php echo $content->url?>" target="_blank"><?php echo $content->title?></a></li>
<?php endforeach;?>