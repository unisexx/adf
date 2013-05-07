$(document).ready(function(){
	$('#amphur_id').chainedSelect({parent: '#province_id',url: 'ajax/get_amphur',value: 'id',label: 'text'});
	// $('#district_id').chainedSelect({parent: '#amphur_id',url: 'location/ajax_district',value: 'id',label: 'text'});
       
    // $("select[name=province_id]").on("change",function(){
        // $.post('home/get_amphur',{
                // 'province_id' : $(this).val()
            // },function(data){
                // $("#amphur").html(data);
            // });
    // });
    
    $('select[name=adf_sub_category_id]').chainedSelect({parent: 'select[name=adf_category_id]',url: 'ajax/get_adf_sub_categories',value: 'id',label: 'text'});
    
    // $("select[name=adf_category_id]").on("change",function(){
        // $.post('home/get_adf_sub_category',{
                // 'id' : $(this).val()
            // },function(data){
                // $(".sub_category").html(data);
            // });
    // });
    
    $('li.select-icon').click(function(){
    	var icon = $(this).find('i').attr('class');
    	$('#iconInput').val(icon);
    });
    
    $('li.select-category').click(function(){
    	var category = $(this).find('input[type="hidden"]').val();
    	$('#categoryInput').val(category);
    });
    
    $("form").validate({
    rules: 
    {
        username: 
        { 
            required: true
        },
        display: 
        { 
            required: true
        },
        email: 
        { 
            required: true,
            email: true
            //remote: "users/check_email"
        },
        password: 
        {
            required: true,
            minlength: 4
        },
        password_2:
        {
            equalTo: "#password"
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
            required: "กรุณากรอกชื่อล็อกอิน"
        },
        display: 
        { 
            required: "กรุณากรอกชื่อ นามสกุล"
        },
        email: 
        { 
            required: "กรุณากรอกอีเมล์",
            email: "กรุณากรอกอีเมล์ให้ถูกต้อง"
            //remote: "อีเมล์นี้ไม่สามารถใช้งานได้"
        },
        password: 
        {
            required: "กรุณากรอกรหัสผ่าน",
            minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร"
        },
        password_2:
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
});