<ul class="breadcrumb">
  <li><a href="home">หน้าแรก</a> <span class="divider">/</span></li>
  <li class="active">ลืมรหัสผ่าน</li>
</ul>

<h1>ลืมรหัสผ่าน</h1>
<br>

<div class="row">
    <div class="span8">
        <form class="form-horizontal" method="post" action="users/forget_pass_save">
            <div class="control-group">
                <label class="control-label" for="inputEmail">อีเมล์</label>
                <div class="controls">
                  <input type="text" name="email" id="inputEmail" placeholder="อีเมล์">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputCaptcha">รหัสลับ</label>
                <div class="controls">
                  <img src="users/captcha" /><Br>
                  <input type="text" name="captcha" id="inputCaptcha" placeholder="รหัสลับ">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn btn-small btn-info">ลืมรหัสผ่าน</button>
                </div>
            </div>
        </form>
    </div>
</div>