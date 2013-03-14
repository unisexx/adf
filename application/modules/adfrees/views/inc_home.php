<table class="table table-hover">
    <!-- <thead>
        <tr>
            <th>#</th>
            <th>ความต้องการ</th>
            <th>หัวข้อประกาศ</th>
            <th>หมวดหมู่</th>
            <th>หมวดหมู่ย่อย</th>
            <th>ประกาศโดย</th>
        </tr>
    </thead> -->
    <tbody>
        <?php foreach($adfrees as $key=>$adfree):?>
            <tr>
                <td><?php echo mysql_to_th($adfree->created)?></td>
                <td>
                    <?php
                        $attach = new Attach();
                        $attach->where("module = 'adfrees' and content_id = ".$adfree->id)->order_by('id','asc')->get(1);
                    ?>
                    <a href="adfrees/view/<?php echo $adfree->id?>"><img src="<?php echo $attach->url?>" width="110"></a>
                </td>
                <td><?php echo $adfree->adf_want->title?></td>
                <td>
                    <a href="adfrees/view/<?php echo $adfree->id?>"><?php echo $adfree->title?></a><br>
                    <?php echo $adfree->adf_category->title?> » <?php echo $adfree->adf_sub_category->title?>
                </td>
                <td>
                    <?php if($adfree->price):?>
                        <strong><?php echo $adfree->price?> บาท</strong>
                    <?php else:?>
                        <strong>ไม่ระบุราคา</strong>
                    <?php endif;?>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<!-- <a href="adfrees"><div class="btn pull-right">ดูประกาศทั้งหมด</div></a> -->
<br clear="all">

<!-- <div class="row-fluid">
    <ul class="thumbnails">
      <?php foreach($adfrees as $key=>$adfree):?>
          <li class="span3">
            <div class="thumbnail">
              <?php
                $attach = new Attach();
                $attach->where("module = 'adfrees' and content_id = ".$adfree->id)->order_by('id','asc')->get(1);
              ?>
              <img src="<?php echo $attach->url?>">
              <div class="caption">
                <h3><?php echo $adfree->title?></h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
              </div>
            </div>
          </li>
      <?php endforeach;?>
    </ul>
  </div> -->