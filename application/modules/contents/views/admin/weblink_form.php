<ul class="breadcrumb mywizard">
  <li><a href="contents/admin/contents/index/<?=$type?>"><?=$type_name?></a></li>
  <li class="active">ฟอร์ม</li>
</ul>

<div class="page-header">
    <h1><?=$type_name?></h1>
</div>    
    
<form action="contents/admin/contents/save/<?=$type?>/<?php echo $content->id ?>" method="post" enctype="multipart/form-data" >
<table class="form">
	<!-- <tr><th></th><td><?php if($content->image != ""):?><?php echo thumb("uploads/content/".$content->image,112,81,1);?><?php endif;?></td></tr>
	<tr><th>รูปภาพ :</th><td><input type="file" name="image" /></td></tr> -->
	<tr>
		<th>หัวข้อ :</th>
		<td>
			<input type="text" name="title" value="<?=$content->title?>" class="input-xlarge" />
		</td>
	</tr>
	<tr><th>ลิ้งไปเว็บไซต์ :</th><td><input class="input-xlarge" type="text" name="url" value="<?=$content->url?>"/></td></tr>
	<tr><th></th><td><input class="btn" type="submit" value="บันทึก" /> <?=form_back()?></td></tr>
</table>
<?php echo form_referer() ?>
</form>