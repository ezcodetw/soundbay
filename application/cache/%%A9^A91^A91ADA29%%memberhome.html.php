<?php /* Smarty version 2.6.18, created on 2012-07-03 03:36:57
         compiled from member/memberhome.html */ ?>
﻿<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/include_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body class="portfolio portfolio-single">

<!-- frame container -->
<div id="frame-container">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/include_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- #PageTitle-section -->
<div id="pageTitle-section">
	<div id="pageTitle-container" class="wrapper">
		<span id="page-title"><img src="images/portfolio-title-icon.png" alt="" width="16" height="16" class="page-title-icon">Portfolio</span>
		<ul id="breadcrumbs">
			<li><a href="#">首頁</a></li>
			<li><a href="#">會員首頁</a></li>
		</ul>
	</div>
</div>
<!-- end #PageTitle-section -->

<!-- main-content -->
<div id="main-content" class="wrapper group">
	<div id="portfolio-single-section" class="group">
		<img src="<?php echo $this->_tpl_vars['THISHOST']; ?>
css/images/portfolio-image-1.jpg" alt="" class="portfolio-single-image"><!---->
		<div id="portfolio-description" class="section">		
			<div class="section-header group">
				<h1>Hello</h1>
				<div class="sub-section-header">
					<span><a href="javascript:void(0)">Lisa</a></span><!-- 這裡放用戶帳號-->
				</div>
			<div class="arrows-pagination">
				<ul>
					<li class="prev no-items"><a href="javascript:void(0)"></a></li>
					<li class="next"><a href="javascript:void(0)"></a></li>
				</ul>
			</div>
			</div>
			
			<!--<span class="item-author">歌曲介紹</span>-->
			<ul id="portfolio-extra-info">
				<li><strong>帳號: </strong>aaaa@aa.aa</li>
				<li><strong>密碼: </strong>修改密碼</li>
				<li><strong>所屬組織: </strong> aaa </li>
			</ul>
			
		</div>
	</div>
</div>
<!-- end main-content -->

<div class="separator-line"></div>

<!-- portfolio-snippets-section -->
<div id="portfolio-snippets-section" class="wrapper section">
	<div class="section-header group">
		<h3>Other works (h3) </h3>
		<div class="sub-section-header">
			<span>Don’t hesitate and check em’ out</span>
		</div>
	</div>
	<div class="demo">

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Nunc tincidunt</a></li>
		<li><a href="#tabs-2">Proin dolor</a></li>
		<li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>
	<div id="tabs-1">
		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2">
		<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>
</div>

</div><!-- End demo -->

</div>
<!-- end portfolio-snippets-section -->

<div class="separator-line"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/include_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
</div>
<!-- end frame container -->
</body>

</html>