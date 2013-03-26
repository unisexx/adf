<footer class="footer">
<div class="container">
    <div class="row">
        <div class="span3">
            <div class="widget">
                <h4>เกี่ยวกับเรา</h4>
                <address>
                <strong>Adfree, Inc.</strong><br>
                 445 Mypark Ave, Suite 800<br>
                 Jakarta, Indonesia 14210<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890 </address>
                <address>
                <strong>ติดต่อเรา</strong><br>
                <a href="mailto:#">hello@websitename.com</a>
                </address>
            </div>
        </div>
        <div class="span3">
            <div class="widget">
                <h4>บทความ</h4>
                <ul class="nav nav-list regular">
                    <?php echo modules::run('contents/inc_footer_articles'); ?>
                </ul>
            </div>
        </div>
        <div class="span3">
            <div class="widget">
                <h4>ลิ้งค์เพื่อนบ้าน</h4>
                <ul class="nav nav-list regular">
                    <?php echo modules::run('contents/inc_footer_weblinks'); ?>
                </ul>
            </div>
        </div>
        <div class="span3">
            <div class="widget">
                <h4>ติดตาม Adfree ได้ที่</h4>
                <form class="form-horizontal" action="#" method="post">
                    <fieldset>
                        <p>
                             ติดตามข่าวสารอัพเดท หรือประกาศต่างๆของทางเว็บไซต์ง่ายๆผ่านทางอีเมล์ของท่านเอง
                        </p>
                        <div class="input-prepend input-append">
                            <input class="span2" id="appendedPrependedInput" type="text" placeholder="อีเมล์">
                            <button class="btn btn-inverse" type="submit">สมัคร!</button>
                        </div>
                    </fieldset>
                </form>
                <ul class="social_small">
                    <li class="facebook first"><a href="#" title="Facebook">Facebook</a></li>
                    <li class="twitt"><a href="#" title="Twitter">Twitter</a></li>
                    <li class="googleplus"><a href="#" title="google plus">Google plus</a></li>
                    <li class="flickr"><a href="#" title="flickr">Flickr</a></li>
                    <li class="dribbble"><a href="#" title="Dribbble">Dribbble</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="verybottom">
    <div class="container">
        <div class="row">
            <div class="span6">
                <p>
                    © Adfree 2013 - All right reserved
                </p>
            </div>
            <div class="span6">
                <p class="pull-right">
                    Designed by <a href="http://iweb-studio.com">iWebStudio</a>
                </p>
            </div>
        </div>
    </div>
</div>
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
        <a class="btn" data-dismiss="modal">ปิด</a>
    </div>
    </form>
</div>