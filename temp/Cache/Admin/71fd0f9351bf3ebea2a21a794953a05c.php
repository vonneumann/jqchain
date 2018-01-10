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
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/linebank.html"><i class="icon icon-darkgray icon-profile"></i><span class="hidden-tablet"> 线下银行</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/online.html"><i class="icon icon-darkgray icon-profile"></i><span class="hidden-tablet"> 网上银行</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/integrallevel.html"><i class="icon-star"></i><span class="hidden-tablet"> 积分等级</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/shuffling.html"><i class="icon-picture"></i><span class="hidden-tablet"> 轮播图片</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/links.html"><i class="icon-random"></i><span class="hidden-tablet"> 友情链接</span></a></li>
            
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/backup.html"><i class="icon-book"></i><span class="hidden-tablet"> 数据库备份</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/optimization.html"><i class="icon-tint"></i><span class="hidden-tablet"> 数据库优化</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Basis/resources.html"><i class="icon-picture"></i><span class="hidden-tablet"> 资源管理</span></a></li>
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
      <li class="active">线下银行</li>
      <div  class="pull-right"> <a data-toggle="modal" data-rel="tooltip" href="#audit">添加线下银行</a></div>
</ul>
<table class="table table-striped table-bordered table-condensed datatable ">
            <thead>
              <tr>
                <th>ID</th>
                <th>充值类型</th>
                <th>支行名称</th>
                <th>收款人</th>
                <th>银行账户</th>
                <th style="width:100px;">排序</th>
                <th>操作</th>
              </tr>
            <thead>
            <tbody>
            <?php if(is_array($audit)): $i = 0; $__LIST__ = $audit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td>
                       <?php echo ($vo["id"]); ?>
                </td>
                <td>
                       <?php echo ($vo["type_name"]); ?>
                </td>
                <td>
                      <?php echo ($vo["bank_name"]); ?>
                </td>
                <td>
                      <?php echo ($vo["name"]); ?>
                </td>
                <td>
                      <?php echo ($vo["bank"]); ?>
                </td>
                <td>
                   <input data-noty-options='{"text":"修改成功","layout":"center","type":"success"}' name="order" type="text" value="<?php echo ($vo["order"]); ?>" class="span8 notys" onblur='var order=$(this).val();$.post("__APP__/TIFAWEB_DSWJCMS/Basis/updtline", { id:<?php echo ($vo["id"]); ?>,order:order} );'/>
                </td>     
                <td>
                    <a href="__APP__/TIFAWEB_DSWJCMS/Basis/editlin/<?php echo ($vo["id"]); ?>.html" data-rel="tooltip" class="ajax-link icon icon-color icon-edit" title="编辑"></a>
                    <a href="#" data-rel="tooltip" class="icon icon-color icon-trash"title="删除" onclick="if(confirm('是否要删除？'))window.location.href='__APP__/TIFAWEB_DSWJCMS/Basis/delelin/<?php echo ($vo["id"]); ?>'"></a>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
<div>
</div>
<!--添加线下银行 start-->
<div id="audit" class="modal hide fade">
    
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>添加线下银行</h3>
    </div>
    <form method="post"  action='__APP__/TIFAWEB_DSWJCMS/Basis/tfAdd'>
    <input name="q" type="hidden" value="off" />
    <input name="u" type="hidden" value="__APP__/TIFAWEB_DSWJCMS/Basis/linebank.html" />
    <input name="n" type="hidden" value="线下银行添加" />
    <table class="table">
        <tbody>
          <tr>
            <td>
                   充值类型：
            </td>
            <td>
              <select name="type" class="span2" style="width:160px;">   
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["value"]); ?>' ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
               </select>
            </td>
          </tr>
          <tr>
            <td>
                   支行名称：
            </td>
            <td>
              <input name="bank_name" type="text" class="span6" placeholder="请输入支行名称...">
            </td>
          </tr>
          <tr>
            <td>
                   收款人：
            </td>
            <td>
              <input name="name" type="text" class="span6" placeholder="请输入收款人...">
            </td>
          </tr>
          <tr>
            <td>
                   银行账户：
            </td>
            <td>
              <input name="bank" type="text" class="span6" placeholder="请输入银行账户...">
            </td>
          </tr>
          <tr>
            <td>
                   排序：
            </td>
            <td>
              <input name="order" type="text" class="span2" value="5">
            </td>
          </tr>
        </tbody>      
    </table>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">关闭</a>
        <button type="submit" class="btn btn-primary" >确认添加</button>
    </div>
    </form>
</div>
<!--添加线下银行 end-->
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