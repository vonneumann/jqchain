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

<div class="container-fluid">
	<div class="row-fluid">
        <!--左栏 starts -->
		<!-- left menu starts -->
<div class="span2 main-menu-span">		
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">菜单</li>
            <li><a class="ajax-link"  href="__APP__/TIFAWEB_DSWJCMS/Site.html"><i class="icon-list"></i><span class="hidden-tablet"> 栏目管理</span></a></li>
            <li><a href="__APP__/TIFAWEB_DSWJCMS/Site/articleList.html"><i class="icon-book"></i><span class="hidden-tablet"> 文章管理</span></a></li>
        </ul>
    </div><!--/.well -->
</div><!--/span-->
<!-- left menu ends -->
        <!--左栏 end -->
			
			
       <!-- content starts -->
      <div id="content" class="span10">
          <ul class="breadcrumb">
              <li>
                  <a href="__APP__/TIFAWEB_DSWJCMS.html">首页</a> <span class="divider">/</span>
              </li>
              <li>
                  <a href="__APP__/TIFAWEB_DSWJCMS/Site.html">栏目管理</a> <span class="divider">/</span>
              </li>
              <li class="active">添加栏目</li>
              
          </ul>
          
            <ul id="myTab" class="nav nav-tabs">

              <li class="active"><a href="#home" data-toggle="tab">基本信息</a></li>

              <li><a href="#profile" data-toggle="tab">详细信息</a></li>


            </ul>
 <form method="post"  action='__APP__/TIFAWEB_DSWJCMS/Site/tfUpda'>
  <input name="sid" type="hidden" value="<?php echo ($list['id']); ?>" />
 <input name="user_id" type="hidden" value="<?php echo ($list['user_id']); ?>" />
  <input name="catpid" id="catpid" type="hidden" value="<?php echo ($list['catpid']); ?>" />
  <input name="u"  type="hidden" value="__APP__/TIFAWEB_DSWJCMS/Site.html" />
   <input name="aid" id="aid" type="hidden" value="<?php echo ($list['aid']); ?>" />
            <div id="myTabContent" class="tab-content">

              <div class="tab-pane fade in active" id="home">

                
                    <table class="table">
                                    <tbody>
                                      <tr>
                                        <td>
                                               栏目名称：
                                        </td>
                                        <td>
                                          <input name="title" type="text" class="span5" value="<?php echo ($list['title']); ?>" maxlength="30">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                               自定义链接：
                                        </td>
                                        <td>
                                          <input name="link" type="text" class="span5" value="<?php echo ($list['link']); ?>" maxlength="100">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                               上级类目：
                                        </td>
                                        <td>
                                      

                                          <?php if($site): ?><select name="pid" id="pid"  onchange="var id=$(this).val();orclick(id);setCatPid(id);">
                                          <option value="<?php echo ($list["pid"]); ?>" class="cal<?php echo ($sites["order"]); ?>"><?php echo ($sites["title"]); ?></option>
                                          <option value="0" id="Type">顶级类目</option>
                                          <?php if(is_array($site)): $i = 0; $__LIST__ = $site;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option id="o_<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["id"]); ?>" class="cal<?php echo ($vo["order"]); ?>" catpid="<?php echo ($vo["absPath"]); ?>" order="<?php echo ($vo["order"]); ?>">
                                            <?php if(intval($vo['order']) == 1 ): echo ($vo["title"]); ?>
                                          
                                           <?php elseif(intval($vo['order']) == 2 ): ?>
                                            ├ <?php echo ($vo["title"]); ?>
                                            <?php elseif(intval($vo['order']) == 3 ): ?> 
                                            │├ <?php echo ($vo["title"]); ?>
                                            <?php elseif(intval($vo['order']) == 4 ): ?> 
                                           ││├ <?php echo ($vo["title"]); ?>
                                            <?php elseif(intval($vo['order']) == 5 ): ?> 
                                            │││├ <?php echo ($vo["title"]); ?>
                                            <?php else: ?>
                                            │--├ <?php echo ($vo["title"]); endif; ?>
            
                                          </option><?php endforeach; endif; else: echo "" ;endif; ?>
                                          
                                          </select><?php endif; ?>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>
                                               关键字：
                                        </td>
                                        <td>
                                          <input name="keyword" type="text" class="span10" value="<?php echo ($list['keyword']); ?>" maxlength="100">
                                        </td>
                                      </tr>
                              <tr>
                                        <td>
                                               描述：
                                        </td>
                                        <td>
                                          <textarea name="remark" class="span5"  maxlength="200" style="height:200px;"><?php echo ($list['remark']); ?></textarea>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                               页面类型：
                                        </td>
                                        <td class="form-inline">
                                        <?php if(intval($list['type']) == 1): ?><label class="radio"><input type="radio" name="type" value="1" checked onclick="$('#content_tpl').val('content')"/> 封面</label>
                                          <label class="radio"><input type="radio" name="type" value="2" onclick="$('#content_tpl').val('content')"/> 列表</label>
                                          <label class="radio"><input type="radio" name="type" value="3" onclick="$('#content_tpl').val('page')"/> 内容</label>
                                         <?php elseif(intval($list['type']) == 2): ?>
                                          <label class="radio"><input type="radio" name="type" value="1" onclick="$('#content_tpl').val('content')"/> 封面</label>
                                          <label class="radio"><input type="radio" name="type" value="2" checked onclick="$('#content_tpl').val('content')"/> 列表</label>
                                          <label class="radio"><input type="radio" name="type" value="3" onclick="$('#content_tpl').val('page')"/> 内容</label>
                                          <?php else: ?>
                                           <label class="radio"><input type="radio" name="type" value="1" onclick="$('#content_tpl').val('content')"/> 封面</label>
                                          <label class="radio"><input type="radio" name="type" value="2" onclick="$('#content_tpl').val('content')"/> 列表</label>
                                          <label class="radio"><input type="radio" name="type" value="3" checked onclick="$('#content_tpl').val('page')"/> 内容</label><?php endif; ?>
                                          
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>
                                               列表模板：
                                        </td>
                                        <td class="form-inline">
                                              <input name="list_tpl" type="text" class="span5" value="<?php echo ($list['list_tpl']); ?>">
                                        </td>
                                      </tr> 
                                       <tr>
                                        <td>
                                               内容页模板：
                                        </td>
                                        <td class="form-inline">
                                              <input name="content_tpl"  id="content_tpl" type="text" class="span5" value="<?php echo ($list['content_tpl']); ?>">
                                        </td>
                                      </tr>                                                                                                               
                                      
                                      <tr>
                                        <td>
                                               显示/隐藏：
                                        </td>
                                        <td class="form-inline">
                                         <?php if(intval($list['status']) == 1): ?><label class="radio"><input type="radio" name="status" value="0" /> 隐藏</label>
                                          <label class="radio"><input type="radio" name="status" value="1" checked/> 显示</label>
                                          <?php else: ?>
                                          <label class="radio"><input type="radio" name="status" value="0"  checked/> 隐藏</label>
                                          <label class="radio"><input type="radio" name="status" value="1"/> 显示</label><?php endif; ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                               排序：
                                        </td>
                                        <td>
                                          <input name="orde" type="text" class="span2"  value="<?php echo ($list['orde']); ?>">
                                        </td>
                                      </tr>
                                    </tbody>
                                      <input id="order" name="order" type="hidden" class="span2"  value="<?php echo ($list['order']); ?>">                
                    </table>


              </div>
              <!--基本信息end-->

              <div class="tab-pane fade" id="profile">
               <table class="table">
                   <tbody>
                   <!--  <tr>
                      <td>
                             缩略图：
                      </td>
                     <td>
                           <ul class="thumbnails" >
                                <li>
                                <a id="feila" href="__PUBLIC__/uploadify/uploads/column/<?php echo ($list["litpic"]); ?>" class="thumbnail cboxElement">
                            <img id="feil" src="__PUBLIC__/uploadify/uploads/column/<?php echo ($list["litpic"]); ?>" style="width:150px;height:150px;">
                            </a>
                                </li>
                             </ul>
                            <input id="img" name="litpic" type="hidden" value="<?php echo ($list["litpic"]); ?>"/>
                            <input id="file_delete" type="hidden" value="/uploads/column/<?php echo ($list["litpic"]); ?>"/>
                            <input id="folder" type="hidden" value="column"/>
                            <input data-no-uniform="true" type="file" name="file_upload" id="file_upload" />
                      </td>
                    </tr>  -->
                    <tr>
                      <td>
                             调用模型：
                      </td>
                      <td>
                           <input name="model" type="text" class="span5" value="<?php echo ($list['model']); ?>">
                      </td>
                    </tr>                    
                   
                    <tr>
                      <td>
                             内容：
                      </td>
                      <td>
                          <textarea class="editor" name="content" style="width:1000px;height:600px;">
                          <?php echo ($list['content']); ?>
                          </textarea>  
                      </td>
                    </tr>
                    
                                      
                    </tbody>
                    </table>

              </div>
              <div class="modal-footer">
                  <a href="#" class="btn" data-dismiss="modal">关闭</a>
                  <button type="submit" class="btn btn-primary" >确认添加</button>
              </div>
              </form>


            </div>

          
          
      </div>
       <!-- content end -->
   </div>
   <script>
     function setCatPid(v){
		 if(v==0){
			catpid=0;	
		}else{
			 var catpid  = $("#o_"+v).attr("catpid");
		}
		 $("#catpid").attr("value",catpid);
	 }
	 function orclick(s){
		if(s==0){
			order=1;	
		}else{
			var order =  $("#o_"+s).attr("order");
			order=parseInt(order)+1;
		}
		$('#order').val(order);	
	}
   </script>
</div>

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