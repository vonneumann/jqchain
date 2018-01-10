<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title><?php if(($si['link'] == '/') OR ($si['link'] == '')): else: echo ($si['title']); ?>-<?php endif; echo ($s["sys_name"]); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo ($si['remark']?$si['remark']:$s['sys_describe']); echo ($so["title"]); ?>">
	<meta name="KeyWords" content="<?php echo ($si['keyword']?$si['keyword']:$s['sys_keyword']); echo ($so["title"]); ?>">
    <meta name="generator" content="Dswjcms! X1.0" />
    <meta name="author" content="Dswjcms! Team and Tf Team" />
    <meta name="copyright" content="2013-2014 Tf Inc." />
    <meta property="qc:admins" content="6461155451641617526375" />
    <meta http-equiv="X-UA-Compatible" content="IE=9">
<!--[if lt IE 9 ] >
<META http-equiv="X-UA-Compatible" content="IE=8" > </META>
<![endif]-->
     <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link href='__PUBLIC__/bootstrap/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='__PUBLIC__/bootstrap/css/uploadify.css' rel='stylesheet'>
    <link href='__PUBLIC__/bootstrap/css/jquery-ui-1.8.21.custom.css' rel='stylesheet'>
    <link href='__PUBLIC__/bootstrap/css/uniform.default.css' rel='stylesheet'>
    <link href="__PUBLIC__/css/hdocs.css" rel="stylesheet">
    <link href='__PUBLIC__/bootstrap/css/opa-icons.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/fotorama.css' rel='stylesheet'>
    <link  href="__PUBLIC__/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href='__PUBLIC__/jmhz/css/hdocs.css' rel='stylesheet'>
    <link href='__PUBLIC__/jmhz/css/css.css' rel='stylesheet'>
    <link href='__PUBLIC__/bootstrap/css/colorbox.css' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/jquery.datetimepicker.css">
    <!--[if lte IE 6]>
    <link href="__PUBLIC__/bootstrap/css/bootstrap-ie6.min.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/bootstrap/css/ie.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap-ie.js"></script>
    <![endif]-->
    <?php echo ($head); ?>
	<link rel="shortcut icon" href="__PUBLIC__/bootstrap/img/favicon.ico">
    <!-- jQuery -->
    <script src="__PUBLIC__/js/timecount.js"></script>
    <script src="__PUBLIC__/bootstrap/js/jquery-1.7.2.min.js"></script>
    
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
 <!--start: Header -->
<header>

    <!--start: Container -->
    <div class="container">

        <div role="banner" class="visible-desktop row-fluid">
            <div class="span6">
                <a href="/">
                    <img src="__PUBLIC__/uploadify/uploads/logo/<?php echo ($s["sys_logo"]); ?>" style="height: 80px;margin-top: 10px;" alt="<?php echo ($s["sys_briefTitle"]); ?>"></a>
            </div>

            <div class="info span6">
            <?php if($_SESSION['user_name']== ''): ?><a href="__ROOT__/Logo/login.html">登陆</a>
                |
                <a href="__ROOT__/Logo/register.html">注册</a>
            <?php else: ?>
            	<?php echo (session('user_name')); ?>
                |
                <a href="__ROOT__/Center/mails.html">消息</a>
                |
                <a href="__ROOT__/Logo/exits.html">退出</a><?php endif; ?>
                <span class="phone"><?php echo ($s["sys_phone"]); ?></span>
                <small>服务时间：9:00 - 17:00</small>
            </div>

        </div>

        <hr class="dashed visible-desktop">

        <!--start: Navigation -->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand hidden-desktop" href="/">
                    <img src="__PUBLIC__/uploadify/uploads/logo/<?php echo ($s["sys_logo"]); ?>" style="height: 50px;" alt="<?php echo ($s["sys_briefTitle"]); ?>"></a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="<?php echo ($active["index"]); ?>"><a href="/">首页</a></li>

                        <li class="<?php echo ($active["borrow"]); ?>"><a href="__ROOT__/Borrow/welfare.html">我要融资</a></li>
						<li class="<?php echo ($active["borrow"]); ?>"><a href="__ROOT__/Index/counter.html">贷款计算器</a></li>
                    </ul>
                    <ul class="nav pull-right">

                        <li class="<?php echo ($active["center"]); ?>"><a href="__ROOT__/Center.html">我的账户</a></li>
                        <li class="<?php echo ($active["explanation"]); ?>" ><a href="__ROOT__/Site/listTpl/id/28.html">帮助中心</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!--end: Navigation -->

    </div>
    <!--end: Container-->

