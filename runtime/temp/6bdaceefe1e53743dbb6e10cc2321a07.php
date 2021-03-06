<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"C:\wwwroot\AMS\public/../application/admin\view\student_classroom\fsedit.html";i:1520651497;s:66:"C:\wwwroot\AMS\public/../application/admin\view\template\base.html";i:1488874432;s:77:"C:\wwwroot\AMS\public/../application/admin\view\template\javascript_vars.html";i:1488874432;}*/ ?>
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
    <form class="form form-horizontal" id="form" method="post" action="<?php echo \think\Request::instance()->baseUrl(); ?>">
        <input type="hidden" name="id" value="<?php echo isset($vo['id']) ? $vo['id'] :  ''; ?>">



        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>校区名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="schoolName" class="select"  datatype="*" nullmsg="请选择校区">
                        <option value ="<?php echo isset($vo['schoolName']) ? $vo['schoolName'] :  ''; ?>" selected><?php echo isset($vo['schoolName']) ? $vo['schoolName'] :  '请选择校区'; ?></option>
                        <?php if(is_array($schoolName) || $schoolName instanceof \think\Collection || $schoolName instanceof \think\Paginator): $i = 0; $__LIST__ = $schoolName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                        <option value ="<?php echo $v1['schoolName']; ?>"><?php echo $v1['schoolName']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>



        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>班级名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="className" class="select"  datatype="*" nullmsg="请选择班级">
                        <option value ="<?php echo isset($vo['className']) ? $vo['className'] :  ''; ?>" selected><?php echo isset($vo['className']) ? $vo['className'] :  '请选择班级'; ?></option>
                        <?php if(is_array($className2) || $className2 instanceof \think\Collection || $className2 instanceof \think\Paginator): $i = 0; $__LIST__ = $className2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <option value ="<?php echo $v2['class']; ?><?php echo $v2['className']; ?>"><?php echo $v2['class']; ?><?php echo $v2['className']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>



        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>发布时间：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text Wdate" placeholder="发布时间" name="release_time" value="<?php echo isset($vo['release_time']) ? $vo['release_time'] :  ''; ?>"   onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})"   datatype="*" nullmsg="请填写发布时间">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>课程时间：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text Wdate" placeholder="课程时间" name="course_time" value="<?php echo isset($vo['course_time']) ? $vo['course_time'] :  ''; ?>"   onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})"   datatype="*" nullmsg="请填写上课时间">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span style="position: relative;left: -10px"><b>上午课程</b></span></label>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">课程名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="请选择课程" name="morning" id="morning" value="<?php echo isset($morning_course) ? $morning_course :  ''; ?>" >


            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">课程列表：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="courselist" id="courselist" class="select">
                        <option value ="" disabled selected>请选择课程</option>
                        <?php if(is_array($allcourse) || $allcourse instanceof \think\Collection || $allcourse instanceof \think\Paginator): $i = 0; $__LIST__ = $allcourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
                        <option value ="<?php echo $v3['id']; ?>"><?php echo $v3['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>




        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span style="position: relative;left: -10px"><b>下午课程</b></span></label>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">课程名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="请选择课程" name="afternoon" id="afternoon" value="<?php echo isset($afternoon_course) ? $afternoon_course :  ''; ?>" >


            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">课程列表：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box" >
                    <select name="courselist2" id="courselist2" class="select">
                        <option value ="" disabled selected>请选择课程</option>
                        <?php if(is_array($allcourse) || $allcourse instanceof \think\Collection || $allcourse instanceof \think\Paginator): $i = 0; $__LIST__ = $allcourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
                        <option value ="<?php echo $v4['id']; ?>"><?php echo $v4['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>


        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__LIB__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="__LIB__/showdown/1.4.2/showdown.min.js"></script>
<script>window.UEDITOR_HOME_URL = '__LIB__/ueditor/1.4.3/'</script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script>
    $(function () {


        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret){
                ajax_progress(ret);
            }
        });



        //上午课程的选择
        $('#courselist').change(function(){
            //开始追加课程名
            var morning_val = $('#morning').val();
            var a = $('#courselist option:checked').text(); //显示选中的值
            $('#morning').val((morning_val+','+a).replace(/^,+/,"").replace(/,+$/,""));//追加课程名

            //变回初始状态
            $('#courselist').find("option").eq(0).prop("selected",true);
        });


        //下午课程的选择
        $('#courselist2').change(function(){
            var afternoon_val = $('#afternoon').val();
            var b = $('#courselist2 option:checked').text(); //弹出显示值
            $('#afternoon').val((afternoon_val+','+b).replace(/^,+/,"").replace(/,+$/,""));


            $('#courselist2').find("option").eq(0).prop("selected",true);
        });



    })

</script>

</body>
</html>