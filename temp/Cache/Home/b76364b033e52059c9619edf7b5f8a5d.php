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
<!-- container start --> 
<div class="sub-nav" sup="Project">
    <div class="sub-nav-inner">
        <div class="container">
            <!--Navigation start-->
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <ul class="nav">
                        <li class="active"><a href="javascript:void(0)">投资详情页</a></li>
                    </ul>
                </div>
            </div>
            <!--Navigation end-->
        </div>
    </div>
</div>
<div class="row-fluid">
<div class="container paddtop">
	<!-- 上半部 start-->
<?php if(is_array($borrow)): $i = 0; $__LIST__ = $borrow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!-- 普通标 state-->
<div class="wall" style="position:relative">    
    <div class="project-summary">
        <div class="row-fluid">  
            <div class="span6">
                <div style="min-height: 70px;">
                    <h3>
                        <?php echo ($v["title"]); ?>
                    </h3>
                </div>
                <p class="project-tags" style="margin-bottom: 0;">
                
                    <?php if(($v["state"] == 1) OR ($v["state"] == 2) OR ($v["state"] == 10)): ?><span class="label label-success">
                         投标中
                     </span>
                    <?php else: ?>
                     <span class="label"><?php echo ($v["state_name"]); ?></span><?php endif; ?>
                   
                    <span class="tag" data-rel="tooltip" title="<?php echo ($v["type_name"]); ?>"><i class="icon icon-darkgray icon-tag"></i><?php echo ($v["type_name"]); ?></span>
                    <?php if(($v["candra"]) == "1"): ?><span class="tag" data-rel="tooltip" title="按天计算"><i class="icon icon-darkgray icon-clock"></i>天</span><?php endif; ?>
                    <?php if(($v["reward_type"]) > "0"): ?><span class="tag" data-rel="tooltip" title="奖励：<?php echo ($v["reward"]); ?>"><i class="icon icon-darkgray icon-archive"></i>奖励</span><?php endif; ?>    
                    <?php if(($v["stick"]) == "1"): ?><span class="tag" data-rel="tooltip" title="推荐"><i class="icon icon-darkgray icon-lightbulb"></i>推荐</span><?php endif; ?>
                    <?php if(($v["code"]) == "1"): ?><span class="tag" data-rel="tooltip" title="需要密码"><i class="icon icon-darkgray icon-locked"></i>密码</span><?php endif; ?>
                </p>

            </div>
            <div class="span3">
                <ul class="project-summary-items">
                	<li>
                        <?php if($v["email_audit"] > 1): ?><span class="invest_rz"><i class="icon32 icon-white icon-envelope-closed"  data-rel="tooltip" title="邮箱已认证"></i></span><?php endif; ?>
                        <?php if($v["certification"] > 1): ?><span class="invest_rz"><i class="icon32 icon-white icon-profile"  data-rel="tooltip" title="实名已认证"></i></span><?php endif; ?>
                        <?php if($v["video_audit"] > 1): ?><span class="invest_rz"><i class="icon32 icon-white icon-comment-video"  data-rel="tooltip" title="视频已认证"></i></span><?php endif; ?>
                        <?php if($v["site_audit"] > 1): ?><span class="invest_rz"><i class="icon32 icon-white icon-users"  data-rel="tooltip" title="现场已认证"></i></span><?php endif; ?>
                        <?php if($v["cellphone_audit"] > 1): ?><span class="invest_rz"><i class="icon32 icon-white icon-cellphone" data-rel="tooltip" title="手机已认证"></i></span><?php endif; ?>
                    </li>
                    <li><span class="title">审核时间</span>
                        <span class="data-tips">
                            <?php echo (date("Y-m-d H:i:s",$v["checktime"])); ?>
                        </span>
                    </li>
                    <?php if($v["limittime"] > 0): ?><li><span class="title">还款时间</span>
                        <span class="data-tips">
                            <?php echo (date("Y-m-d H:i:s",$v["limittime"])); ?>
                        </span>
                    </li><?php endif; ?>
                </ul>
            </div>
            <div class="span3">
                <ul class="project-summary-items">
                    <li><span class="title">融资金额</span><?php echo (number_format($v["money"],2,'.',',')); ?> 元</li>
                    <li><span class="title">年化收益</span> 
                        <span class="important data-tips">
                        <?php echo ($v["rates"]); ?>%
                    	</span>
                    </li>
                    <li><span class="title">融资期限</span>
                        <span class="data-tips">
                            <?php echo ($v["deadlines"]); ?>
                        </span>
                    </li>
                    <li><span class="title">总投标数</span>
                        <span class="data-tips">
                            <?php echo ($v["bid_records_count"]); ?> 笔 <a href="#rEcord" data-toggle="modal" data-rel="tooltip" > 查看记录</a>
                        </span>
                    </li>
                </ul>
            </div>       
    </div>
    <hr class="dashed">
    <div class="row-fluid">
        <div class="span6">
            <div style="margin-top: 10px;">
                <div class="project-progress pull-left" style="margin-top: 3px; margin-right: 5px;">
    
                    <div class="progress progress-striped active">
                        <div class="bar" style="width: <?php echo ($v["ratio"]); ?>%;"></div>
                    </div>
                </div>
                <p class="project-progress-desc hidden-phone">
                    已融资 ：<?php echo (number_format($v["already"],2,'.',',')); ?>元
                </p>
    			<p style="margin-bottom: 0; margin-top: 10px" class="hidden-phone">
                    <?php if(($v["state"] == 7) OR ($v["state"] == 8) OR ($v["state"] == 9) ): ?>距还款时间还需：<span id="limittimes" endtime="<?php echo (date("Y/m/d H:i:s",$v["limittime"])); ?>"></span>
                    <?php else: ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;剩余：<span id="limittimes" endtime="<?php echo (date("Y/m/d H:i:s",$v["endtime"])); ?>"></span><?php endif; ?>
                </p>
            </div>
        </div>
        <div class="span3">
            <ul class="project-summary-items">
                <li><span class="title">可投金额</span> <span class="important">
                <?php echo (number_format($v["surplus"],2,'.',',')); ?>
                </span> 元
                </li>
                <li><span class="title">生效状态</span><span class="important"><?php if($v["type"] == 8): ?>即投即算<?php else: ?>满标复审后生效<?php endif; ?></span></li>
                <li><span class="title">还款方式</span>
                            <span class="important"><?php echo ($v["way"]); ?></span>
                    </li>
            </ul>
        </div>
        <div class="span3">
                <div style="margin-top: 18px">
                    <?php if(($v["state"] == 1) OR ($v["state"] == 2) OR ($v["state"] == 10)): ?><a class="btn btn-primary invest_btn" href="#tEnder" data-toggle="modal" data-rel="tooltip" >立即投资</a>&nbsp;&nbsp;
                    
                    <?php else: ?>
                    <a class="btn invest_btn" data-toggle="modal" data-rel="tooltip" ><?php echo ($v["state_names"]); ?></a><?php endif; ?>
                </div>
        </div>
    </div>
