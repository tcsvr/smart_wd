<?php
/* Smarty version 3.1.28, created on 2019-04-28 00:44:44
  from "D:\phpStudy\PHPTutorial\WWW\smart_wd\template\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5cc486fc82d5c7_90649370',
  'file_dependency' => 
  array (
    'bb4167de7e04ef97130fda3fa374514163e334c3' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\smart_wd\\template\\templates\\index.html',
      1 => 1556383481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc486fc82d5c7_90649370 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\phpStudy\\PHPTutorial\\WWW\\smart_wd\\include\\smarty3.1.28\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\PHPTutorial\\WWW\\smart_wd\\include\\smarty3.1.28\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆首页</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/playImg.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<a name="Top"></a>
		<header>
			<div class="head_nav" id="head_scroll">
				<a href="index.html">
					<img src="images/logo_01.png" alt="">
				</a>
				<nav>
					<?php
$_from = $_smarty_tpl->tpl_vars['nav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
					<a href="index.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['n_name'];?>
</a>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
				</nav>
			</div>
			<div class="banner">
				<div id="con">
					<ul>
						<?php
$_from = $_smarty_tpl->tpl_vars['banner']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
						<li><img <?php if ($_smarty_tpl->tpl_vars['v']->value['b_id'] == 1) {?> id="img_one" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['_UPLOAD_']->value;
echo $_smarty_tpl->tpl_vars['v']->value['b_img'];?>
" alt=""></li>
						<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
?>
					</ul>
					<a id="prev" href="javascript:;"><img src="images/ban_prev.png" alt=""></a>
					<a id="next" href="javascript:;"><img src="images/ban_next.png" alt=""></a>
					<ol>
						<!-- <li class="oli"></li> -->
						<!-- <li></li>
						<li></li>
						<li></li> -->
					</ol>
				</div>
			</div>
		</header>
		<div class="service">
			<h1>我们的服务<br><span>Services</span></h1>
			<i></i>
			<p>我们为您提供，最精致的服务，最全面的技术</p>
			<ul id="service">
					<?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_2_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>

				<li>
					<a href="" class="ser_a">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['s_img1'];?>
" alt="">
					<br>
					<?php echo $_smarty_tpl->tpl_vars['v']->value['s_title'];?>

					</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['s_img2'];?>
" alt="">
					<br>
					<?php echo $_smarty_tpl->tpl_vars['v']->value['s_title'];?>

					</a>
				</li>
				<?php }?>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
			</ul>
		</div>
		<div class="case">
			<h1>案例展示<br><span>Cases</span></h1>
			<i></i>
			<nav>
				<?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_3_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_3_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_3_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['ca_id'] == $_smarty_tpl->tpl_vars['caid']->value) {?>
				<a href="?naid=<?php echo $_smarty_tpl->tpl_vars['navcu']->value['n_id'];?>
&caid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_id'];?>
" class="case_a"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</a>
					<?php } else { ?>
				<a href="?naid=<?php echo $_smarty_tpl->tpl_vars['navcu']->value['n_id'];?>
&caid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</a>
				<?php }?>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_local_item;
}
}
if ($__foreach_v_3_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_item;
}
?>
			</nav>
			<ul>

					<?php
$_from = $_smarty_tpl->tpl_vars['case']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_4_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_4_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['_UPLOAD_']->value;
echo $_smarty_tpl->tpl_vars['v']->value['c_img'];?>
" alt="">
						<div>
							<img src="images/look.png" alt="">
							<br>
							<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
---<?php echo $_smarty_tpl->tpl_vars['v']->value['c_title'];?>

						</div>
					</a>
				</li>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_4_saved_local_item;
}
}
if ($__foreach_v_4_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_4_saved_item;
}
?>
				<li>
					<a href="case.html">
						<img src="images/case_08.jpg" alt="">
						<p>MORE</p>
					</a>
				</li>

			</ul>
		</div>
		<div class="about">
			<h1>关于我们<br><span>About us</span></h1>
			<i></i>
			<p class="about_p1">不用担心距离, 文豆就在你身边</p>
			<p class="about_p2">
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['about']->value,75,'');?>
......</p>
			<img src="images/point.png" alt="">
			<br>
			<a href="">点击查看</a>
		</div>
		<div class="news">
			<a href=""><img id="new_more" class="new_more" src="images/icon.png" alt=""></a>
			<h2>最新资讯<br><span>News</span></h2>
			<i></i>
			<p class="new_p1">
				文豆集团，你身边的IT互联网专家
			</p>
			<ul>

				<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_5_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_5_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_5_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>


				<li>
					<div class="new_h"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['n_time'],"%m-%d");?>
 <br><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['n_time'],"%Y");?>
</span></div>
					<div class="new_p">
						<h3><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['n_title'];?>
<span>&gt;</span></a></h3>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['v']->value['n_intro'];?>

						</p>
					</div>
				</li>
				
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_5_saved_local_item;
}
}
if ($__foreach_v_5_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_5_saved_item;
}
?>


			</ul>
		</div>
		<div class="partner">
			<h4>合作伙伴</h4>
			<em>Partner</em>
			<i></i>
			<p>他们选择了文豆，我们的专业合作伙伴</p>
			<ul>
				<?php
$_from = $_smarty_tpl->tpl_vars['partner']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_6_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_6_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_6_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['p_link'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['_UPLOAD_']->value;
echo $_smarty_tpl->tpl_vars['v']->value['p_img'];?>
" alt="" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['p_title'];?>
">
					</a>
				</li>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_6_saved_local_item;
}
}
if ($__foreach_v_6_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_6_saved_item;
}
?>

			</ul>
		</div>
		<footer>
			<div class="contact">
				<h4>联系我们</h4>
				<em>Contact us</em>
				<i></i>
				<p>他们选择了文豆，我们的专业合作伙伴</p>
				<div class="con_ul">
					<div class="con_left">
						<ul>
							<li>广州总部：广州海珠区广州大道南448号财智大厦28楼</li>
							<li>深圳总部：深圳福田区福华路322号文蔚大厦4楼</li>
							<li>广州番禺分部：广州市番禺区市桥光明北路12号锦绣华庭三座404</li>
							<li>广州增城分部：广州增城区荔城花园东门32号</li>
							<li>广州大学城分部：广州大学城中七路大学时光首层</li>
						</ul>
					</div>
					<div class="con_center">
						<img class="ew" src="images/ew.png" alt="">
						<br>
						<a href=""><img src="images/icon_05.png" alt=""></a>
						<a href=""><img src="images/icon_06.png" alt=""></a>
						<a href=""><img src="images/icon_07.png" alt=""></a>
						<a href=""><img src="images/icon_08.png" alt=""></a>
					</div>
					<div class="con_right">
						<ul>
							<li>广州白云分部：广州市白云区从云路839号利都商务中心B911</li>
							<li>惠州分部：惠州市惠城区江北三新南路3号名流公馆10层05室</li>
							<li>佛山分部:佛山市南海区桂城南新一路16号首层</li>
							<li>东莞分部：东莞市莞城区汇峰中心E区1002室</li>
							<li>肇庆分部：肇庆市端州区端州五路18号大楼四楼长江教育(市人才大厦前)</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="foot">
				<p>粤ICP备12022584号-3</p>
				<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
			</div>
		</footer>
	</div>
	<aside>
		<div></div>
		<p>
			<span>020-66668888</span>
			<a href="">
				<img src="images/icon_01.png" alt="">
			</a>
		</p>
		<p>
			<span>66668888</span>
			<a href="">
				<img src="images/icon_02.png" alt="">
			</a>
		</p>
		<p>
			<span>人才招聘</span>
			<a href="">
				<img src="images/icon_03.png" alt="">
			</a>
		</p>
		<p>
			<span>回到顶部</span>
			<a href="#Top">
				<img src="images/icon_04.png" alt="">
			</a>
		</p>
	</aside>
</body>
</html>

<?php echo '<script'; ?>
>

	//more滚动
	var new_more=document.getElementById('new_more');
	//滚动条事件改变导航背景色
	var head_scroll=document.getElementById('head_scroll');

	document.onscroll=function(){
		var scroll_top=document.body.scrollTop || document.documentElement.scrollTop;
		if(scroll_top>$('#con').height()){
			head_scroll.style.background='rgba(21,24,27,1)';
		}
		if(scroll_top<$('#con').height()){
			head_scroll.style.background='rgba(21,24,27,0.3)';
		}
		if(scroll_top>$('#con').height()+503+680 && scroll_top<$('#con').height()+503+680+431){
			new_more.style.right=605+'px';
			new_more.style.transform='rotate(-720deg)';
		}else{
			new_more.style.right=0;
			new_more.style.transform='rotate(0deg)';
		}
		
	}
	
	// 侧边导航条（右边）
	var aside=document.getElementsByTagName('aside')[0];
	var p=aside.getElementsByTagName('p');
	var span=aside.getElementsByTagName('span');

	for(var i=0; i<p.length; i++){
		p[i].onmouseover=function(){
			this.className='box_bg';
		}
		p[i].onmouseout=function(){
			this.className='';
		}
	}
	$imgArr1 = <?php echo $_smarty_tpl->tpl_vars['imgArr1']->value;?>
; 
	$imgArr2 = <?php echo $_smarty_tpl->tpl_vars['imgArr2']->value;?>
;

	// 服务项目
	var service=document.getElementById('service');
	var li=service.getElementsByTagName('li');
	var img=service.getElementsByTagName('img');
	var a=service.getElementsByTagName('a');

	for(var i=0; i<li.length; i++){
		li[i].index=i;
		li[i].onmouseover=function(){

			for(var i=0; i<li.length; i++){

			//img[i].src='images/server_0'+(i+1)+'.gif';
				img[i].src=$imgArr2[i]
				a[i].className='';
			}
			img[this.index].src=$imgArr1[this.index];
			a[this.index].className="ser_a";
		}
	}
<?php echo '</script'; ?>
><?php }
}
