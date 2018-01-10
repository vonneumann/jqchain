<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>Dswjcms后台管理系统-<?php echo (C("DS_TOP_POWERED")); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="Dswjcms! X1.0" />
    <meta name="author" content="Dswjcms! Team and Tf Team" />
    <meta name="copyright" content="2013-2014 Tf Inc." />
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
	<!-- The styles -->
	<link id="bs-css" href="__PUBLIC__/bootstrap/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	
	<link href="__PUBLIC__/bootstrap/css/charisma-app.css" rel="stylesheet">
	<link href="__PUBLIC__/bootstrap/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='__PUBLIC__/bootstrap/css/fullcalendar.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='__PUBLIC__/bootstrap/css/chosen.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/uniform.default.css' rel='stylesheet'>
    <link href='__PUBLIC__/bootstrap/css/colorbox.css' rel='stylesheet'>
    <link href="__PUBLIC__/css/docs.css" rel="stylesheet">
	<link href='__PUBLIC__/bootstrap/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/jquery.noty.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/elfinder.min.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/elfinder.theme.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/opa-icons.css' rel='stylesheet'>
	<link href='__PUBLIC__/bootstrap/css/uploadify.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/fotorama.css' rel='stylesheet'>
    <link  href="__PUBLIC__/css/style.css" rel="stylesheet">
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="__PUBLIC__/bootstrap/img/favicon.ico">
</head>

<body>
<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> 更换主题 / 皮肤</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->

				<!-- 栏目切换 starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> 栏目切换</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Index/system.html"><i class="icon-blank <?php if(($Url) == "Index"): ?>icon-ok<?php endif; ?>"></i>系统配置</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Basis/linebank.html" ><i class="icon-blank <?php if(($Url) == "linebank"): ?>icon-ok<?php endif; ?>"></i>基础配置</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Site.html" ><i class="icon-blank <?php if(($Url) == "Loan"): ?>icon-ok<?php endif; ?>"></i>文章管理</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Loan/review.html" ><i class="icon-blank <?php if(($Url) == "Loan"): ?>icon-ok<?php endif; ?>"></i>贷款管理</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Instation.html" ><i class="icon-blank <?php if(($Url) == "Loan"): ?>icon-ok<?php endif; ?>"></i>站内信</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Audit/entry.html" ><i class="icon-blank <?php if(($Url) == "Loan"): ?>icon-ok<?php endif; ?>"></i>认证管理</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Fund/recharge.html" ><i class="icon-blank <?php if(($Url) == "Loan"): ?>icon-ok<?php endif; ?>"></i>资金管理</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Ganged.html" ><i class="icon-blank <?php if(($Url) == "Integral"): ?>icon-ok<?php endif; ?>"></i>联动管理</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/User.html" ><i class="icon-blank <?php if(($Url) == "Integral"): ?>icon-ok<?php endif; ?>"></i>用户管理</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Credit.html" ><i class="icon-blank "></i>征信查询</a></li>
                                                <li><a href="__APP__/TIFAWEB_DSWJCMS/Plugins/index.html" ><i class="icon-blank "></i>插件管理</a></li>
					</ul>
				</div>
				<!-- 栏目切换 ends -->
                                <!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo (session('admin_name')); ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="__APP__/TIFAWEB_DSWJCMS/Logo/loginout" >退出</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
                <!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle"  href="__APP__/TIFAWEB_DSWJCMS.html">
                    	<i class="icon-home"></i> 回到首页
					</a>
				</div>
				<!-- theme selector ends -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
