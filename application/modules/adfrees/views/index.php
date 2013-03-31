<form class="form-inline well" method="get" action="adfrees">
    <?php // echo form_dropdown('adf_want_id',get_option('id','title','adf_wants'),@$_GET['adf_want_id'],'','--- ความต้องการ ---') ?>
    <?php //echo form_dropdown('adf_category_slug',get_option('slug','title','adf_categories'),@$category_slug,'','--- หมวดหมู่ประกาศหลัก ---') ?>
    <?php //echo form_dropdown('adf_sub_category_slug',get_option('slug','title','adf_sub_categories'),@$sub_category_slug,'','--- หมวดหมู่ประกาศย่อย ---') ?>
    <!-- <select>
        <?php foreach($categories as $category):?>
            <option class="dd-category" value="<?php echo $category->slug?>"><?php echo $category->title?></option>
                <?php foreach($category->adf_sub_category->order_by('id','asc')->get() as $sub_category):?>
                    <option class="dd-sub-category" value="<?php echo $sub_category->slug?>"><?php echo $sub_category->title?></option>
                <?php endforeach;?>
        <?php endforeach;?>
    </select> -->
    
    <div class="input-append">
      <input class="input-medium" id="categoryInput" type="text" name="category" placeholder="หมวดหมู่" value="<?php echo @$_GET['category']?>">
      <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">เลือก <span class="caret"></span></button>
        <ul class="dropdown-menu" style="max-height: 350px;overflow: auto;left: -163px;
width: 229px;">
          <?php foreach($categories as $category):?>
              <li class="dd-category select-category"><a><i class="<?php echo $category->icon?>"></i> <?php echo $category->title?><input type="hidden" value="<?php echo $category->slug?>"></a></li>
              <?php foreach($category->adf_sub_category->order_by('id','asc')->get() as $sub_category):?>
                    <li class="dd-subcategory select-category"><a><i class="icon-angle-right"></i> <?php echo $sub_category->title?><input type="hidden" value="<?php echo $sub_category->slug?>"></a></li>
                <?php endforeach;?>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
    
    <?php echo form_dropdown('province_id',get_option('id','name','provinces'),@$_GET['province_id'],'','--- ทุกจังหวัด ---') ?>
    <input type="text" name="title" placeholder="คำค้นหา" value="<?php echo @$_GET['title']?>">
    <input type="submit" class="btn" value="ค้นหา">
</form>

<table class="table table-hover">
    <tbody>
        <?php foreach($adfrees as $key=>$adfree):?>
            <tr>
                <td class="middle">
                    <div><?php echo mysql_to_th($adfree->created)?></div>
                </td>
                <td>
                    <a href="adfrees/view/<?php echo $adfree->id?>">
                    <?php if($adfree->image):?>
                        <img src="<?php echo $adfree->image?>" width="90">
                    <?php else:?>
                        <img data-src="holder.js/90x60" alt="90x60" src="http://placehold.it/90x60">
                    <?php endif;?>
                    </a>
                </td>
                <td>
                    <a href="adfrees/view/<?php echo $adfree->id?>"><strong><?php echo $adfree->title?></strong></a>
                    <div class="muted"><?php echo $adfree->adf_category->title?> » <?php echo $adfree->adf_sub_category->title?></div>
                </td>
                <td>
                    <?php if($adfree->price):?>
                        <strong><?php echo $adfree->price?> บาท</strong>
                    <?php else:?>
                        <strong>ไม่ระบุราคา</strong>
                    <?php endif;?>
                </td>
                <td class="muted">
                    <div><?php echo $adfree->user->province->name?></div>
                    <div><?php echo $adfree->user->amphur->amphur_name?></div>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