</div>
</div>
<!-- 普通标 state-->


    <!-- 上半部 end-->
    <?php if(($v["type"] == 1) OR ($v["type"] == 2)): ?><!-- 进度 -->
    <div class="row-fluid invest_plan">
    	<h4>抵押物审批进度</h4>
    	<div class="sp2">
        	<p class="to"><span class="icon icon-orange icon-flag"></span><span class="schedule complete"></span></p>
            <p class="time"><?php echo (date("Y-m-d H:i:s",$v["time"])); ?></p>
            <p class="state">提交申请</p>
        </div>
        <div class="sp2">
        	
        	<p class="to"><span class="icon icon-orange icon-flag"></span><span class="schedule complete"></span></p>
            <p class="time"><?php echo (date("Y-m-d H:i:s",$v["time"])); ?></p>
            <p class="state">开始审批</p>
        </div>
        <div class="sp2">
            <p class="to"><span class="icon icon-orange icon-flag"></span><span class="schedule complete"></span></p>
            <p class="time"><?php echo (date("Y-m-d H:i:s",$v["checktime"])); ?></p>
            <p class="state">审批通过</p>
        </div>
        <div class="sp2">
        	<?php if($v["state"] > 0): if($v["state"] == 1): ?><p class="to"><span class="icon icon-green icon-sent"></span><span class="schedule course"></span></p>
                <p class="time">现在</p>
                <?php else: ?>
                <p class="to"><span class="icon icon-orange icon-flag"></span><span class="schedule complete"></span></p>
                <p class="time"><?php echo (date("Y-m-d H:i:s",$v["checktime"])); ?></p><?php endif; ?>
            <?php else: ?>
            <p class="to"><span class="icon icon-darkgray icon-clock"></span><span class="schedule not"></span></p>
            <p class="time">暂无预计时间</p><?php endif; ?>
            <p class="state">抵押完成</p>
        </div>
        <div class="sp2">
        	<?php if($v["state"] > 2): if($v["state"] == 5): ?><p class="to"><span class="icon icon-green icon-sent"></span><span class="schedule course"></span></p>
                <p class="time">现在</p>
                <?php else: ?>
                <p class="to"><span class="icon icon-orange icon-flag"></span><span class="schedule complete"></span></p>
                <p class="time"><?php echo (date("Y-m-d H:i:s",$v["reviewtime"])); ?></p><?php endif; ?>
            <?php else: ?>
            <p class="to"><span class="icon icon-darkgray icon-clock"></span><span class="schedule not"></span></p>
            <p class="time">暂无预计时间</p><?php endif; ?>
            <p class="state">财务放款</p>
        </div>
        <div class="sp2">
        	<?php if($v["state"] == 7 || $v["state"] == 9 || $v["state"] == 10): if($v["state"] == 7): ?><p class="to"><span class="icon icon-green icon-sent"></span><span class="schedule course"></span></p>
                <p class="time">现在</p>
                <?php else: ?>
                <p class="to"><span class="icon icon-orange icon-flag"></span><span class="schedule complete"></span></p>
                <p class="time"><?php echo (date("Y-m-d H:i:s",$v["reviewtime"])); ?></p><?php endif; ?>
            <?php else: ?>
            <p class="to"><span class="icon icon-darkgray icon-clock"></span><span class="schedule not"></span></p>
            <p class="time">暂无预计时间</p><?php endif; ?>
            <p class="state">贷后管理中</p>
        </div>
    </div>
    <!-- 进度 end--><?php endif; ?>
    <?php if($_SESSION['user_uid']> 0): ?><!-- 下半部 start-->
    <div class="row-fluid">
    <div class="span9">
    <div class="accordion invest_below" id="accordion2">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            借入详情
          </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse in">
          <div class="accordion-inner">
            <p>
            	<?php echo ($v["content"]); ?>
            </p>
          </div>
        </div>
      </div>
      <?php if($v["type"] == 1 or $v["type"] == 2): ?><div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseO">
            抵押物信息
          </a>
        </div>
        <div id="collapseO" class="accordion-body collapse">
          <div class="accordion-inner">
            <p>
            	<?php echo ($v["mortgage"]); ?>
            </p>
          </div>
        </div>
      </div><?php endif; ?>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
            还款信用
          </a>
        </div>
        <div id="collapseThree" class="accordion-body collapse">
          <div class="accordion-inner">
          	<dl class="invest_px span12">
                <dd><?php echo ($v["standard"]); ?> 次流标</dd>
                <dd><?php echo ($v["stay_number"]); ?> 笔待还款</dd>
                <dd><?php echo ($v["amount_number"]); ?> 笔已成功还款</dd>
                <dd><?php echo ($v["overdue_number"]); ?> 笔逾期</dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
            个人资料
          </a>
        </div>
        <div id="collapseFour" class="accordion-body collapse">
          <div class="accordion-inner">
          	<dl class="invest_px span12">
            	<dd>真实姓名：<?php echo ($v["name"]); ?></dd>
                <dd>性别：<?php echo ($v["gender"]); ?></dd>
                <dd>民族：<?php echo ($v["national"]); ?></dd>
                <dd>出生日期：<?php echo (date("Y-m-d",$v["born"])); ?></dd>
            	<dd>身份证：<?php echo (substr($v["idcard"],0,13)); ?>*****</dd>
                <dd>籍贯：<?php echo ($v["native_place"]); ?></dd>
                <dd>所在地：<?php echo ($v["location"]); ?></dd>
                <dd>婚姻状况：<?php echo ($v["marriage"]); ?></dd>
                <dd>学历：<?php echo ($v["education"]); ?></dd>
                <dd>月收入：<?php echo ($v["monthly_income"]); ?></dd>
                <dd>住房条件：<?php echo ($v["housing"]); ?></dd>
                <dd>购车情况：<?php echo ($v["buy_cars"]); ?></dd>
                <dd>邮箱：<?php echo ($v["email"]); ?></dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
            账户详情
          </a>
        </div>
        <div id="collapseFive" class="accordion-body collapse">
          <div class="accordion-inner">
          	<dl class="invest_px span12">
            	<dd>账户总额： <?php echo (number_format($v["total_money"],2,'.',',')); ?></dd>
                <dd>待还总额： <?php echo (number_format($v["stay_still"],2,'.',',')); ?> </dd>
                <dd>借入总额： <?php echo (number_format($v["amount_total"],2,'.',',')); ?></dd>
                <dd>待收总额： <?php echo (number_format($v["due_in"],2,'.',',')); ?></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="span3">
    	<div class="wall">
        <h3>相关资料</h3>
        <div class="evidenceList">
        	<hr class="dashed" />
            <h4>合同协议</h4>
            <ul class="thumbnails" id="file_contents">
            <?php if(is_array($img)): foreach($img as $kid=>$vo): ?><li id="i<?php echo ($kid); ?>" class="thumbnail">
                    <a class="cboxElement" href="__PUBLIC__/uploadify/uploads/mark/<?php echo ($vo); ?>">
                    <img id="feil<?php echo ($kid); ?>" src="__PUBLIC__/uploadify/uploads/mark/<?php echo ($vo); ?>">
                    </a>
                </li><?php endforeach; endif; ?>
            </ul>  
            <hr class="dashed" />
            <h4>考查相册</h4>
            <ul class="thumbnails" id="file_contents">
            <?php if(is_array($imgs)): foreach($imgs as $kid=>$vo): ?><li id="i<?php echo ($kid); ?>" class="thumbnail">
                    <a class="cboxElement" href="__PUBLIC__/uploadify/uploads/mark/<?php echo ($vo); ?>">
                    <img id="feil<?php echo ($kid); ?>" src="__PUBLIC__/uploadify/uploads/mark/<?php echo ($vo); ?>">
                    </a>
                </li><?php endforeach; endif; ?>
            </ul>  
            <hr class="dashed" />
            <h4>其它证明材料</h4>
            <ul class="thumbnails" id="file_contents">
            <?php if(is_array($certi)): foreach($certi as $kid=>$vo): ?><li id="i<?php echo ($kid); ?>" class="thumbnail">
                    <a class="cboxElement" href="__PUBLIC__/uploadify/uploads/approve/<?php echo ($vo); ?>">
                    <img id="feil<?php echo ($kid); ?>" src="__PUBLIC__/uploadify/uploads/approve/<?php echo ($vo); ?>">
                    </a>
                </li><?php endforeach; endif; ?>
            </ul>  
        </div>
        </div>
    </div>
    </div>
    <?php else: ?>
    <div class="invest_login">只有<a href="__ROOT__/Logo/register.html">注册</a>用户才可以查看个人信息！现在<a href="__ROOT__/Logo/login.html">登录</a></div><?php endif; ?>
     <!-- 下半部 end-->
     <!-- 用户留言 start
     <form method="post" action="__URL__/addleave">
     <div>
     	<textarea class="editor"name="content" style="width:100%;height:300px;"></textarea>
     </div>
     <div class="invest_refer">
     <button type="submit" class="btn btn-primary span2" >确认提交</button>
     </div>
     </form>
    用户留言 end-->
