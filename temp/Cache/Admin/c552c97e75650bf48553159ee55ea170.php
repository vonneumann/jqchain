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
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/1.html"><i class="icon-road"></i><span class="hidden-tablet"> 借款用途</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/2.html"><i class="icon-repeat"></i><span class="hidden-tablet"> 借款期限（月）</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/3.html"><i class="icon-refresh"></i><span class="hidden-tablet"> 借款期限（天）</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/4.html"><i class="icon-retweet"></i><span class="hidden-tablet"> 还款方式</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/5.html"><i class="icon-time"></i><span class="hidden-tablet"> 有效时间</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/6.html"><i class="icon-circle-arrow-down"></i><span class="hidden-tablet"> 最低投标金额</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/7.html"><i class="icon-circle-arrow-up"></i><span class="hidden-tablet"> 最高投标金额</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/8.html"><i class="icon-book"></i><span class="hidden-tablet"> 学历</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/9.html"><i class="icon-edit"></i><span class="hidden-tablet"> 月收入</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/10.html"><i class="icon-home"></i><span class="hidden-tablet"> 住房条件</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/11.html"><i class="icon-warning-sign"></i><span class="hidden-tablet"> 购车情况</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/12.html"><i class="icon-question-sign"></i><span class="hidden-tablet"> 当前所在行业</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/13.html"><i class="icon-user"></i><span class="hidden-tablet"> 56个民族</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/14.html"><i class="icon-qrcode"></i><span class="hidden-tablet"> 开户银行</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/15.html"><i class="icon-download"></i><span class="hidden-tablet"> 充值类型</span></a></li>
            <li><a class="ajax-link" href="__APP__/TIFAWEB_DSWJCMS/Ganged/index/17.html"><i class="icon-th-list"></i><span class="hidden-tablet"> 后台栏目分组</span></a></li>
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
      <li class="active"><?php echo ($pname); ?></li>
      <div  class="pull-right"> <a data-toggle="modal" data-rel="tooltip" href="#audit">添加<?php echo ($pname); ?></a></div>
</ul>
<table class="table table-striped table-bordered table-condensed datatable ">
            <thead>
              <tr>
              	<th>联动值</th>
                <th>联动名</th>
                <th>状态</th>
                <th style="width:100px;">排序</th>
                <th>操作</th>
              </tr>
            <thead>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td>
                      <?php echo ($vo["value"]); ?>
                </td>
                <td>
                       <?php echo ($vo["name"]); ?>
                </td>
                <td class="form-inline">
                <?php if($vo["state"] == 0): ?><label class="radio"><input type="radio" name="state<?php echo ($vo["id"]); ?>" value="0" class="noty" checked data-noty-options='{"text":"修改成功","layout":"center","type":"success"}' onclick='var state=$(this).val();$.post("__APP__/TIFAWEB_DSWJCMS/Ganged/savegan", { id:<?php echo ($vo["id"]); ?>,state:state} );'/> 显示</label>
              <label class="radio"><input type="radio" name="state<?php echo ($vo["id"]); ?>" value="1" class="noty" data-noty-options='{"text":"修改成功","layout":"center","type":"success"}' onclick='var state=$(this).val();$.post("__APP__/TIFAWEB_DSWJCMS/Ganged/savegan", { id:<?php echo ($vo["id"]); ?>,state:state} );'/> 隐藏</label>
               <?php else: ?>
               <label class="radio"><input type="radio" name="state<?php echo ($vo["id"]); ?>" value="0" class="noty"data-noty-options='{"text":"修改成功","layout":"center","type":"success"}' onclick='var state=$(this).val();$.post("__APP__/TIFAWEB_DSWJCMS/Ganged/savegan", { id:<?php echo ($vo["id"]); ?>,state:state} );'/> 显示</label>
              <label class="radio"><input type="radio" name="state<?php echo ($vo["id"]); ?>" value="1" checked class="noty" data-noty-options='{"text":"修改成功","layout":"center","type":"success"}' onclick='var state=$(this).val();$.post("__APP__/TIFAWEB_DSWJCMS/Ganged/savegan", { id:<?php echo ($vo["id"]); ?>,state:state} );'/> 隐藏</label><?php endif; ?>
                </td>
                <td>
                   <input data-noty-options='{"text":"修改成功","layout":"center","type":"success"}' name="order" type="text" value="<?php echo ($vo["order"]); ?>" class="span8 notys" onblur='var order=$(this).val();$.post("__APP__/TIFAWEB_DSWJCMS/Ganged/savegan", { id:<?php echo ($vo["id"]); ?>,order:order} );'/>
                </td>     
                <td>
                    <a href="#edit" data-toggle="modal" data-rel="tooltip" class="icon icon-color icon-edit" title="编辑" onclick='edit(<?php echo ($vo["id"]); ?>)'></a>
                    <a href="#" data-rel="tooltip" class="icon icon-color icon-trash"title="删除" onclick="if(confirm('是否要删除？'))window.location.href='__APP__/TIFAWEB_DSWJCMS/Ganged/exitgan/<?php echo ($vo["id"]); ?>'"></a>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
<div>
</div>
<!--添加<?php echo ($pname); ?> start-->
<div id="audit" class="modal hide fade">
    
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>添加<?php echo ($pname); ?></h3>
    </div>
    <form method="post"  action='__APP__/TIFAWEB_DSWJCMS/Ganged/tfAdd'>
    <input name="q" type="hidden" value="unite" />
    <input name="u" type="hidden" value="__APP__/TIFAWEB_DSWJCMS/Ganged/index/<?php echo ($_GET['id']); ?>.html" />
    <input name="n" type="hidden" value="<?php echo ($pname); ?>添加" />
    <input name="pid" type="hidden" value="<?php echo ($_GET['id']); ?>" />
    <table class="table">
        <tbody>
          <tr>
            <td>
                   联动名：
            </td>
            <td>
              <input name="name" type="text" class="span6" placeholder="请输入联动名...">
            </td>
          </tr>
          <tr>
            <td>
                   联动值：
            </td>
            <td>
              <input name="value" type="text" class="span6" placeholder="请输入联动值...">
            </td>
          </tr>
          <tr>
            <td>
                   状态：
            </td>
            <td class="form-inline">
                <label class="radio"><input type="radio" name="state" value="0" checked/> 显示</label>
                <label class="radio"><input type="radio" name="state" value="1" /> 隐藏</label>
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
<!--添加<?php echo ($pname); ?> end-->
<!--编辑<?php echo ($pname); ?> start-->
<div id="edit" class="modal hide fade">
    
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>编辑<?php echo ($pname); ?></h3>
    </div>
    <form method="post"  action='__APP__/TIFAWEB_DSWJCMS/Ganged/tfUpda'>
    <input name="q" type="hidden" value="unite" />
    <input name="u" type="hidden" value="__APP__/TIFAWEB_DSWJCMS/Ganged/index/<?php echo ($_GET['id']); ?>.html" />
    <input name="n" type="hidden" value="<?php echo ($pname); ?>更新" />
    <div id='edits'></div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">关闭</a>
        <button type="submit" class="btn btn-primary" >确认更新</button>
    </div>
    </form>
</div>
<!--编辑<?php echo ($pname); ?> end-->
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