<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"C:\wwwroot\AMS\public/../application/admin\view\company_release_fullposition\fsedit.html";i:1524276381;s:66:"C:\wwwroot\AMS\public/../application/admin\view\template\base.html";i:1488874432;s:77:"C:\wwwroot\AMS\public/../application/admin\view\template\javascript_vars.html";i:1488874432;}*/ ?>
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
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>招聘公司：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="companyName" class="select"  datatype="*" nullmsg="请选择公司">
                        <option value="<?php echo isset($vo['companyName']) ? $vo['companyName'] :  ''; ?>"><?php echo isset($vo['companyName']) ? $vo['companyName'] :  '请选择公司'; ?></option>
                        <?php if(is_array($schoolName) || $schoolName instanceof \think\Collection || $schoolName instanceof \think\Paginator): $i = 0; $__LIST__ = $schoolName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                           <option value="<?php echo $v1['schoolName']; ?>"><?php echo $v1['schoolName']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>


        <div class="row cl" >
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>工作区域：</label>
            <div class="formControls col-xs-1 col-sm-1">
                <div class="select-box">
                    <select class="select" id="s_province" name="province" datatype="*" nullmsg="请选择省"></select>
                </div>
            </div>
            <div class="col-xs-1 col-sm-1"></div>
            <div class="formControls col-xs-1 col-sm-1">
                <div class="select-box">
                    <select class="select" id="s_city" name="city" datatype="*" nullmsg="请选择市"></select>
                </div>
            </div>
            <div class="col-xs-1 col-sm-1"></div>
            <div class="formControls col-xs-1 col-sm-1">
                <div class="select-box">
                    <select class="select" id="s_county" name="area"  datatype="*" nullmsg="请选择区"></select>
                </div>
            </div>
            <div class="col-xs-1 col-sm-1"></div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>职位名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="职位名称(5-12个字)" id="positionName" name="positionName" value="<?php echo isset($vo['positionName']) ? $vo['positionName'] :  ''; ?>"  datatype="/^[\u4e00-\u9fa5A-Za-z0-9]{5,12}$/" nullmsg="请填写职位名称">

            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>



        <style type="text/css">
            .search-work{width:80%;position: absolute;z-index: 5;background: #fff;border:1px solid #7A9CD3;top:40px;display: none;}
            .search-work>ul li{width:20%;float:left;line-height: 2;cursor:pointer;padding-left: 20px}
            .search-work>ul li:hover,.search-work-child>ul li:hover{background: #1E90FF;color:#fff}
            .search-work-child{padding:10px 20px;position:relative}
            .search-work-child>ul{position: absolute;top: 40px;background: #fff;border:1px solid #7A9CD3;width:35%;display: none}
            .search-work-child>ul li{line-height: 2;cursor:pointer;padding:0 10px;}
        </style>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>工作类别：</label>
            <div class="formControls col-xs-6 col-sm-6" style="position: relative;">
                <input type="text" class="input-text" placeholder="工作类别" id="jobName" name="type" value="<?php echo isset($type_name) ? $type_name :  ''; ?>"  datatype="*" nullmsg="请填写工作类别" readonly="readonly">
                <div class="search-work">
                    <div class="search-work-child">
                        <input type="" name="" id="jobNameSearch" value="" placeholder="搜索类别" class="input-text" style="width: 50%;"/>
                        <ul id="searchValue">
                            <!--用来存放返回的搜索结果-->
                        </ul>
                    </div>
                    <ul>
                        <?php if(is_array($all_type) || $all_type instanceof \think\Collection || $all_type instanceof \think\Paginator): $i = 0; $__LIST__ = $all_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vt): $mod = ($i % 2 );++$i;?>
                            <li><?php echo $vt['name']; ?></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>





        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>工作经验要求：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="experience" class="select"  datatype="*" nullmsg="请选择工作经验">
                        <option value="<?php echo isset($vo['experience']) ? $vo['experience'] :  ''; ?>"><?php echo isset($experience_name) ? $experience_name :  '请选择工作经验'; ?></option>
                        <option value="1">一年</option>
                        <option value="2">两年</option>
                        <option value="3">三年</option>
                        <option value="4">三年以上</option>
                        <option value="5">无经验</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>学历要求：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="education" class="select"  datatype="*" nullmsg="请选择学历">
                        <option value="<?php echo isset($vo['education']) ? $vo['education'] :  ''; ?>"><?php echo isset($education_name) ? $education_name :  '请选择学历要求'; ?></option>
                        <option value="1">高中</option>
                        <option value="2">专科</option>
                        <option value="3">本科</option>
                        <option value="4">本科以上</option>
                        <option value="5">不限</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>招聘人数：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="招聘人数" name="count" value="<?php echo isset($vo['count']) ? $vo['count'] :  ''; ?>"  datatype="*" nullmsg="请填写招聘人数">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>性别要求：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="sex" class="select"  datatype="*" nullmsg="请选择性别要求">
                        <option value="<?php echo isset($vo['sex']) ? $vo['sex'] :  ''; ?>"><?php echo isset($sex_name) ? $sex_name :  '请选择性别要求'; ?></option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                        <option value="3">男女不限</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>



        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>薪资待遇：</label>
            <div class="formControls col-xs-3 col-sm-3">
                <div class="select-box" style="padding: 0;border: none;">
                    <select name="salary1" id="salary1" class="select"  datatype="*" nullmsg="请选择薪资待遇" style="padding:4px 5px;width:45%;float: left;border:1px solid #ddd;">
                        <option value="<?php echo isset($salary1) ? $salary1 :  ''; ?>"><?php echo isset($salary1) ? $salary1 :  '请选择薪资'; ?></option>
                        <option value="1k">1k</option>
                        <option value="2k">2k</option>
                        <option value="3k">3k</option>
                        <option value="4k">4k</option>
                        <option value="5k">5k</option>
                        <option value="6k">6k</option>
                        <option value="7k">7k</option>
                        <option value="8k">8k</option>
                        <option value="9k">9k</option>
                        <option value="10k">10k</option>
                        <option value="11k">11k</option>
                        <option value="12k">12k</option>
                        <option value="13k">13k</option>
                        <option value="14k">14k</option>
                        <option value="15k">15k</option>
                        <option value="16k">16k</option>
                        <option value="17k">17k</option>
                        <option value="18k">18k</option>
                        <option value="19k">19k</option>
                        <option value="20k">20k</option>
                    </select>
                    <div style="width: 10%;float: left;text-align: center;line-height: 22px;">-</div>
                    <select name="salary2" id="salary2" class="select"  datatype="*" nullmsg="请选择薪资待遇" style="padding:4px 5px;width:45%;float: left;border:1px solid #ddd;">
                            <option value="<?php echo isset($salary2) ? $salary2 :  ''; ?>"><?php echo isset($salary2) ? $salary2 :  '请选择薪资'; ?></option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>



        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>工作内容：</label>
            <div class="formControls col-xs-6 col-sm-6">
            	<textarea cols="" rows="" class="textarea" name="content" id="nr"  placeholder="工作内容"  datatype="*" nullmsg="请填写工作内容"><?php echo isset($vo['content']) ? $vo['content'] :  ''; ?></textarea>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>招聘要求：</label>
            <div class="formControls col-xs-6 col-sm-6">
            	<textarea cols="" rows="" class="textarea" name="requirement" id="yq"  placeholder="招聘要求" datatype="*" nullmsg="请填写招聘要求"><?php echo isset($vo['requirement']) ? $vo['requirement'] :  ''; ?></textarea>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>福利待遇：</label>
            <div class="formControls col-xs-6 col-sm-6">
            	<textarea cols="" rows="" class="textarea" name="welfare" id="yq"  placeholder="福利待遇" datatype="*" nullmsg="请填写福利待遇"><?php echo isset($vo['welfare']) ? $vo['welfare'] :  ''; ?></textarea>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>联系人：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="联系人" name="contacts" value="<?php echo isset($vo['contacts']) ? $vo['contacts'] :  ''; ?>"  datatype="*" nullmsg="请填写联系人">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>联系电话：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="联系电话" name="phone" value="<?php echo isset($vo['phone']) ? $vo['phone'] :  ''; ?>"  datatype="/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/" nullmsg="请填写联系电话">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>



        <!--<div class="row cl">-->
            <!--<label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>标签：</label>-->
            <!--<div class="formControls col-xs-6 col-sm-6">-->
                <!--<div class="select-box">-->
                    <!--<select name="label" class="select"  datatype="*" nullmsg="请选择标签">-->
						<!--<option value="<?php echo isset($vo['label']) ? $vo['label'] :  ''; ?>"><?php echo isset($vo['label']) ? $vo['label'] :  '请选择标签'; ?></option>-->
                        <!--<option value="最优推荐">最优推荐</option>-->
                        <!--<option value="公司急招">公司急招</option>-->
                        <!--<option value="工资担保">工资担保</option>-->
                    <!--</select>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="col-xs-3 col-sm-3"></div>-->
        <!--</div>-->
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">标签：</label>
            <div class="skin-minimal col-xs-6 col-sm-6">

                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-0"  value="周末双休" <?php if(in_array('周末双休',$label_arr)) echo("checked");?> />
                    <label for="checkbox-0">周末双休</label>
                </div>

                <div class="check-box">
                    <input type="checkbox" name="label[]"  id="checkbox-1" value="五险一金" <?php if(in_array('五险一金',$label_arr)) echo("checked");?>>
                    <label for="checkbox-1">五险一金</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-2" value="包吃" <?php if(in_array('包吃',$label_arr)) echo("checked");?>>
                    <label for="checkbox-2">包吃</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-3" value="包住" <?php if(in_array('包住',$label_arr)) echo("checked");?>>
                    <label for="checkbox-3">包住</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-4" value="年底双薪" <?php if(in_array('年底双薪',$label_arr)) echo("checked");?>>
                    <label for="checkbox-4">年底双薪</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-5" value="加班补助" <?php if(in_array('加班补助',$label_arr)) echo("checked");?>>
                    <label for="checkbox-5">加班补助</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-6" value="房补" <?php if(in_array('房补',$label_arr)) echo("checked");?>>
                    <label for="checkbox-6">房补</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-7" value="饭补" <?php if(in_array('饭补',$label_arr)) echo("checked");?>>
                    <label for="checkbox-7">饭补</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-8" value="交通补助" <?php if(in_array('交通补助',$label_arr)) echo("checked");?>>
                    <label for="checkbox-8">交通补助</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-9" value="话补" <?php if(in_array('话补',$label_arr)) echo("checked");?>>
                    <label for="checkbox-9">话补</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-10" value="定期体检" <?php if(in_array('定期体检',$label_arr)) echo("checked");?>>
                    <label for="checkbox-10">定期体检</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-11" value="免费培训" <?php if(in_array('免费培训',$label_arr)) echo("checked");?>>
                    <label for="checkbox-11">免费培训</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-12" value="旅游奖励" <?php if(in_array('旅游奖励',$label_arr)) echo("checked");?>>
                    <label for="checkbox-12">旅游奖励</label>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="label[]" id="checkbox-13" value="其它" <?php if(in_array('其它',$label_arr)) echo("checked");?>>
                    <label for="checkbox-13">其它</label>
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
<script type="text/javascript" src="__STATIC__/js/area.js"></script>


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



        //关于薪资待遇,当选择第一个薪资时，第二个薪资最低则相对加2
        //当第一个薪资内容发生改变时
        $('#salary1').change(function(){
            salaryVal = $('#salary1').val(); //如4k ,字符串类型
            if(salaryVal!=''){
                salaryVal2 = salaryVal.replace('k',''); //4, 字符串类型
                //间距是2
                $('#salary2').html('');  //清空所有内容
                first = '<option value="<?php echo isset($salary2) ? $salary2 :  ''; ?>"><?php echo isset($salary2) ? $salary2 :  '请选择薪资'; ?></option>';
                $('#salary2').append(first);
                for(var i=2;i<6;i++){
                    salaryVal3 = parseInt(salaryVal2)+i;
                    $('#salary2').append('<option value="'+salaryVal3+'k">'+salaryVal3+'k</option>');
                }
            }else{
                $('#salary2').html(''); //清空所有内容
                first2 = '<option value="<?php echo isset($salary2) ? $salary2 :  ''; ?>"><?php echo isset($salary2) ? $salary2 :  '请选择薪资'; ?></option>';
                $('#salary2').append(first2);
            }
        });



        //工作类别,当在工作类别搜索框中输入工作类别关键字时，此时会从工作类型表（tp_work_type）中查询所有相匹配的工作类型
        $('#jobName').click(function(){
            $('.search-work').toggle();

            //当搜索框获得内容时
            $('#jobNameSearch').bind('input propertychange',function(){
                type = $('#jobNameSearch').val(); //获取搜索框的值
                if(type != ''){
                    $('#searchValue').show();
                    $.ajax({
                        type:'get',//选择get方式提交
                        url:'<?php echo url("CompanyReleaseFullposition/selectWorkType"); ?>',//将数据提交的页面
                        data:{type:type},//传值
                        success: function(data)
                        {

                            $('#searchValue').html(''); //先清空所有内容
                            arr = data.split(',');
                            if(arr.length>1){
                                for(x in arr)
                                {
                                    $('#searchValue').append('<li>'+arr[x]+'</li>');
                                }
                            }else{
                                $('#searchValue').append('<li>'+data+'</li>');
                            }

                        }
                    })
                }else{
                    $('#searchValue').hide(); //将放匹配选项的框隐藏
                }
            });

            //选择类型以后
            $(document).on('click', '.search-work li', function(e) {
                $('.search-work').hide();
                $('#jobName').val($(this).html());
                $('#jobName').focus();
                $('#jobNameSearch').val('');
            });


            $('#jobNameSearch').blur(function(){
                $('#searchValue').slideUp('fast');
            });

        });



    });


    var s=["s_province","s_city","s_county"];//三个select的name
//    var opt0 = ["","",""];//初始值

    var province = "<?php echo isset($vo['province']) ? $vo['province'] :  ''; ?>";
    var city = "<?php echo isset($vo['city']) ? $vo['city'] :  ''; ?>";
    var area = "<?php echo isset($vo['area']) ? $vo['area'] :  ''; ?>";
    var opt0 = [""+province+"",""+city+"",""+area+""]; //初始值

    function _init_area(){  //初始化函数
        for(i=0;i<s.length-1;i++){
            document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
        }
        change(0);
    }
    _init_area();


</script>


</body>
</html>