</div>
<!-- container end -->
<!--底部  start-->
<!--投标记录 start-->
<div id="rEcord" class="modal hide fade invest_modals">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>投标记录</h3>
    </div>
    <?php if($_SESSION['user_uid']> 0): ?><div class="modal-body">
        <table class="table table-striped table-bordered table-condensed">
        	<thead>
              <tr>
                <th>投标人</th>
                <th>年利率</th>
                <th>投标金额(元)</th>
                <th>投标时间</th>
                <th>状态</th>
              </tr>
            </thead>
<?php if(is_array($v["bid_records"])): foreach($v["bid_records"] as $key=>$vo): ?><tbody>
              <tr>
                <td>
                <?php if($vo['actionname']['aid'] > 0): ?><span class="badge badge-success">债</span><?php endif; ?>
                  <?php echo ($vo["uname"]); ?>
                </td>
                <td>
                  <?php echo ($v["rates"]); ?>%
                </td>
                <td>
                  <?php echo (number_format($vo["actionname"]["operation"],2,'.',',')); ?>
                </td>
                <td>
                  <?php echo (date("Y-m-d H:i:s",$vo["time"])); ?>
                </td>
                <td>
                  成功
                </td>
              </tr>
            </tbody><?php endforeach; endif; ?>
        </table>
    </div>
    <?php else: ?>
    <div class="invest_login">只有<a href="__ROOT__/Logo/register.html">注册</a>用户才可以查看个人信息！现在<a href="__ROOT__/Logo/login.html">登录</a></div><?php endif; ?>
