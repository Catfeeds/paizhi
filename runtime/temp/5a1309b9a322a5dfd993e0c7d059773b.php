<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\inetpub\wwwroot\anhui\public/../application/admin\view\pub\evpi.html";i:1524641243;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link href="__STATIC__/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>派职网企业管理系统</title>
    <meta name="keywords" content="<?php echo \think\Config::get('site.keywords'); ?>">
    <meta name="description" content="<?php echo \think\Config::get('site.keywords'); ?>">
</head>
<body>
<!--<div class="header">
    <h1>校园管理系统</h1>
</div>-->
<div class="loginWraper">
    <div id="loginform" class="loginBox loginBox-prefect">
    	<h1 class="login-company">完善企业信息</h1>
        <form class="form form-horizontal" action="<?php echo url('Pub/updateInfo'); ?>" method="post" id="form">
            <div class="row cl">
                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;">帐号</label>
                <div class="formControls col-xs-6 col-ms-6">
                    <input  type="text" name="companyAccount" id="companyAccount" class="input-text size-L" readonly="readonly" placeholder="点击生成公司账号" >
                    <!--<a href="javascript:;" class="sms-code" id="get_account" title="点击获取">获取账号</a>-->
                    <input type="button" href="javascript:;" class="sms-code btn btn-success" id="get_account" title="点击获取" value="获取账号"/>
                </div>
                <div class="col-xs-3 col-ms-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;">联系电话</label>
                <div class="formControls col-xs-6 col-ms-6">
                    <input type="text" name="number" id="number" class="input-text size-L" readonly="readonly" value="<?php echo $phone; ?>">
                </div>
                <div class="col-xs-3 col-ms-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;">公司注册号</label>
                <div class="formControls col-xs-6 col-ms-6">
                    <input type="text" name="reg" id="reg" class="input-text size-L"  placeholder="注册号或统一信用代码">
                </div>
                <div class="col-xs-3 col-ms-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;">公司名称</label>
                <div class="formControls col-xs-6 col-ms-6">
                    <input type="text" name="companyName" id="companyName" class="input-text size-L" placeholder="公司名称（工商注册全称）">
                </div>
                <div class="col-xs-3 col-ms-3"></div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;">公司法人</label>
                <div class="formControls col-xs-6 col-ms-6">
                    <input type="text" name="corporation" id="corporation" class="input-text size-L" placeholder="公司法人" >
                </div>
                <div class="col-xs-3 col-ms-3"></div>
            </div>
            <div class="row cl">
	            <label class="form-label col-xs-3 col-sm-3" style="line-height: 36px;font-size: 20px;">公司地址</label>
	            <div class="formControls col-xs-6 col-sm-6">
	                <div class="select-box" style="padding: 0;border: none">
	                    <select class="select" id="s_province" name="province"  style="padding:8px 5px;width:48%;float: left;border:1px solid #ddd;margin-right:4%;font-size:16px"></select>
	                    <select class="select" id="s_city" name="city" style="padding:8px 5px;width:48%;float: left;border:1px solid #ddd;font-size:16px"></select>
                    </div>
	            </div>
	            <div class="col-xs-3 col-sm-3"></div>
	        </div>
            <div class="row cl">
                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;">详细地址</label>
                <div class="formControls col-xs-6 col-ms-6">
                	<textarea cols="" rows="" class="textarea" name="address" id="address" placeholder="公司详细地址"  style="font-size: 16px;line-height:1.8;"></textarea>
                </div>
                <div class="col-xs-3 col-ms-3"></div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-6 col-xs-offset-3">
                    <input name="" type="submit" id="sub" class="btn btn-success radius size-L mr-20" value="&nbsp;提&nbsp;交&nbsp;信&nbsp;息&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;重&nbsp;&nbsp;&nbsp;&nbsp;置&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<!--<div class="footer">Copyright LXR by 校园管理系统</div>-->
<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/areaevpi.js"></script>
<script>

    $(function () {
//        $("#captcha").click(function () {
//            $(this).attr("src","<?php echo captcha_src(); ?>?t="+new Date().getTime())
//        });


        //点击获取账号时
        $('#get_account').click(function(){
            var rand_num = new String(Math.random()).substr(2,8); //随机生成8位数
            $('#companyAccount').val('G'+rand_num);
            $(this).attr('disabled','disabled');
        });



        //点击提交
        $("#form").submit(function(){
            var companyAccount = $('#companyAccount').val();//公司账号
            var number = $('#number').val(); //联系电话
            var reg = $('#reg').val(); //注册号或统一信用代码
            var companyName = $('#companyName').val(); //公司名称
            var corporation = $('#corporation').val(); //法人
            var province = $('#s_province').val(); //省
            var city = $('#s_city').val(); //市
            var address = $('#address').val(); //详细地址

            var bool = false;
            if(companyAccount == ''){
                layer.msg('请获取账号');
                return false;
            }
            if(reg == ''){
                layer.msg('请输入注册号');
                return false;
            }
            if(companyName == ''){
                layer.msg('请输入公司名称');
                return false;
            }
            if(corporation == ''){
                layer.msg('请输入法人');
                return false;
            }
            if(province == ''){
                layer.msg('请选择公司地址');
                return false;
            }
            if(city == ''){
                layer.msg('请选择公司地址');
                return false;
            }
            if(address == ''){
                layer.msg('请输入公司详细地址');
                return false;
            }

            //检测注册号或统一信用代码的格式，在格式正确的情况下再去判断企业三要素是否匹配
            var reg_preg1 = /^[0-9A-HJ-NPQRTUWXY]{2}\d{6}[0-9A-HJ-NPQRTUWXY]{10}$/; //匹配统一信用代码 18位
            var reg_preg2 = /^\d{15}$/; //匹配注册号 15位
            if(!reg_preg1.test(reg) && !reg_preg2.test(reg)){
                layer.msg('请输入正确的注册号');
                return false;
            }

            //验证企业三要素：注册号、公司名、法人是否都输入正确
            $.ajax({
                type:'get',//选择get方式提交
                url:"http://i.yjapi.com/ECIMatch/CompanyVerify?key=c2b39089137441e6a35609d04a59eafa&regNo="+reg+"&companyName="+companyName+"&frname="+corporation+"", //将数据提交的页面
                //data:{},//传值
                async:false,//设置同步：好处是data可以在$.ajax外面取到，默认异步
                dataType:'json',//设置json编码形式，不写默认返回的是文本形式(十分重要)
                success: function(data)
                {

                    var result = data.Result;  //获取返回结果
                    //layer.msg(result);

                    //当返回结果是一致的时候，表示企业的三要素正确，此时提交表单，若是其他值则直接显示错误提示
                    if(result == '一致'){
                        layer.msg('提交成功');
                        bool = true;  //表单提交
                    }else{
                        layer.msg(result);  //直接弹出错误提示
                        bool = false;
                    }

                }

            });
            return bool;
        });


    });




    
    var s=["s_province","s_city"];//三个select的name

//    var province = "<?php echo isset($vo['province']) ? $vo['province'] :  ''; ?>";
//    var city = "<?php echo isset($vo['city']) ? $vo['city'] :  ''; ?>";
//    var area = "<?php echo isset($vo['area']) ? $vo['area'] :  ''; ?>";
    var opt0 = ["",""]; //初始值

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