<?php include("_tabmenu.php")?>
<div class="alert alert-info">
    <i class="icon-info-sign"></i> ข้อมูลการติดต่อจะแสดงในทุกการประกาศของคุณ เพื่อความสะดวกในการติดต่อจากบุคคลอื่นกรุณากรอกข้อมูลตามความเป็นจริงให้ครบถ้วน
</div>

<form class="form-horizontal validate" method="post" action="myaccounts/profile_save">
  <div class="control-group">
    <label class="control-label" for="name">ชื่อ - นามสกุล</label>
    <div class="controls">
      <input id="name" class="span5" type="text" name="name" value="<?php echo $user->name?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="address">ที่อยู่</label>
    <div class="controls">
      <textarea id="address" class="span5" name="address" rows="3"><?php echo $user->address?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="province">จังหวัด</label>
    <div class="controls">
      <?php echo form_dropdown('province_id',get_option('id','name','provinces'),$user->province_id,'class="span5"','--- เลือกจังหวัด ---') ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="province" class="span5">อำเภอ</label>
    <div id="amphur" class="controls">
       <?php
            if($user->amphur_id){
                echo form_dropdown('amphur_id',get_option('id','amphur_name','amphures where province_id ='.$user->province_id),$user->amphur_id,'class="span5"','--- เลือกอำเภอ ---');
            }
       ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="phone">เบอร์โทรศัพท์</label>
    <div class="controls">
      <input type="text" id="phone" class="span5" name="phone" value="<?php echo $user->phone?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="email">อีเมล์</label>
    <div class="controls">
      <input type="text" id="email" class="span5" name="email" value="<?php echo $user->email?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="facebook" >facebook</label>
    <div class="controls">
      <input type="text" id="facebook" class="span5" name="facebook" value="<?php echo $user->facebook?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="twitter">twitter</label>
    <div class="controls">
      <input type="text" id="twitter" class="span5" name="twitter" value="<?php echo $user->twitter?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="google">google+</label>
    <div class="controls">
      <input type="text" id="google" class="span5" name="googleplus" value="<?php echo $user->googleplus?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="other">ช่องทางการติดต่ออื่นๆ</label>
    <div class="controls">
      <textarea id="other" rows="3" class="span5" name="other"><?php echo $user->other?></textarea>
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
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>
