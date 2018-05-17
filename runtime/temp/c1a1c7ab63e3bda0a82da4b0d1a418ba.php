<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:82:"C:\wwwroot\AMS\public/../application/admin\view\company_position_enroll\index.html";i:1523582384;s:66:"C:\wwwroot\AMS\public/../application/admin\view\template\base.html";i:1488874432;s:77:"C:\wwwroot\AMS\public/../application/admin\view\template\javascript_vars.html";i:1488874432;s:81:"C:\wwwroot\AMS\public/../application/admin\view\company_position_enroll\form.html";i:1524447012;s:79:"C:\wwwroot\AMS\public/../application/admin\view\company_position_enroll\th.html";i:1524446620;s:79:"C:\wwwroot\AMS\public/../application/admin\view\company_position_enroll\td.html";i:1524446807;}*/ ?>
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
    <form class="mb-20" method="get" action="<?php echo \think\Url::build(\think\Request::instance()->action()); ?>">

    <!--<input type="text" class="input-text Wdate" style="width:250px" placeholder="发布时间" name="release_time" value="<?php echo \think\Request::instance()->param('release_time'); ?>"  onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})"  >-->


    <div class="select-box" style="width:250px">
        <select name="companyName" class="select" datatype="*" nullmsg="请选择公司名称" >
            <option value ="">请选择公司名称</option>
            <?php if(is_array($companyName) || $companyName instanceof \think\Collection || $companyName instanceof \think\Paginator): $i = 0; $__LIST__ = $companyName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
               <option value ="<?php echo $vo['companyName']; ?>"><?php echo $vo['companyName']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>


    <div class="select-box" style="width:250px">
        <select name="area" class="select" datatype="*" nullmsg="请选择工作区域" >
            <option value ="">请选择工作区域</option>
            <?php if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
            <option value ="<?php echo $v1['area']; ?>"><?php echo $v1['area']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>


    <div class="select-box" style="width:250px">
        <select name="position_type" class="select" datatype="*" nullmsg="请选择职位种类" >
            <option value ="">请选择职位种类</option>
            <option value ="1">兼职</option>
            <option value ="2">全职</option>
        </select>
    </div>






    <div class="select-box" style="width:250px">
        <select name="ishire" class="select" datatype="*" nullmsg="请选择录用状态" >
            <option value ="">请选择录用状态</option>

            <option value ="1">已录用</option>
            <option value ="0">未录用</option>
        </select>
    </div>







    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <!--<?php if (\Rbac::AccessCheck('fadd')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="full_page('全屏添加','<?php echo \think\Url::build('fadd', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 全屏添加</a><?php endif; if (\Rbac::AccessCheck('forbid')) : ?><a href="javascript:;" onclick="forbid_all('<?php echo \think\Url::build('forbid', []); ?>')" class="btn btn-warning radius mr-5"><i class="Hui-iconfont">&#xe631;</i> 禁用</a><?php endif; if (\Rbac::AccessCheck('resume')) : ?><a href="javascript:;" onclick="resume_all('<?php echo \think\Url::build('resume', []); ?>')" class="btn btn-success radius mr-5"><i class="Hui-iconfont">&#xe615;</i> 恢复</a><?php endif; if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; if (\Rbac::AccessCheck('echarts')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('图形展示','<?php echo \think\Url::build('echarts', []); ?>')"><i class="Hui-iconfont">&#xe61e;</i> 图形展示</a><?php endif; ?>-->
             <?php if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo isset($count) ? $count :  '0'; ?></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="">序号</th>
<th width=""><?php echo sort_by('公司名称','companyName'); ?></th>
<th width="">职位名称</th>
<th width="">工作区域</th>
<th width="">职位种类</th>

<th width="">姓名</th>
<th width="">年龄</th>
<th width="">电话</th>
<th width="">报名时间</th>
<th width="">信用值</th>
<th width="">查看简历</th>
<th width="">是否录用</th>


























            <!--<th width="70">操作</th>-->
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['id']; ?></td>
<td><?php echo $vo['companyName']; ?></td>

<td>
    <?php
       echo $positionInfo[$vo['pid']];
    ?>
</td>
<td><?php echo $vo['area']; ?></td>
<td>
    <?php if($vo['position_type'] == 1): ?>
         兼职
    <?php endif; if($vo['position_type'] == 2): ?>
         全职
    <?php endif; ?>
</td>


<td>
    <?php
      echo $patriarchInfo[$vo['user_id']]['name'];
    ?>
</td>

<td>

    <?php

       $birthdate = $patriarchInfo[$vo['user_id']]['birthdate'];
       $birthdateTime = date('Y',strtotime($patriarchInfo[$vo['user_id']]['birthdate']));
       $nowTime = date('Y',time());
       $age = $nowTime-$birthdateTime;
       echo $age;

    ?>
</td>

<td>

    <?php
       echo $patriarchInfo[$vo['user_id']]['phone'];
    ?>
</td>

<td><?php echo $vo['enroll_time']; ?></td>
<td>
    <?php
       echo $patriarchInfo[$vo['user_id']]['score'];
    ?>
</td>

<td>
    <!--<a href="<?php echo url('CompanyPositionEnroll/selectResume',array('user_id'=>$vo['user_id'])); ?>" style="color: #148cf1">查看简历</a>-->

    <a href="javascript:;" onclick="layer_open('个人简历', '<?php echo \think\Url::build('CompanyPositionEnroll/selectResume',array('user_id'=>$vo['user_id'])); ?>')" style="color: #148cf1">查看简历</a>
</td>

<td>
    <?php if($vo['ishire'] == 0): ?>
        <a id="info<?php echo $vo['id']; ?>" href="javascript:;"  onclick="ishire(<?php echo $vo['id']; ?>)"  style="color: #148cf1">未录用</a>
    <?php endif; if($vo['ishire'] == 1): ?>
        <a id="info<?php echo $vo['id']; ?>" href="javascript:;" onclick="ishire(<?php echo $vo['id']; ?>)"  style="color: #148cf1">已录用</a>
    <?php endif; ?>

</td>







            <!--<td class="f-14">-->
                <!--<?php echo show_status($vo['status'],$vo['id']); ?>-->
                <!--<?php if (\Rbac::AccessCheck('fsedit')) : ?> <a title="全屏编辑" href="javascript:;" onclick="full_page('全屏编辑','<?php echo \think\Url::build('fsedit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; ?>-->
                <!--<?php if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?>-->
            <!--</td>-->
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo isset($page) ? $page :  ''; ?></div>
</div>


<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    function ishire(id)
    {
        $(function(){
            $.ajax({
                type:'get',//选择get方式提交
                url:'<?php echo url("CompanyPositionEnroll/ishire"); ?>',//将数据提交的页面
                data:{id:id},//传值
                success: function(data)
                {
                    if(data == 'hire'){
                        $('#info'+id).text('已录用');
                    }
                    if(data == 'nohire'){
                        $('#info'+id).text('未录用');
                    }
                }
            })
        })
    }
</script>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>