</div>
<!--投标记录 end-->
<!--投标确认 start-->
<?php if($v["type"] == 7): ?><div id="tEnder" class="modal hide fade invest_modals">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>认购确认</h3>
    </div>
	<?php if($_SESSION['user_uid']> 0): ?><div class="modal-body">
        <div class="span6">
        <dl class="invest_bid">
        	<dd class="invest_title">
            	<?php echo ($v["title"]); ?>
            </dd>
            <dd class="project-tags" style="margin-bottom: 0;">
                
                    <?php if(($v["state"] == 1) OR ($v["state"] == 10)): ?><span class="label label-success">
                         <?php if($v["type"] == 7): ?>认购中
                         <?php else: ?>
                         投标中<?php endif; ?> 
                     </span>
                    <?php else: ?>
                     <span class="label"><?php echo ($v["state_name"]); ?></span><?php endif; ?>
                   
                    <span class="tag" data-rel="tooltip" title="<?php echo ($v["type_name"]); ?>"><i class="icon icon-darkgray icon-tag"></i><?php echo ($v["type_name"]); ?></span>
                    <?php if(($v["candra"]) == "1"): ?><span class="tag" data-rel="tooltip" title="按天计算"><i class="icon icon-darkgray icon-clock"></i>天</span><?php endif; ?>
                    <?php if(($v["reward_type"]) > "0"): ?><span class="tag" data-rel="tooltip" title="奖励：<?php echo ($v["reward"]); ?>"><i class="icon icon-darkgray icon-archive"></i>奖励</span><?php endif; ?>    
                    <?php if(($v["stick"]) == "1"): ?><span class="tag" data-rel="tooltip" title="推荐"><i class="icon icon-darkgray icon-lightbulb"></i>推荐</span><?php endif; ?>
                    <?php if(($v["code"]) == "1"): ?><span class="tag" data-rel="tooltip" title="需要密码"><i class="icon icon-darkgray icon-locked"></i>密码</span><?php endif; ?>
                </dd>
            <dd>年利率：<?php echo ($v["rates"]); ?>%&nbsp;&nbsp;&nbsp;&nbsp;
            投标奖励：
            <?php echo ($v['rewards']?$v['rewards']:'无'); ?>
            </dd>
            <dd>
                每份认购金额：<?php echo (number_format($v["min_name"],2,'.',',')); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                最低认购期限：<?php echo ($v["min_limits"]); ?>
            </dd>
            <dd>借款金额：<span class="invest_price"><?php echo (number_format($v["money"],2,'.',',')); ?></span> 元&nbsp;&nbsp;&nbsp;&nbsp;还可认购：<?php echo ($v["subscribe"]); ?> 份</dd>
        	<dd>可用余额 <?php echo (number_format($money["available_funds"],2,'.',',')); ?> 元</dd>
        	
        </dl>
        </div>
        <div class="span6">
        <form method="post" action="__URL__/flowUpdate">
        <input name="id" type="hidden" value="<?php echo ($v["id"]); ?>" />
        <input name="update_uid" type="hidden" value="<?php echo ($v["uid"]); ?>" />
        <dl class="invest_bid">
            <dd>
            <span class="invest_le">认购份数：</span>
            	<a class="icon icon-blue icon-minus invest_icon" href="javascript:void(0)" onClick="Totalprice(1,<?php echo ($v["subscribe"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["min"]); ?>)"></a>
                <span class="input-append">
                	<input id="price" name="copies" type="text" value="1" class="span4"  onBlur="Totalprice(4,<?php echo ($v["subscribe"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["min"]); ?>)"/>
                    <span class="add-on" style="height: 18px;">份</span>
                </span>
                <a class="icon icon-blue icon-plus invest_icon_r" href="javascript:void(0)" onClick="Totalprice(2,<?php echo ($v["subscribe"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["min"]); ?>)"></a>
                <a href="javascript:void(0)" class="invest_icon_r" onClick="Totalprice(3,<?php echo ($v["subscribe"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["min"]); ?>)">最大份数</a>
            </dd>
            <dd>
            <span class="invest_le">认购期限：</span>
            	<a class="icon icon-blue icon-minus invest_icon" href="javascript:void(0)" onClick="Totalmonth(1,<?php echo ($v["min_limit"]); ?>,<?php echo ($v["also_deadline"]); ?>)"></a>
                <span class="input-append">
                	<input id="month" name="deadline" type="text" value="<?php echo ($v["min_limit"]); ?>" class="span4"  onBlur="Totalmonth(4,<?php echo ($v["min_limit"]); ?>,<?php echo ($v["also_deadline"]); ?>)"/>
                    <span class="add-on" style="height: 18px;"><?php if($v["candra"] == 0): ?>月<?php else: ?>天<?php endif; ?></span>
                </span>
                <a class="icon icon-blue icon-plus invest_icon_r" href="javascript:void(0)" onClick="Totalmonth(2,<?php echo ($v["min_limit"]); ?>,<?php echo ($v["also_deadline"]); ?>)"></a>
                <a href="javascript:void(0)" class="invest_icon_r" onClick="Totalmonth(3,<?php echo ($v["min_limit"]); ?>,<?php echo ($v["also_deadline"]); ?>)">最大期限</a>
            </dd>
           <!-- <dd>
            是否续购：
            <label class="radio"><input type="radio" name="continue" value="1" class="noty" checked/> 是</label>
            <label class="radio"><input type="radio" name="continue" value="0" class="noty" /> 否</label>
            </dd>-->
            <?php if(($v["code"]) == "1"): ?><dd><span class="invest_le">密码标密码：</span><input type="password" class="span6" name="password"/></dd><?php endif; ?>
            <dd><span class="invest_le">支付密码：</span><input type="password" class="span6" name="pay_password"/></dd>
            <dd>友情提示：<span class="red">初始支付密码为登陆密码。</dd>
            <dd class="controls"><span class="invest_le">验证码：</span>
            <input type="text" id="CaptchaInputText" class="span2" name="proving"/>
            <img class="CaptchaImage" id="verifyImg" src='__APP__/Public/verify/' onClick="changeVerify()" maxlength="4" title="点击刷新验证码" style="cursor:pointer;padding-left: 10px;"/>
            </dd>
            <dd><button type="submit" class="btn btn-primary span4" >确认提交</button></dd>
        </dl>
        </form>
        </div>
    </div>
    <?php else: ?>
    <div class="invest_login">只有<a href="__ROOT__/Logo/register.html">注册</a>用户才可以查看个人信息！现在<a href="__ROOT__/Logo/login.html">登录</a></div><?php endif; ?>
