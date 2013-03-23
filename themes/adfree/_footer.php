<hr>
<footer>
	<p>&copy; Adfree 2013</p>
</footer>

<a id="footer-back-to-top" class="WhiteButton badge-back-to-top offscreen">
    <strong>Back to Top</strong>
    <span></span>
</a>

<div id="signin" class="modal hide fade">
    <form id="frm_login" class="form-horizontal" method="post" action="users/login">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>เข้าสู่ระบบ</h3>
    </div>
    <div class="modal-body">
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <h4 class="alert-heading">ช้าก่อน!</h4>
                                    ถ้าคุณยังไม่่เป็นสมาชิก... กรุณาสมัครสมาชิกก่อนจ้า!!! <a href="users/register">คลิกที่นี่</a><br>
                                    หรือ ลืมรหัสผ่าน <a href="users/forget_pass">คลิกที่นี่</a>
        </div>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="inputLogin">User name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" id="inputLogin" name="username">
                    <span class="muted">(a-Z0-9)</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" id="inputPassword" name="password">
                    <span class="muted">(a-Z0-9)</span>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <button type="submit" id="login" class="btn btn-primary">เข้าสู่ระบบ</button>
        <a href="#" class="btn" data-dismiss="modal">ปิด</a>
    </div>
    </form>
</div>