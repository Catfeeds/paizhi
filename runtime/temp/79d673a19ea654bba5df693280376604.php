<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"D:\demo\PHPTutorial\WWW\AMS2\public/../application/admin\view\school_management\guarantee.html";i:1526519796;s:80:"D:\demo\PHPTutorial\WWW\AMS2\public/../application/admin\view\template\base.html";i:1526016189;s:91:"D:\demo\PHPTutorial\WWW\AMS2\public/../application/admin\view\template\javascript_vars.html";i:1526016189;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>

<nav class="breadcrumb">
    <div id="nav-title"></div>
    <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<div class="page-container">
	<form class="form" id="form" method="post" action="<?php echo url('SchoolManagement/pay'); ?>">
    <div class="row cl">
    	<div class="col-xs-2 col-sm-2"></div>
    	<div class="col-xs-8 col-sm-8">
    		<div class="three steps mb-30">
			  <span class="active step">1. 填写预招人数信息</span>
			  <span class="disabled step">2. 确认并支付</span>
			  <span class="disabled step">3. 完成</span>
			</div>
    		<div style="border: 1px solid #fea128;padding:10px;">为了更好的解决快速招聘困难，在没有建立信用保障的基础上，兼职短工工资结算无法保障，派职网新增工资担保机制，即根据企业用工人数，用工时长将工资一次存入派职网工资发放帐户，根据企业上传实际用工考勤结算表，由派职网进行工资发放及余额结算，派职网不收取招聘费用。</div>
    		<h2 class="h2">
    			填写预招人数信息
    			<!--<span class="add-post">添加新的岗位</span>-->
    		</h2>
    		<div class="allpost">
	    		<div class="mt-20 post">
	    			<div class="row cl">
	    				<div class="col-xs-6 col-sm-6">
				            <lable class="col-xs-5 col-sm-5 text-r"><span class="c-red">*</span>岗位名称:</lable>
				            <div class="col-xs-7 col-sm-7">
				            	<input type="text" class="input-text " name="number" placeholder="请填写预招岗位名称">
				            </div>
				        </div>
				        <div class="col-xs-6 col-sm-6">
				            <lable class="col-xs-4 col-sm-4 text-r"><span class="c-red">*</span>岗位薪资:</lable>
				            <div class="col-xs-7 col-sm-7">
				            	<input type="text" class="input-text jobpay f-l" name="number" placeholder="岗位薪资" id="salarymoney" style="width:60%;">
				            	<div class="select-box f-l" style="width:40%;">
				            		<select name="property" class="select f-l"  datatype="*" nullmsg="请选择工作时长" id="salaryunit">
										<option value="">单位</option>
				                        <option value="1">元/时</option>
				                        <option value="2">元/天</option>
				                        <option value="3">元/月</option>
				                    </select>
				            	</div>
				            </div>
				        </div>
	    			</div>
	    			<div class="row cl">
	    				<div class="col-xs-6 col-sm-6">
				            <lable class="col-xs-5 col-sm-5 text-r"><span class="c-red">*</span>招聘人数(人):</lable>
				            <div class="col-xs-7 col-sm-7">
				            	<input type="text" class="input-text" name="number" placeholder="招聘人数" id="salaryman">
				            </div>
				        </div>
				        <div class="col-xs-6 col-sm-6">
				            <lable class="col-xs-4 col-sm-4 text-r"><span class="c-red">*</span>用工时长(时):</lable>
				            <div class="col-xs-7 col-sm-7">
					            <div class="select-box">
				                    <select name="property" class="select"  datatype="*" nullmsg="请选择工作时长" id="salaryh">
										<option value="">请选择工作时长</option>
				                        <option value="0.5">0.5小时</option>
				                        <option value="1">1小时</option>
				                        <option value="1.5">1.5小时</option>
				                        <option value="2">2小时</option> 
				                        <option value="2.5">2.5小时</option>
				                        <option value="3">3小时</option>
				                        <option value="3.5">3.5小时</option>
				                        <option value="4">4小时</option>
				                        <option value="4.5">4.5小时</option>
				                        <option value="5">5小时</option>
				                        <option value="5.5">5.5小时</option>
				                        <option value="6">6小时</option>
				                        <option value="6.5">6.5小时</option>
				                        <option value="7">7小时</option>
				                        <option value="7.5">7.5小时</option>
				                        <option value="8">8小时</option>
				                        <option value="8.5">8.5小时</option>
				                        <option value="9">9小时</option>
				                        <option value="9.5">9.5小时</option>
				                        <option value="10">10小时</option>
				                        <option value="10.5">10.5小时</option>
				                        <option value="11">11小时</option>
				                        <option value="11.5">11.5小时</option>
				                        <option value="12">12小时</option>
				                    </select>
				                </div>
				            </div>
				        </div>
	    			</div>
	    			<div class="row cl">
	    				<div class="col-xs-6 col-sm-6">
	    					<lable class="col-xs-5 col-sm-5 text-r"><span class="c-red">*</span><span id="jswork">工作天数（天）：</span></lable>
				            <div class="col-xs-7 col-sm-7">
				            	<input type="text" class="input-text" placeholder="工作天数" name="" datatype="*" nullmsg="请填写工作天数" id="salaryday">
				            </div>
	    				</div>
	    			</div>
	    			
	    		</div>
    		</div>
    		<div>
    			<div class="row cl">
		        	<div class="col-xs-6 col-sm-6">
			            <!--<lable class="col-xs-5 col-sm-5 text-r f-18"><strong>合计:</strong></lable>
			            <div class="col-xs-5 col-sm-5">
			            	<input type="text" class="input-text " name="number"  readonly="readonly" id="allpay">
			            </div>
			            <span class="lh-30">元</span>-->
			           	<p class="f-16">工资合计：<span class="c-warning f-20" id="salary">0</span> 元</p> 
			        </div>
			        <div class="col-xs-6 col-sm-6">
			            <input type="submit" class="btn btn-primary radius f-r" name="" id="" value="存入工资"/>
			        </div>
		        </div>
    		</div>
    	</div>
    	<div class="col-xs-2 col-sm-2"></div>
    </div>
    </form>