<?php else: ?>
<div id="tEnder" class="modal hide fade invest_modals">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>投标确认</h3>
    </div>
	<?php if($_SESSION['user_uid']> 0): ?><div class="modal-body">
        <div class="span6">
        <dl class="invest_bid">
        	<dd class="invest_title">
            <?php echo ($v["title"]); ?>
            </dd>
            <dd class="project-tags" style="margin-bottom: 0;">
                
                    <?php if(($v["state"] == 1) OR ($v["state"] == 2) OR ($v["state"] == 10)): ?><span class="label label-success">
                         <?php if($v["type"] == 7): ?>认购中
                         <?php else: ?>
                         投标中<?php endif; ?> 
                     </span>
                    <?php else: ?>
                     <span class="label"><?php echo ($v["state_name"]); ?></span><?php endif; ?>
                   
                    <span class="tag" data-rel="tooltip" title="<?php echo ($v["type_name"]); ?>"><i class="icon icon-darkgray icon-tag"></i><?php echo ($v["type_name"]); ?></span>
                    <?php if(($v["candra"]) == "1"): ?><span class="tag" data-rel="tooltip" title="按天计算"><i class="icon icon-darkgray icon-clock"></i>天</span><?php endif; ?>
                    <?php if(($v["reward_type"]) > "0"): ?><span class="tag" data-rel="tooltip" title="奖励：<?php echo ($v["reward"]); ?>"><i class="icon icon-darkgray icon-archive"></i>奖励</span><?php endif; ?>    
                    <?php if(($v["stick"]) == "1"): ?><span class="tag" data-rel="tooltip" title="推荐"><i class="icon icon-darkgray icon-lightbulb"></i>推荐</span><?php endif; ?>
                    <?php if(($v["code"]) == "1"): ?><span class="tag" data-rel="tooltip" title="需要密码"><i class="icon icon-darkgray icon-locked"></i>密码</span><?php endif; ?>
                </dd>
            <dd>年利率：<?php echo ($v["rates"]); ?>%&nbsp;&nbsp;&nbsp;&nbsp;
            投标奖励：
            <?php echo ($v['rewards']?$v['rewards']:'无'); ?>
            </dd>
            <dd>
                最小投标金额：<?php echo (number_format($v["min_name"],2,'.',',')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                最大投标金额：<?php if($v["max_name"] > 0): echo (number_format($v["max_name"],2,'.',',')); else: ?>无限<?php endif; ?>
            </dd>
            <dd>借款金额：<span class="invest_price"><?php echo (number_format($v["money"],2,'.',',')); ?></span> 元&nbsp;&nbsp;&nbsp;&nbsp;还需：<?php echo (number_format($v["surplus"],2,'.',',')); ?> 元</dd>
        	<dd>可用余额： <?php echo (number_format($money["available_funds"],2,'.',',')); ?> 元&nbsp;&nbsp;&nbsp;&nbsp;
           
            </dd>
        	
        </dl>
        </div>
        <div class="span6">
        <?php if($v["type"] == 8): ?><form method="post" action="__URL__/assureUpdate">
        <?php else: ?>
        <form method="post" action="__URL__/investUpdate"><?php endif; ?>
        <input name="id" type="hidden" value="<?php echo ($v["id"]); ?>" />
        <input name="update_uid" type="hidden" value="<?php echo ($v["uid"]); ?>" />
        <dl class="invest_bid">
            <dd>
            <span class="invest_le">
            投标金额：
            </span>
            	<a class="icon icon-blue icon-minus invest_icon" href="javascript:void(0)" onClick="Totalprice(1,<?php echo ($v["surplus"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["max"]); ?>,<?php echo ($v["min"]); ?>)"></a>
                <span class="input-prepend input-append">
                	<span class="add-on" style="height: 18px;">￥</span>
                	<input id="price" name="price" type="text" value="<?php echo ($v["min"]); ?>" class="span4"  onBlur="Totalprice(4,<?php echo ($v["surplus"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["max"]); ?>,<?php echo ($v["min"]); ?>)"/>
                    <span class="add-on" style="height: 18px;">.00</span>
                </span>
                <a class="icon icon-blue icon-plus invest_icon_r" href="javascript:void(0)" onClick="Totalprice(2,<?php echo ($v["surplus"]); ?>,<?php echo ($money["available_funds"]); ?>,<?php echo ($v["max"]); ?>,<?php echo ($v["min"]); ?>)"></a>
                <a class ="invest_icon_r" href="javascript:void(0)" onClick="Totalprice(3,<?php echo ($v["surplus"]); ?>,<?php echo ($money["available_funds"]); ?>)">最大</a>
            </dd>
            <?php if(($v["code"]) == "1"): ?><dd><span class="invest_le">密码标密码：</span><input type="password" class="span6" name="password"/></dd><?php endif; ?>
            <dd><span class="invest_le">支付密码：</span><input type="password" class="span6" name="pay_password"/></dd>
            <dd>友情提示：<span class="red">初始支付密码为登陆密码。</dd>
            <dd class="controls"><span class="invest_le">验证码：</span>
            <input type="text" id="CaptchaInputText" class="span2" name="proving"/>
            <img class="CaptchaImage" id="verifyImg" src='__APP__/Public/verify/' onClick="changeVerify()" maxlength="4" title="点击刷新验证码" style="cursor:pointer;padding-left: 10px;"/>
            </dd>
            <dd><button type="submit" class="btn btn-primary span4" >确认提交</button></dd>
        </dl>
        </form>
        </div>
    </div>
    <?php else: ?>
    <div class="invest_login">只有<a href="__ROOT__/Logo/register.html">注册</a>用户才可以查看个人信息！现在<a href="__ROOT__/Logo/login.html">登录</a></div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<!--二维码-->
<script>
function qrcode(id){
	var qrd=$('#qrd'+id).val();
	if(qrd==1){
		$('#qrcode'+id).fadeIn("slow");
		$('#qrd'+id).val(0);
	}else{
		$('#qrcode'+id).fadeOut("slow");
		$('#qrd'+id).val(1);
	}
	var loading='<div class="invest_loading"><div><img src="__PUBLIC__/bootstrap/img/spinner-mini.gif"/></div><div></div> </div>';
		$("#qrdimg"+id).html(loading);
	$("#qrdimg"+id).load("__URL__/qrcodeajax", {id:id});
}
</script>
<!--二维码 end-->
</script>
<!--二维码 end-->
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
<script src="__PUBLIC__/bootstrap/js/jquery.colorbox.min.js"></script>
<script>
$(document).ready(function(){
//gallery image controls example
	//gallery delete
	$('.thumbnails').on('click','.gallery-delete',function(e){
		e.preventDefault();
		//get image id
		//alert($(this).parents('.thumbnail').attr('id'));
		$(this).parents('.thumbnail').fadeOut();
	});
	//gallery edit
	$('.thumbnails').on('click','.gallery-edit',function(e){
		e.preventDefault();
		//get image id
		//alert($(this).parents('.thumbnail').attr('id'));
	});

	//gallery colorbox
	$('.thumbnail a').colorbox({rel:'thumbnail a', transition:"elastic", maxWidth:"95%", maxHeight:"95%"});
	$('.Thumbnail a').colorbox({rel:'Thumbnail a', transition:"elastic", maxWidth:"95%", maxHeight:"95%"});
	//gallery fullscreen
	$('#toggle-fullscreen').button().click(function () {
		var button = $(this), root = document.documentElement;
		if (!button.hasClass('active')) {
			$('#thumbnails').addClass('modal-fullscreen');
			if (root.webkitRequestFullScreen) {
				root.webkitRequestFullScreen(
					window.Element.ALLOW_KEYBOARD_INPUT
				);
			} else if (root.mozRequestFullScreen) {
				root.mozRequestFullScreen();
			}
		} else {
			$('#thumbnails').removeClass('modal-fullscreen');
			(document.webkitCancelFullScreen ||
				document.mozCancelFullScreen ||
				$.noop).apply(document);
		}
	});
});
</script>