<form class="form-inline well" method="get" action=""> 
    <div class="input-append">
      <input class="input-medium" id="categoryInput" type="text" name="category" placeholder="หมวดหมู่" value="<?php echo @$_GET['category']?>">
      <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">เลือก <span class="caret"></span></button>
        <ul class="dropdown-menu" style="max-height: 350px;overflow: auto;left: -163px;
width: 229px;">
			<li class="dd-category select-category"><a><i class="icon-th-large"></i> ทุกหมวด<input type="hidden" value="ทุกหมวด"></a></li>
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