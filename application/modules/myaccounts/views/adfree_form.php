<?php include("_tabmenu.php")?>
<div class="alert alert-info">
    <i class="icon-info-sign"></i> การอัพเดทประกาศจะทำให้ประกาศของคุณถูกดันขึ้นมาอยู่ด้านบนสุด ดังนั้นควรอัพเดทประกาศของคุณอยู่สม่ำเสมอ
</div>

<form id="notice" class="form-horizontal validate" method="post" action="myaccounts/adfree_save/<?php echo $adfree->id?>">
    <div class="control-group">
        <label class="control-label" for="name">ความต้องการ <span class='txtred'>*</span></label>
        <div class="controls">
            <?php echo form_dropdown('adf_want_id',get_option('id','title','adf_wants'),$adfree->adf_want_id,'','--- เลือกความต้องการ ---') ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="name">สภาพสินค้า <span class='txtred'>*</span></label>
        <div class="controls">
            <?php echo form_dropdown('adf_type_id',get_option('id','title','adf_types'),$adfree->adf_type_id,'','--- เลือกสภาพสินค้า ---') ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="name">หมวดหมู่ประกาศหลัก <span class='txtred'>*</span></label>
        <div class="controls">
            <?php echo form_dropdown('adf_category_id',get_option('id','title','adf_categories'),$adfree->adf_category_id,'','--- เลือกหมวดหมู่ประกาศหลัก ---') ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="name">หมวดหมู่ย่อย <span class='txtred'>*</span></label>
        <div class="controls sub_category">
            <?php if($adfree->adf_sub_category_id):?>
            <?php echo form_dropdown('adf_sub_category_id',get_option('id','title','adf_sub_categories where adf_category_id = '.$adfree->adf_category_id),$adfree->adf_sub_category_id,'','--- เลือกหมวดหมู่ประกาศย่อย ---') ?>
            <?php endif;?>
        </div>
    </div>
  <div class="control-group">
    <label class="control-label" for="name">หัวข้อ <span class='txtred'>*</span></label>
    <div class="controls">
      <input type="text" id="name" name="title" class="span5" value="<?php echo $adfree->title?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="detail">รายละเอียดประกาศ</label>
    <div class="controls">
      <?php //echo uppic_mce();?>
      <textarea id="detail" name="detail" cols="20" class="editor[pm]"><?php echo $adfree->detail?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="price">ราคา</label>
    <div class="controls">
      <input type="text" id="price" name="price" class="span2" value="<?php echo $adfree->price?>"> บาท
    </div>
  </div>
  <!-- <div class="control-group">
    <label class="control-label" for="tag">คำค้น</label>
    <div class="controls">
      <input type="text" name="tags" placeholder="Tags" class="tagManager" value=""/>
    </div>
  </div> -->
  <div class="control-group">
    <label class="control-label" for="inputCaptcha">อัพโหลดรูป</label>
    <div class="controls">
        <?php if($adfree->id):?>
        <?php foreach($attachs as $row):?>
            <div class="uppic-blk" style=margin-bottom:5px;>
                <input type="hidden" name="attach_id[]" value="<?=$row->id?>">
                <img src="<?php echo $row->thumb?>" width=50> 
                <input class="span5"  type="text" name=url[] value="<?php echo $row->url?>"> 
                <input type="hidden" name="thumb[]" value="<?php echo $row->thumb?>"> 
                <input class="btn btn-small del-uppic" type="button" name="deluppic" value="ลบ">
            </div>
        <?php endforeach;?>
        <?php endif;?>
        <?php echo uppic_form();?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputCaptcha">รหัสลับ</label>
    <div class="controls">
      <img src="users/captcha" /><Br>
      <input type="text" name="captcha" class="input-small" id="inputCaptcha" placeholder="รหัสลับ">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-primary" value="บันทึก">
      <a href="myaccounts/notice"><div class="btn">ย้อนกลับ</div></a>
    </div>
  </div>
</form>