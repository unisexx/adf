$(document).ready(function(){
	// var pathname = $(location).attr('href');
    // var substr = pathname.split('/');
    // //alert(substr[5]);
    // if(substr[5] == 'notice_form'){
    	// $(".tagManager").tagsManager({
			// preventSubmitOnEnter: true,
			// typeahead: true,
			// blinkBGColor_1: '#FFFF9C',
			// blinkBGColor_2: '#CDE69C',
			// hiddenTagListName: 'tags',
			// maxTags: 5
		// });
    // }
	
	$('.del-uppic').click(function(){
		if(confirm('ต้องการลบรูปนี้')){
			var id = $(this).closest('.uppic-blk').find('input[name="attach_id[]"]').val();
			$.post('myaccounts/delete_uppic', {
                "id":id
            });
            $(this).closest(".uppic-blk").fadeOut();
		}
	});
	
	$('[rel=tooltip]').tooltip();
	$('[rel=popover]').popover();
	
	$("select[name=province_id]").on("change",function(){
		$.post('home/get_amphur',{
				'province_id' : $(this).val()
			},function(data){
				$("#amphur").html(data);
			});
	});
	
	$("select[name=adf_category_id]").on("change",function(){
		$.post('home/get_adf_sub_category',{
				'id' : $(this).val()
			},function(data){
				$(".sub_category").html(data);
			});
	});
	
	$("#regisform").validate({
	rules: 
	{
		username: 
		{ 
			required: true,
			minlength: 4,
            remote: "users/check_username"
		},
		email: 
		{ 
			required: true,
			email: true,
			remote: "users/check_email"
		},
		password: 
		{
			required: true,
			minlength: 4
		},
		_password:
		{
			equalTo: "#inputPass"
		},
		captcha:
		{
			required: true,
			remote: "users/check_captcha"
		}
	},
	messages:
	{
		username: 
		{ 
			required: "กรุณากรอกชื่อล็อกอิน",
			minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร",
            remote: "ยูสเซอร์เนมนี้ไม่สามารถใช้งานได้"
		},
		email: 
		{ 
			required: "กรุณากรอกอีเมล์",
			email: "กรุณากรอกอีเมล์ให้ถูกต้อง",
			remote: "อีเมล์นี้ไม่สามารถใช้งานได้"
		},
		password: 
		{
			required: "กรุณากรอกรหัสผ่าน",
			minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร"
		},
		_password:
		{
			equalTo: "กรุณากรอกรหัสผ่านให้ตรงกันทั้ง 2 ช่อง"
		},
		captcha:
		{
			required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
			remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
		}
	}
	});
	
	$("#forget").validate({
    rules: 
    {
        email: 
        { 
            required: true,
            email: true
            //remote: "users/check_email"
        },
        captcha:
        {
            required: true,
            remote: "users/check_captcha"
        }
    },
    messages:
    {
        email: 
        { 
            required: "กรุณากรอกอีเมล์",
            email: "กรุณากรอกอีเมล์ให้ถูกต้อง"
            //remote: "อีเมล์นี้ไม่สามารถใช้งานได้"
        },
        captcha:
        {
            required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
            remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
        }
    }
    });
    
    $("#repass").validate({
    rules: 
    {
        password: 
        {
            required: true,
            minlength: 4
        },
        _password:
        {
            equalTo: "#inputPass"
        },
        captcha:
        {
            required: true,
            remote: "users/check_captcha"
        }
    },
    messages:
    {
        password: 
        {
            required: "กรุณากรอกรหัสผ่าน",
            minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร"
        },
        _password:
        {
            equalTo: "กรุณากรอกรหัสผ่านให้ตรงกันทั้ง 2 ช่อง"
        },
        captcha:
        {
            required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
            remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
        }
    }
    });
    
    $("#notice").validate({
	rules: 
	{
		adf_want_id: 
		{ 
			required: true
		},
		adf_category_id: 
		{ 
			required: true
		},
		adf_sub_category_id: 
		{ 
			required: true
		},
		captcha:
		{
			required: true,
			remote: "users/check_captcha"
		}
	},
	messages:
	{
		adf_want_id: 
		{ 
			required: "กรุณาเลือกความต้องการ"
		},
		adf_category_id: 
		{ 
			required: "กรุณาเลือกหมวดหมู่ประกาศหลัก"
		},
		adf_sub_category_id: 
		{ 
			required: "กรุณาเลือกหมวดหมู่ย่อย"
		},
		captcha:
		{
			required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
			remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
		}
	}
	});
    
    tinyMCE.init({
		mode : "textareas",
	    editor_selector : "editor[pm]",
		relative_urls : false,
		// General options
		theme : "advanced",
		skin : "cirkuit",
		plugins : "pdw,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,paste,contextmenu,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
		
		//file_browser_callback: 'openKCFinder',
		init_instance_callback : "fixTinyMCETabIssue",
		
		// Theme options
		theme_advanced_buttons1 : "pdw_toggle,fontsizeselect,forecolor,|,backcolor,|,emotions,image,media,bold,italic,strikethrough,|,bullist,numlist,|,justifyleft,justifycenter,justifyright,|,link,unlink,|,spellchecker", 
	    theme_advanced_buttons2 : "formatselect,code,paste,pastetext,pasteword,removeformat,|,backcolor,|,underline,justifyfull,sup,|,outdent,indent,|,hr,charmap,|,media,|,search,replace,|,fullscreen,|,undo,redo", 
	    theme_advanced_buttons3 : "tablecontrols,|,visualaid,template,pagebreak,preview,emotions", 
		theme_advanced_toolbar_location : "top", 
	    theme_advanced_toolbar_align : "left", 
	    theme_advanced_statusbar_location : "bottom", 
	    theme_advanced_resizing : true, 
	 	height : "300", 
	    width: "300", 
		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",
		accessibility_warnings : false,
		pdw_toggle_on : 1,
	    pdw_toggle_toolbars : "2,3",            
		force_br_newlines : true,
		force_p_newlines : false
	    //forced_root_block : '' // Needed for 3.x
	});
	
	
	function fixTinyMCETabIssue(inst) {
	    inst.onKeyDown.add(function(inst, e) {
	        // Firefox uses the e.which event for keypress
	        // While IE and others use e.keyCode, so we look for both
	        if (e.keyCode) code = e.keyCode;
	        else if (e.which) code = e.which;
	        if(code == 9 && !e.altKey && !e.ctrlKey) {
	            // toggle between Indent and Outdent command, depending on if SHIFT is pressed
	            if (e.shiftKey) inst.execCommand('Outdent');
	            else inst.execCommand("mceInsertContent", false, "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
	            // prevent tab key from leaving editor in some browsers
	            if(e.preventDefault) {
	                e.preventDefault();
	            }
	            return false;
	        }
	    });
	}
	
	function openKCFinder(field_name, url, type, win){
	    tinyMCE.activeEditor.windowManager.open({
	        file: 'media/kcfinder/browse.php?opener=tinymce&type=' + type+ '&dir=' + type + '/public',
	        title: 'File Manager',
	        width: 800,
	        height: 600,
	        resizable: "yes",
	        inline: true,
	        close_previous: "no",
	        popup_css: false
	    }, {
	        window: win,
	        input: field_name
	    });
	    return false;
	}
	
	function openKCFinderImage(field,width,height) {
	    window.KCFinder = {
	        callBack: function(url) {
	            window.KCFinder = null;
				$('#'+field+'_img').html('<img src="' + url + '" width="'+width+'" height="'+height+'" />');
				$('[name='+field+']').val(url);
	        }
	    };
	    window.open('media/kcfinder/browse.php?type=image&dir=images/public', 'kcfinder_textbox',
	        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
	        'resizable=1, scrollbars=0, width=800, height=600'
	    );
	}
	
	function openKCFinderFile(field) {
	    window.KCFinder = {
	        callBack: function(url) {
	            window.KCFinder = null;
				$('#'+field+'_file').html(url);
				$('[name='+field+']').val(url);
	        }
	    };
	    window.open('media/kcfinder/browse.php?type=file&dir=field/public', 'kcfinder_textbox',
	        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
	        'resizable=1, scrollbars=0, width=800, height=600'
	    );
	}
	
	function removeImage(field){
		$('#'+field+'_img').html('');
		$('[name='+field+']').val('');
	}
	
	function removeFile(field){
		$('#'+field+'_file').html('');
		$('[name='+field+']').val('');
	}

});
