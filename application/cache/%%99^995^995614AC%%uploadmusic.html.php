<?php /* Smarty version 2.6.18, created on 2012-07-01 10:13:00
         compiled from music/uploadmusic.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/include_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body class="contacts">


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
		<span id="page-title"><img src="images/contacts-title-icon.png" alt="" width="16" height="16" class="page-title-icon">Contact<span>Us</span></span>
		<ul id="breadcrumbs">
			<li><a href="#">會員首頁</a></li>
			<li><a href="#">上傳音樂</a></li>
		</ul>
	</div>
</div>
<!-- end #PageTitle-section -->

<!-- main-content -->
<div id="main-content" class="wrapper group">

<!-- #content -->
<div id="content" class="group section">
		<div class="section-header group">
			<h2>上傳音樂</h2>
			<div class="sub-section-header">
				<span>上傳音樂說明文字</span>
			</div>
		</div>
		<div id="contacts-content">
			<p>說明說明</p>
		</div>
		<form action="#" method="post" id="contact-form" class="form group">
			<div class="form-element input">
				<label for="input-name">歌曲名稱<span class="required-form-element">*</span></label>
				<div class="input-container"><span></span><input type="text" name="input-name" id="input-name" class="required"></div>
			</div>
			<div class="form-element input">
				<label for="input-surname">歌曲分類</label>
				<div class="input-container"><span></span><input type="text" name="input-surname" id="input-surname"></div>
			</div>
			<div class="form-element input">
				<label for="input-email">上傳圖片<span class="required-form-element">*</span>建議大小:540*499</label>
				<div class="input-container"><span></span><input type="text" name="input-email" id="input-email" class="required email"></div>
			</div>
			<div class="form-element input">
				<label for="input-subject">嵌入MV<span class="required-form-element">*</span></label>
				<div class="input-container"><span></span><input type="text" name="input-subject" id="input-subject"  class="required"></div>
			</div>
			<div class="form-element textarea">
				<label for="input-message">歌曲介紹<span class="required-form-element">*</span></label>
				<div class="input-container"><span></span><textarea name="input-message" id="input-message"  class="required"></textarea></div>
			</div>
			<div class="form-element input">
				<label for="input-email">定價<span class="required-form-element">*</span></label>
				<div class="input-container"><span></span><input type="text" name="input-email" id="input-email" class="required email"></div>
			</div>
			<div class="form-element input">
				<label for="input-subject">音樂檔案上傳<span class="required-form-element">*</span></label>
				<div class="input-container"><span></span><input type="text" name="input-subject" id="input-subject"  class="required"></div>
			</div>
			<input type="hidden" name="submitted" value="submitted">
			<input type="submit" value="Submit form" id="form-submit-button">
		</form>
</div>
<!-- end content -->

<!-- sidebar -->
<div id="sidebar">
	<div id="contact-info" class="contacts-sidebar-widget">
		<h3>這邊可以放廣告歐耶</h3>
		
	</div>
	<div id="testimonials" class="contacts-sidebar-widget">
		<h3>Testimonials</h3>
		<ul>
			<li>
			Provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
			<span class="testimonial-author">Kaspars Milbergs, iWEB</span>
			</li>
			<li>
			Provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
			<span class="testimonial-author">Kaspars Milbergs, iWEB</span>
			</li>
		</ul>
	</div>
</div>
<!-- end sidebar -->

</div>
<!-- end main-content -->

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