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
		<div class="row-fluid">
			<!-- left menu starts -->
<div class="span2 main-menu-span">		
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">菜单</li>
            <li><a href="__APP__/TIFAWEB_DSWJCMS/Audit/entry.html"><i class="icon-th-list"></i><span class="hidden-tablet">已认证列表</span></a></li>
		    <li><a href="__APP__/TIFAWEB_DSWJCMS/Audit/autonym.html"><i class="icon icon-darkgray icon-profile"></i><span class="hidden-tablet"> 未实名认证</span></a></li>

        </ul>
    </div><!--/.well -->
</div><!--/span-->
<!-- left menu ends -->

			<div id="content" class="span10">
			<!-- content starts -->
<!--左栏 end -->
<ul class="breadcrumb">
      <li>
        <a href="__APP__/TIFAWEB_DSWJCMS.html">首页</a> <span class="divider">/</span>
      </li>
      <li class="active">实名认证</li>
</ul>
<table class="table table-striped table-bordered table-condensed datatable ">
            <thead>
              <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>公司名</th>
                <th>联系人</th>
                <th>联系电话</th>
                <th>营业执照或注册号</th>

                <th>操作</th>
              </tr>
            </thead>
            <tbody>

<?php if(is_array($audit)): $i = 0; $__LIST__ = $audit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td>
                       <?php echo ($vo["id"]); ?>
                </td>
                <td>
                       <?php echo ($vo["username"]); ?>
                </td>
                <td>
                      <?php echo ($vo["company"]); ?>
                </td>
                <td>
                      <?php echo ($vo["name"]); ?>
                </td>
                <td>
                      <?php echo ($vo["cellphone"]); ?>
                </td>

                <td>
                      <?php echo ($vo["idcard"]); ?> 
                      <span>
                        <?php if(is_array($vo["idcard_img"])): foreach($vo["idcard_img"] as $key=>$v): ?><a href="__PUBLIC__/uploadify/uploads/idcard/<?php echo ($v); ?>" class="cboxElement">
                            营业执照<?php echo ($key+1); ?>
                            </a><?php endforeach; endif; ?>
                      </span>
                </td>

                <td>
                    <a href="#audit" data-toggle="modal" data-rel="tooltip" class="icon icon-color icon-book" title="审核" onclick="$('#up_id').val(<?php echo ($vo["id"]); ?>);"></a>
                </td>
              </tr>
			  <input name="id[]" type="hidden" value="<?php echo ($vo["id"]); ?>" /><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
<div>
</div>
<!--审核 start-->
<div id="audit" class="modal hide fade in" >
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>审核</h3>
    </div>
    <div class="modal-body">
    <form method="post"  action='__APP__/TIFAWEB_DSWJCMS/Audit/iUpdas'>
		<input name="q" type="hidden" value="ufo" />
        <input name="u" type="hidden" value="__APP__/TIFAWEB_DSWJCMS/Audit/autonym.html" />
        <input name="n" type="hidden" value="审核" />
        <input name="o" type="hidden" value="certification" />
        <input name="e" type="hidden" value="实名认证通过" />
        <input id="up_id" name="sid" type="hidden" value="" />
        <p class="form-inline">   
          <label class="radio"><input type="radio" name="certification" value="2" checked/> 通过</label>
          <label class="radio"><input type="radio" name="certification" value="3" /> 不通过</label>
        </p>
        <div class="span10">
      	  <img id="verifyImg" src='__APP__/Public/verify/' onClick="changeVerify()" title="点击刷新验证码" data-rel="tooltip" style="cursor:pointer;padding-left: 10px;"/>
          <input class="input-large" name="proving" type="text"  style="width:50px;margin-top: 10px;" title="验证码" data-rel="tooltip"/>
          <button class="btn btn-primary" type="submit">
              确认提交
          </button>
      	</div>
    </form>
    </div>
</div>
<!--审核 end-->
<!--底部 -->
<script>
function changeVerify(){
    var timenow = new Date().getTime();
    document.getElementById('verifyImg').src='__APP__/Public/verify/'+timenow;
}
</script>

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