<!--头部 end -->
<!--左栏 starts -->
<div class="container-fluid">
		<div class="row-fluid admin_fluid">
        	<h3>快捷导航</h3>
            <div class="row-fluid admin_index">
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Index/system.html">
                  		<span class="icon32 icon-color icon-gear"></span>
                		<p>系统设置</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Basis/linebank.html">
                  		<span class="icon32 icon-color icon-wrench"></span>
                		<p>基础配置</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Site.html">
                  		<span class="icon32 icon-color icon-book"></span>
                		<p>文章管理</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Audit/entry.html">
                  		<span class="icon32 icon-color icon-lightbulb"></span>
                		<p>认证管理</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Loan/review.html">
                  		<span class="icon32 icon-color icon-refresh"></span>
                		<p>贷款管理</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Instation.html">
                  		<span class="icon32 icon-blue icon-envelope-closed"></span>
                		<p>站内信</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Fund/recharge.html">
                  		<span class="icon32 icon-color icon-profile"></span>
                		<p>资金管理</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Ganged.html">
                  		<span class="icon32 icon-color icon-book"></span>
                		<p>联动管理</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/User.html">
                  		<span class="icon32 icon-color icon-user"></span>
                		<p>用户管理</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Credit.html">
                  		<span class="icon32 icon-color icon-web"></span>
                		<p>征信查询</p>
                    </a>
                </div>
                <div class="span1">
                	<a href="__APP__/TIFAWEB_DSWJCMS/Plugins/index.html">
                  		<span class="icon32 icon-color icon-unlink"></span>
                		<p>插件管理</p>
                    </a>
                </div>
            </div>
			<h3>待办事务</h3>
            <div  class="row-fluid admin_index">
                <div class="span1">
                    <a href="__APP__/TIFAWEB_DSWJCMS/Audit/autonym.html">
                        <span class="icon32 icon-orange icon-profile"></span>
                        <?php if(($stat["autonym"]) > "0"): ?><span class="admin_right label label-important"><?php echo ($stat["autonym"]); ?></span><?php endif; ?>
                        <p>实名认证待审核</p>
                        
                    </a>
                </div>
                <div class="span1">
                    <a href="__APP__/TIFAWEB_DSWJCMS/Loan/review.html">
                  		<span class="icon32 icon-orange icon-clock"></span>
                        <?php if(($stat["stay"]) > "0"): ?><span class="admin_right label label-important"><?php echo ($stat["stay"]); ?></span><?php endif; ?>
                		<p>申请待审核</p>
                        
                    </a>
                </div>
                <div class="span1">
                    <a href="__APP__/TIFAWEB_DSWJCMS/Loan/pending.html">
                  		<span class="icon32 icon-orange icon-clock"></span>
                        <?php if(($stat["full"]) > "0"): ?><span class="admin_right label label-important"><?php echo ($stat["full"]); ?></span><?php endif; ?>
                		<p>放款待审核</p>
                        
                    </a>
                </div>


            </div>
 
            <h3>环境切换</h3>
            <script>
			function contextSwitching(id){
				$.ajax({
					type: "POST",
					url: "__APP__/TIFAWEB_DSWJCMS/Index/contextSwitching.html",
					data:{id:id},
					success: function(msg){
						if(msg.status==1){
							alert(msg.info);
							window.location.href='__APP__/TIFAWEB_DSWJCMS/Index/index.html';
						}else{
							alert(msg.info);
						}
					}
				});
			}
			</script>
            <div class="row-fluid">
            <br/>
            <table class="table table-striped table-bordered table-condensed">
            <tbody>
                <tr>
                <td style="width:200px;">开发环境</td>
                <td style="width:200px;">
                <label class="radio"><input type="radio" name="validation" value="1" class="noty" <?php if((APP_DEBUG) == "1"): ?>checked<?php endif; ?>  onclick="contextSwitching(0)"/>测试环境</label>
                <label class="radio"><input type="radio" name="validation" value="0" class="noty" <?php if((APP_DEBUG) != "1"): ?>checked<?php endif; ?> onclick="contextSwitching(1)"/>正式环境</label>
                </td>
                <td style="width:600px;">
                测试环境下不会对模板进行缓存，更适合技术人员进行调试；正式环境下，将对模板和一些数据进行缓存处理，修改的内容有可能不会马上更新，如需要调试，请切换到测试环境，然后刷新下页面。
                </td>
              </tr>
            </tbody>
            
            </table>
            </div>

        </div>
        
<!--底部 -->

			<!-- content ends -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->

		<hr>
		<footer>

            
		</footer>
	<?php echo ($ajax_list); ?>
	</div><!--/.fluid-container-->
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="__PUBLIC__/bootstrap/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="__PUBLIC__/bootstrap/js/jquery-ui-1.8.21.custom.min.js"></script>
    <!-- bootstrap-->
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- library for cookie management -->
	<script src="__PUBLIC__/bootstrap/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='__PUBLIC__/bootstrap/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='__PUBLIC__/bootstrap/js/jquery.dataTables.min.js'></script>

	<!-- select or dropdown enhancer -->
	<script src="__PUBLIC__/bootstrap/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="__PUBLIC__/bootstrap/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="__PUBLIC__/bootstrap/js/jquery.colorbox.min.js"></script>
    <!-- editor -->
	<script src="__PUBLIC__/editor/kindeditor-min.js"></script>
	<!-- rich text editor library -->
	<script src="__PUBLIC__/bootstrap/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="__PUBLIC__/bootstrap/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="__PUBLIC__/bootstrap/js/jquery.elfinder.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/elfinder.zh_CN.js"></script>
	<!-- star rating plugin -->
	<script src="__PUBLIC__/bootstrap/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="__PUBLIC__/bootstrap/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="__PUBLIC__/bootstrap/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="__PUBLIC__/bootstrap/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="__PUBLIC__/bootstrap/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="__PUBLIC__/bootstrap/js/charisma.js"></script>
    <!-- JS验证 -->
    <script src="__PUBLIC__/jquery/Validform_v5.3.2min.js"></script>
     
<script>
<?php echo ($endjs); ?>
function changeVerify(){
    var timenow = new Date().getTime();
    document.getElementById('verifyImg').src='__APP__/Public/verify/'+timenow;
}
</script>

<script language="JavaScript">
 $(function(){
	//$(".form-horizontal").Validform();  //就这一行代码！;

	$(".form-horizontal").Validform({
		datatype:{
			"me" : /^[\u4E00-\u9FA5\uf900-\ufa2d\w]{1,}$/,
		}
	});
})
//计划任务
window.onload = Schedule();
function Schedule(){
$.post("__ROOT__/Api/Autos/timing", {id:1} );

}
</script>
</body>
</html>