</div>
<style>
	.steps .step.active, .active.step{background: #fea128;}
	.steps .step.active:after, .active.steps:after{border-left-color: #fea128;}
	.h2{border-left: 4px solid #fea128;line-height:20px;font-size: 20px;height: 20px;padding:5px 10px;margin: 30px 0;}
	.post{border:1px solid #ddd;padding-bottom: 20px;background: #f2f2f2;}
	.add-post{float: right;background: #fea128;font-size: 16px;color: #fff;padding:5px;border-radius: 4px;cursor:pointer}
	.remove-post{float: right;margin-right:20px;}
</style>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script src="__LIB__/laypage/1.3/laypage.js"></script>
<script src="__LIB__/lightbox2/js/lightbox.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.remove-post').click(function(){
			var sub = $(this).index(); 
			layer.confirm('是否要删除该职位？', {
	            btn : [ '确定', '取消' ]
	        }, function(index) {
	            layer.close(index);
	            $('.post').eq(sub).remove();
	        }); 
		})

		
		
		$('.post').on('change keyup',function(){
        	var salaryUnit = $('#salaryunit').val();
        	var salaryMoney = $('#salarymoney').val();
        	var salaryH = $('#salaryh').val();
	        var salaryMan = $('#salaryman').val();
	        var salaryDay = $('#salaryday').val();
        	if(salaryUnit==1){
	        	$('#salary').text(salaryMoney*salaryH*salaryMan*salaryDay);
	        	$('#jswork').text('工作天数（天）：')
	        	$('#salaryday').attr('placeholder','工作天数')
        	}else if(salaryUnit==2){
        		$('#salary').text(salaryMoney*salaryMan*salaryDay)
        		$('#jswork').text('工作天数（天）：')
	        	$('#salaryday').attr('placeholder','工作天数')
        	}else if(salaryUnit==3){
        		$('#salary').text(salaryMoney*salaryMan*salaryDay);
        		$('#jswork').text('工作月数（月）：');
        		$('#salaryday').attr('placeholder','工作月数')
        	}
        })
	})
</script>

</body>
</html>