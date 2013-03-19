<ul class="breadcrumb mywizard">
  <li><a href="users/admin/administrators">ผู้ดูแล</a></li>
  <li class="active">ฟอร์ม</li>
</ul>

<div class="page-header">
    <h1>ผู้ดูแล</h1>
</div>

<form method="post" action="users/admin/administrators/save/<?php echo $user->id?>" id="frm">
<table class="table">
    <tr>
        <th>อีเมล์ :</th>
        <td><?php echo form_input('email',$user->email,'size="30" id="email"')?></td>
    </tr>
    <tr>
        <th>ชื่อ  นามสกุล :</th>
        <td><?php echo form_input('display',$user->display,'size="30" id="display"')?></td>
    </tr>
    <tr>
        <th>ชื่อผู้ใช้ :</th>
        <td><?php echo form_input('username',$user->username,'size="30" id="username"')?></td>
    </tr>
    <tr>
        <th>รหัสผ่าน :</th>
        <td><?php echo form_password('password','','size="30" id="password"')?></td>
    </tr>
    <tr>
        <th>ยืนยันรหัสผ่าน :</th>
        <td><?php echo form_password('password_2','','size="30" id="password_2"')?></td>
    </tr>
    <tr>
        <th>รหัสลับ</th>
        <td>
            <img src="users/captcha" /><Br>
            <input type="text" name="captcha" class="input-small" id="inputCaptcha" placeholder="รหัสลับ">
        </td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" class="btn" value="Submit"></td>
    </tr>
</table>
</form>