<?php include("_tabmenu.php")?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>ความต้องการ</th>
            <th>หัวข้อประกาศ</th>
            <th>หมวดหมู่</th>
            <th>หมวดหมู่ย่อย</th>
            <th><a href="myaccounts/notice_form"><div class="btn btn-mini btn-primary">เพิ่มรายการ</div></a></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($adfrees as $key=>$adfree):?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $adfree->adf_want->title?></td>
                <td><?php echo $adfree->title?></td>
                <td><?php echo $adfree->adf_category->title?></td>
                <td><?php echo $adfree->adf_sub_category->title?></td>
                <td>
                    <a href="adfrees/view/<?php echo $adfree->id?>" target="_blank"><div class="btn btn-mini btn-success">วิว</div>
                    <a href="myaccounts/notice_form/<?php echo $adfree->id?>"><div class="btn btn-mini btn-info">แก้ไข</div></a>
                    <a href=""><div class="btn btn-mini btn-danger">ลบ</div></a>
                </td>
            </tr>
        <?php endforeach;?>
        
    </tbody>
</table>