</header>
<!--end: Header-->
<div class="layout">
<!--头部 end -->
<div class="sub-nav" sup="Project">
    <div class="sub-nav-inner">
        <div class="container">
            <!--Navigation start-->
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <ul class="nav">
                        <li <?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center.html">总览</a></li>
             
                        <li <?php if((ACTION_NAME) == "loan"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/loan/issue.html">借款者</a></li>
                   
                        <li <?php if((ACTION_NAME) == "approve"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/approve/autonym.html">认证中心</a></li>
                        <li <?php if((ACTION_NAME) == "security"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/security/password.html">安全中心</a></li>
                        <li <?php if((ACTION_NAME) == "mails"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/mails.html">站内信</a></li>
                  
                    </ul>
                </div>
            </div>
            <!--Navigation end-->
        </div>
    </div>
</div>
<div class=" row-fluid">
<div class="container paddtop">
<!-- 二级-->
<ul class="center_secondary">
    <li <?php if(($mid) == "issue"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/loan/issue.html">发布的借款</a></li>
    <li <?php if(($mid) == "overdue"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/loan/overdue.html">逾期的借款</a></li>
    <li <?php if(($mid) == "is"): ?>class="active"<?php endif; ?>><a href="__ROOT__/Center/loan/is.html">正在还款的借款</a></li>
    
</ul>
<!-- 二级end-->
    <div id="content" class="center_zt">
      	<?php switch($mid): case "issue": ?><!--发布的借款 start-->
                 <input id="datasort" type="hidden" value="5" />
                <table class="table table-striped datatable ">
                    <thead>
                      <tr>
                        <th>标题</th>
                        <th>类型</th>
                        <th>金额</th>
                        <th>年利率</th>
                        <th>期限</th>
                        <th>发布时间</th>
                        <th style="width:120px;">进度</th>
                        <th>状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="__ROOT__/Loan/invest/<?php echo ($vo["id"]); ?>.html" data-rel="tooltip" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></td>
                            <td><?php echo ($vo["type_name"]); ?></td>
                            <td><?php echo (number_format($vo["money"],2,'.',',')); ?></td>
                            <td><?php echo ($vo["rates"]); ?>%</td>
                            <td><?php echo ($vo["deadline"]); ?></td>
                            <td><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></td>
                            <td>
                            <?php if($vo["state"] == 10 ): ?><div class="progress" data-rel="tooltip" title="<?php echo ($vo["ratios"]); ?>%">
                      			<div class="bar" style="width: <?php echo ($vo["ratios"]); ?>%;"></div>
                    			</div>
                            <?php else: ?>
                            <?php if($vo["type"] == 7): else: ?>
                                <div class="progress" data-rel="tooltip" title="<?php echo ($vo["ratio"]); ?>%">
                      			<div class="bar" style="width: <?php echo ($vo["ratio"]); ?>%;"></div>
                    			</div><?php endif; endif; ?>
                            </td>
                            <td><?php echo ($vo["state_name"]); ?></td>
                            <td>
                                <?php if($vo["state"] == 0 ): if($vo["type"] == 7): ?><a href="__ROOT__/Borrow/flow/id/<?php echo ($vo["id"]); ?>.html" >修改</a><br/>
                                    <?php else: ?>
                                    <a href="__ROOT__/Borrow/index/<?php echo ($vo["id"]); ?>.html" >修改</a><br/><?php endif; ?>
                                <a href="#undo" data-toggle="modal" onclick="$('#undo_id').val(<?php echo ($vo["id"]); ?>);">撤销</a>
                                <?php elseif((($vo["state"] >= 7) and ($v["state"] <= 9)) or ($v["state"] == 11) ): ?>
                                    <?php if($vo["type"] == 7 ): else: ?>
                                    <a href="__ROOT__/Center/agreement.html?bid=<?php echo ($vo["id"]); ?>" data-rel="tooltip" title="查看协议书" class="icon-list-alt"></a><?php endif; ?>
                                <?php else: ?>
                                无<?php endif; ?>
                            </td>
                         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                    
                </table>
            <!--发布的借款 end--><?php break;?>
            <?php case "overdue": ?><!--逾期的借款 start-->
                <table class="table table-striped datatable ">
                    <thead>
                      <tr>
                        <th>标题</th>
                        <th>逾期本息</th>
                        <th>逾期天数</th>
                        <th>逾期管理费</th>  
                        <th>逾期罚息</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php if(is_array($overd)): $i = 0; $__LIST__ = $overd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="__ROOT__/Loan/invest/<?php echo ($vo["bid"]); ?>.html" data-rel="tooltip" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></td>
                            <td><?php echo (number_format($vo["money"],2,'.',',')); ?></td>
                            <td><?php echo ($vo["days"]); ?></td>
                            <td><?php echo (number_format($vo["overdue"],2,'.',',')); ?></td>
                            <td><?php echo (number_format($vo["penalty"],2,'.',',')); ?></td>
                            <?php if($vo["type"] == 1 ): ?><td>已还</td>
                         	<?php else: ?>
                            <td><a onclick="if(confirm('确定要还款？'))window.location.href='__URL__/latePayment?bid=<?php echo ($vo["bid"]); ?>&days=<?php echo ($vo["days"]); ?>'" href="#">还款</a></td><?php endif; ?>
                         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                            
                </table>
            <!--逾期的借款 end--><?php break;?>
            <?php case "is": ?><!--正在还款的借款 start-->
                <table class="table table-striped datatable ">
                    <thead>
                      <tr>
                        <th>标题</th>
                        <th>类型</th>
                        <th>借款金额</th>
                        <th>年利率</th>
                        <th>借款期限</th>  
                        <th>操作</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["type"] != 7) and ($vo["state"] == 7)): ?><tr>
                            <td><a href="__ROOT__/Loan/invest/<?php echo ($vo["id"]); ?>.html" data-rel="tooltip" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></td>
                            <td><?php echo ($vo["type_name"]); ?></td>
                            <td><?php echo (number_format($vo["money"],2,'.',',')); ?></td>
                            <td><?php echo ($vo["rates"]); ?>%</td>
                            <td><?php echo ($vo["deadline"]); ?></td>
                            <td><a href="__ROOT__/Center/agreement.html?bid=<?php echo ($vo["id"]); ?>" data-rel="tooltip" title="查看协议书" class="icon-list-alt"></a>&nbsp;&nbsp;<a href="__ROOT__/Center/loan/plan?bid=<?php echo ($vo["id"]); ?>">还款</a></td>
                         </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                            
                </table>
            <!--正在还款的借款 end--><?php break;?>
            <?php case "plan": ?><!--还款计划 start-->
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>期数</th>
                        <th>还款金额</th>
                        <th>管理费</th>
                        <th>还款时间</th>  
                        <th>状态</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php if(is_array($refun)): $i = 0; $__LIST__ = $refun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["nper"]); ?></td>
                            <td><?php echo (number_format($vo["money"],2,'.',',')); ?></td>
                            <td><?php echo (number_format($interest,2,'.',',')); ?></td>
                            <td><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></td>
                            <?php if($vo["type"] == 1 ): ?><td>已还</td>
                            <?php elseif($vo["type"] == 2 ): ?>
                            <td>逾期</td>
                         	<?php else: ?>
                            <td><a href="#edit" data-toggle="modal" data-rel="tooltip" onclick="var id=<?php echo ($vo["nper"]); ?>;$('#ajax_id').val(id);">还款</a></td><?php endif; ?>
                         </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
                    </tbody>
                           
                </table>
            <!--还款计划 end--><?php break;?>
            <?php default: ?>空<?php endswitch;?>
    </div>
    <!-- right end--> 

<!-- container end -->
<!--底部  start-->
<!--撤销 start-->
<div id="undo" class="modal hide fade in" >
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>撤销</h3>
    </div>
    <div class="modal-body">
    <form method="post"  action='__URL__/tfUpda'>
		<input name="q" type="hidden" value="borrow" />
        <input name="u" type="hidden" value="__ROOT__/Center/loan/issue.html" />
        <input name="n" type="hidden" value="撤销" />
        <input id="undo_id" name="sid" type="hidden" value="" />
        <input type="hidden" name="state" value="13"/>
        <div class="span4">
      	  <img id="verifyImg" src='__APP__/Public/verify/' onClick="changeVerify()" title="点击刷新验证码" data-rel="tooltip" style="cursor:pointer;padding-left: 10px;"/>
          <input class="input-large" name="proving" type="text"  style="width:50px;margin-top:10px;" title="验证码" data-rel="tooltip"/>
          <button class="btn btn-primary" type="submit">
              确认提交
          </button>
      	</div>
    </form>
    </div>
</div>
<!--撤销 end-->
<!--还款中 start-->
<div id="edit" class="modal hide fade"  style="width:500px;left:55%;top:30%">
<form method="post">
    <input id="ajax_id" type="hidden" value="" />
    <input id="ajax_uid" type="hidden" value="" />
    <input id="ajax_fid" type="hidden" value="" />
    <input id="ajax_gid" type="hidden" value="" />
    <div class="modal-header">
      <h3>友好提示</h3>
    </div>
    <div class="modal-body cloan_top">
    <p><div class="invest_loading"><div>接下来的操作需要一段时间，请保持网络通畅</div></div></p>
    <div class="span5 text-right">
    
  	 <a class="btn btn-primary" onclick="var id=$('#ajax_id').val();var bid=<?php echo ($_GET['bid']); ?>;var fid=$('#ajax_fid').val();var uid=$('#ajax_uid').val();var gid=$('#ajax_gid').val();ajaxrefund(id,bid,fid,uid,gid);">
          确认提交
      </a>
  	</div>
  </div>
</form>
</div>

<!--还款中 end-->
<script>
function changeVerify(){
    var timenow = new Date().getTime();
    document.getElementById('verifyImg').src='__APP__/Public/verify/'+timenow;
}
function ajaxrefund(id,bid,fid,uid,gid){
	var loading='<div class="invest_loading"><div><img src="__PUBLIC__/bootstrap/img/ajax-loaders/ajax-loader-1.gif"/></div><div>处理中</div> </div>';
	$(".cloan_top").html(loading);
	
	if(gid>0){
		$(".cloan_top").load("__URL__/flowrepayment", {id:id,bid:bid,uid:uid,fid:fid,gid:gid},function(){
			setTimeout("window.location.href='__ROOT__/Center/loan/flowplan?bid="+bid+"'",3000);
		});	
	}else{
		
		$(".cloan_top").load("__URL__/repayment", {id:id,bid:bid},function(){
			setTimeout("window.location.href='__ROOT__/Center/loan/plan?bid="+bid+"'",3000);
		});	
	}
}
</script>
</div>
</div>
 <!-- Footer
    ================================================== -->
<div class="sup-footer" role="menu">
    <!--Container start-->
    <div class="container">


        <!--Row start-->
        <div class="row-fluid">

            <!--Contact start-->
            <div class="span6">

                <h3>联系我们</h3>

                <ul class="unstyled">
                    <li><i class="icon icon-darkgray icon-bookmark"></i>&nbsp;&nbsp;<?php echo ($s["sys_officeAddress"]); ?></li>
                    <li><i class="icon icon-darkgray icon-cellphone"></i>&nbsp;&nbsp;<?php echo ($s["sys_phone"]); ?></li>
                    <li><i class="icon icon-darkgray icon-envelope-closed"></i>&nbsp;&nbsp;<?php echo ($s["sys_email"]); ?></li>
                </ul>

            </div>
            <!--Contact end-->

            <!--Guide start-->
            <div class="span3 visible-desktop">

                <h3>关于我们</h3>

                <ul class="unstyled">
                    <li><a href="__ROOT__/Site/page/id/1.html">关于我们</a></li>
                    <li><a href="__ROOT__/Site/listTpl/id/16.html">新闻中心</a></li>
                    <li><a href="__ROOT__/Site/listTpl/id/21.html">联系我们</a></li> 
                </ul>

            </div>
            <!--Guide end-->

            <!--Law start-->
            <div class="span3 visible-desktop">

                <h3>新手指南</h3>

                <ul class="unstyled">
                    <li><a href="__ROOT__/Site/listTpl/id/28.html">名词解释</a></li>              
                    <li><a href="__ROOT__/Site/listTpl/id/33.html">帮助中心</a></li>
                </ul>

            </div>
            <!--Law end-->

        </div>
        <!--Row end-->
        <hr class="dashed visible-desktop">

    </div>
    <!--Container  end-->

</div>
<!--Footer end-->


    <div class="online-service hidden-phone">
    <a class="online-service-title" href="http://wpa.qq.com/msgrd?v=3&uin=819016953&site=qq&menu=yes" target="_blank">
        <div class="social-qq-pure"></div>
        <h4 style="">在线客服</h4>
    </a>
</div>

<!--Calculator start-->
    <?php echo ($ajax_list); ?>
<!-- external javascript
	================================================== -->
	<!-- jQuery UI -->
    <!-- 首页宽屏轮播-->
	
    <!--[if lte IE 6]>
    <script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap-ie.js"></script>
    <![endif]-->
	<!-- bootstrap-->
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/jquery.dataTables.min.js"></script>
 
    <script>
	$(document).ready(function(){
		$.extend( $.fn.dataTableExt.oPagination, {
			"bootstrap": {
				"fnInit": function( oSettings, nPaging, fnDraw ) {
					var oLang = oSettings.oLanguage.oPaginate;
					var fnClickHandler = function ( e ) {
						e.preventDefault();
						if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
							fnDraw( oSettings );
						}
					};
		
					$(nPaging).addClass('pagination').append(
						'<ul>'+
							'<li class="prev disabled"><a href="#">&larr; '+oLang.sPrevious+'</a></li>'+
							'<li class="next disabled"><a href="#">'+oLang.sNext+' &rarr; </a></li>'+
						'</ul>'
					);
					var els = $('a', nPaging);
					$(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
					$(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
				},
		
				"fnUpdate": function ( oSettings, fnDraw ) {
					var iListLength = 5;
					var oPaging = oSettings.oInstance.fnPagingInfo();
					var an = oSettings.aanFeatures.p;
					var i, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);
		
					if ( oPaging.iTotalPages < iListLength) {
						iStart = 1;
						iEnd = oPaging.iTotalPages;
					}
					else if ( oPaging.iPage <= iHalf ) {
						iStart = 1;
						iEnd = iListLength;
					} else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
						iStart = oPaging.iTotalPages - iListLength + 1;
						iEnd = oPaging.iTotalPages;
					} else {
						iStart = oPaging.iPage - iHalf + 1;
						iEnd = iStart + iListLength - 1;
					}
		
					for ( i=0, iLen=an.length ; i<iLen ; i++ ) {
						// remove the middle elements
						$('li:gt(0)', an[i]).filter(':not(:last)').remove();
		
						// add the new list items and their event handlers
						for ( j=iStart ; j<=iEnd ; j++ ) {
							sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
							$('<li '+sClass+'><a href="#">'+j+'</a></li>')
								.insertBefore( $('li:last', an[i])[0] )
								.bind('click', function (e) {
									e.preventDefault();
									oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
									fnDraw( oSettings );
								} );
						}
		
						// add / remove disabled classes from the static elements
						if ( oPaging.iPage === 0 ) {
							$('li:first', an[i]).addClass('disabled');
						} else {
							$('li:first', an[i]).removeClass('disabled');
						}
		
						if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
							$('li:last', an[i]).addClass('disabled');
						} else {
							$('li:last', an[i]).removeClass('disabled');
						}
					}
				}
			}
		});
     //datatable
	var datasort=$('#datasort').val()?$('#datasort').val():0;//排序根据哪列
	var dataasc=$('#dataasc').val()?"asc":"desc";//排序条件
	$('.datatable').dataTable({
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
			"aaSorting": [[ datasort, dataasc ]],
			"oLanguage": {
			"sLengthMenu": "_MENU_ 每页显示数"
			}
		} );
	
});
</script>
    <script>
$(document).ready(function () {
            
            $("#wechat-popover").popover({
                html: true,
                content: "<p style='white-space:nowrap'>扫码关注<?php echo ($s["sys_briefTitle"]); ?>微信</p><div style='width:120px;height:120px;margin-left:5px;'><img src='__PUBLIC__/img/erb.jpg' style='width:120px;height:120px;'></div>",
                trigger: "hover"
            });

        $("#qqgroup-popover").popover({
            html: true,
            content: "<p style='white-space:nowrap'><?php echo ($s["sys_briefTitle"]); ?>投资理财群 : </p><p style='white-space:nowrap'>群：<a target='_blank' href='http://shang.qq.com/wpa/qunwpa?idkey=bd41e8df34767e61c882d9599becec595fb5e51476c50470c9c5f26df5ef5f2f'><img border='0' src='http://pub.idqqimg.com/wpa/images/group.png' alt='天贷-投资理财群' title='天贷-投资理财群'></a></b></p><p>申请加入投资理财群时<br />请提供<?php echo ($s["sys_briefTitle"]); ?>用户名</p>",
            trigger: "click"
        });

            //disable pager invalid link
            $('.pagination a[href^=#]').on('click', function (e) {
                e.preventDefault();
            });
            $('a.no-link[href^=#]').on('click', function (e) {
                e.preventDefault();
            });
        })	

<?php echo ($endjs); ?>
//计划任务
window.onload = Schedule();
function Schedule(){
$.post("__ROOT__/Api/Autos/timing", {id:1} );

}
$('a[href="#"][data-top!=true]').click(function(e){
		e.preventDefault();
	});
</script>

</body>
</html>