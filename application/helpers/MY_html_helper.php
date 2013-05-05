<?php 

if(!function_exists('cycle'))
{
	function cycle()
	{
		static $i;	
		
		if (func_num_args() == 0)
		{
			$args = array('even','odd');
		}
		else
		{
			$args = func_get_args();
		}
		return 'class="'.$args[($i++ % count($args))].'"';
	}
}

if(!function_exists('menu_active'))
{
    function menu_active($module,$controller = FALSE,$method = FALSE,$class='active')
    {
        $CI =& get_instance();
        if($controller)
        {
            return ($CI->router->fetch_module() == $module && $CI->router->fetch_class() == $controller) ? 'class='.$class : '';    
        }
        elseif($method){
            return ($CI->router->fetch_module() == $module && $CI->router->fetch_method() == $method) ? 'class='.$class : '';  
        }
        else
        {
            return ($CI->router->fetch_module() == $module) ? 'class='.$class : ''; 
        }
    }
}

if(!function_exists('page_active'))
{
	function page_active($page,$uri=4,$class='active')
	{
		$CI =& get_instance();
		return ($CI->uri->segment($uri)==$page) ? 'class='.$class : '';
	}
}

if(!function_exists('option_publish'))
{
	function option_publish()
	{
		return array('on' => 'ON', 'off' => 'OFF');
	}
}

if(!function_exists('get_option'))
{
	function get_option($value,$text,$table,$condition = NULL,$lang = NULL)
	{
		$CI =& get_instance();
		$query = $CI->db->query("select * from $table $condition");
		foreach($query->result() as $item) $option[$item->{$value}] = lang_decode($item->{$text},$lang);
		return $option;
	}
}

function fix_file(&$files)
{
    $names = array( 'name' => 1, 'type' => 1, 'tmp_name' => 1, 'error' => 1, 'size' => 1);

    foreach ($files as $key => $part) {
        // only deal with valid keys and multiple files
        $key = (string) $key;
        if (isset($names[$key]) && is_array($part)) {
            foreach ($part as $position => $value) {
                $files[$position][$key] = $value;
            }
            // remove old key reference
            unset($files[$key]);
        }
    }
}

function thumb($imgUrl,$width,$height,$zoom_and_crop,$param = NULL){
	if(strpos($imgUrl, "http://") !== false){
		return "<img ".$param." src=".$imgUrl." width=".$width." height=".$height.">";
	}else{
		return "<img ".$param." src=".site_url("media/timthumb/timthumb.php?src=".site_url($imgUrl)."&zc=".$zoom_and_crop."&w=".$width."&h=".$height)." width=".$width." height=".$height.">";
	}
}

if(!function_exists('avatar'))
{
    function avatar($img=FALSE,$size = NULL)
    {
        return ($img)?'uploads/users/'.$size.$img:'media/images/webboard/noavatar.gif';
    }
}

function webboard_group($post,$type){
    $CI =& get_instance();
    $webboard_post_level = new Webboard_post_level();
    $webboard_post_level->where('post <',$post)->order_by('post','desc')->limit(1)->get();
    if($webboard_post_level->exists())
    {
        if($type == "name")
        {
            return $webboard_post_level->name;
        }
        else
        {
            return $webboard_post_level->image;
        }
    }
    else
    {
        $webboard_post_level->get_by_name('Starter');
        if($type == "name")
        {
            return $webboard_post_level->name;
        }
        else
        {
            return $webboard_post_level->image;
        }
    }
    
}

function stripUploadString($uploadString){
	$fileName = explode("/", $uploadString);
	$last_key = key(array_slice($fileName, -1, 1, TRUE));
	return $fileName[$last_key];
}

function YoutubeIframe2Thumb($iframeCode,$width,$height){
  $regexstr = '~(?:(?:<iframe [^>]*src=")?|(?:(?:<object .*>)?(?:<param .*</param>)*(?:<embed [^>]*src=")?)?)?(?:https?:\/\/(?:[\w]+\.)*(?:youtu\.be/| youtube\.com| youtube-nocookie\.com)(?:\S*[^\w\-\s])?([\w\-]{11})[^\s]*)"?(?:[^>]*>)?(?:</iframe>|</embed></object>)?~ix';
  $thumb = '<img src="http://img.youtube.com/vi/$1/0.jpg" width="'.$width.'" height="'.$height.'"><input type="hidden" name="cover_pic[]" value="http://img.youtube.com/vi/$1/0.jpg">';
  return preg_replace($regexstr, $thumb, $iframeCode);
}

function remove_dir($dir) 
{ 
	if(is_dir($dir)) 
	{ 
		$dir = (substr($dir, -1) != "/")? $dir."/":$dir; $openDir = opendir($dir); 
		while($file = readdir($openDir)) 
		{ 
			if(!in_array($file, array(".", ".."))) 
			{ 
				if(!is_dir($dir.$file)) 
				{ 
					@unlink($dir.$file); 
				} 
				else 
				{ 
				remove_dir($dir.$file); 
				} 
			} 
		} 
		closedir($openDir); @rmdir($dir); 
	} 
} 

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyz123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function addThis(){
    return '<div id="addthis-wrapper"><div class="addthis">
<iframe src="https://www.facebook.com/plugins/like.php?app_id=136698876474938&href=http://www.adfree.in.th'.$_SERVER['PATH_INFO'].'&send=true&layout=button_count&width=90&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
<a class="facebook-sharer" href="https://www.facebook.com/sharer/sharer.php?u=http://www.adfree.in.th'.$_SERVER['PATH_INFO'].'" title="Share" target="_blank"><img width="60px" height="20px" src="http://c.s1sf.com/vi/0/di/fb_share_button.png" alt="Facebook Share Button" style="vertical-align: top; margin-right:8px;"></a>
<g:plusone size="medium"></g:plusone>
<a href="http://www.adfree.in.th'.$_SERVER['PATH_INFO'].'" class="twitter-share-button" data-url="http://www.adfree.in.th'.$_SERVER['PATH_INFO'].'" data-via="your_screen_name" data-lang="en" data-related="anywhereTheJavascriptAPI">Tweet</a>
</div></div>';
}

?>