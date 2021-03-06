<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wwwroot\AMS\public/../application/index\view\schoolrecruit\index.html";i:1517194589;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="__STATIC__/css/reset.css" />
    <link rel="stylesheet" href="__STATIC__/css/common.css">
    <script src="__STATIC__/js/jquerys-1.7.2.min.js"></script>
    <script src="__STATIC__/js/rem.js"></script>
</head>
<body>
    <div id="wrap">
        <!-- <header class="header header-fixed"> -->
            <!-- <a href="javascript:;" onclick="history.go(-1)" class="back back1"></a> -->
            	<!-- <?php echo $info1['schoolName']; ?> -->
        <!-- </header> -->
        <div class="information" style="margin-top: 0rem;">
        	<h1 style="line-height:0.4rem;font-size: 0.26rem;margin: 0.2rem 0;"><?php echo $info['title']; ?></h1>
            <?php echo $info['content']; ?>
        </div>
        <link rel="stylesheet" type="text/css" href="__STATIC__/js/layui/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="__STATIC__/js/layui/css/pintuer.css"/>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/wanted.css"/>
	    
		<div class="container">
			<form action="" class="layui-form layui-form-pane" method="">
				<div class="layui-form-item">
					<label class="layui-form-label">在读学校</label>
					<div class="layui-input-block">
						<input type="text" name="current_school"  autocomplete="off" class="layui-input" placeholder="请填写你的在读学校" id="current_school">
					</div>
				</div>
				
				<div class="layui-form-item">
					<label class="layui-form-label">报名学段</label>
					<div class="layui-input-block">
						<select name="class" lay-filter="school" id="class">
					   		<option value="" selected="">请选择报名学段</option>
					   		<?php if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): $i = 0; $__LIST__ = $grade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
					        <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
					        <?php endforeach; endif; else: echo "" ;endif; ?>
				     	</select>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">姓名</label>
					<div class="layui-input-block">
						<input type="text" name="name" id="name" autocomplete="off" class="layui-input" placeholder="请填写你的姓名">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">性别</label>
					<div class="layui-input-block">
						<select name="sex" lay-filter="fex"  id="sex">
				    		<option value="" selected=""></option>
					        <option value="男">男</option>
					        <option value="女">女</option>
				     	</select>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">出生日期</label>
					<div class="layui-input-block">
						<input name="birthDate" id="date"  placeholder="请填写您的出生日期" autocomplete="off" class="layui-input" type="text" class="birthDate" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">联系电话</label>
					<div class="layui-input-block">
						<input name="contact" id="contact"  autocomplete="off" class="layui-input" type="tel" placeholder="请填写你的联系电话">
					</div>
				</div>
				<div class="layui-form-item layui-form-text">
				    <label class="layui-form-label">自我评价</label>
				    <div class="layui-input-block">
				      <textarea placeholder="请输入内容" class="layui-textarea"  name="introduce" id="introduce"></textarea>
				    </div>
				</div>
				<input type="hidden" name="schoolAccount" id="schoolAccount"  value="<?php echo $schoolAccount; ?>">
				<link rel="stylesheet" href="__STATIC__/css/popup.css">
                
				<div class="layui-form-item">
					<div class="layui-input-block">
						<button type= "button" class="layui-btn layui-btn-3c9" lay-submit="" id="btn_1">立即提交</button>
						<button type="reset" class="layui-btn layui-btn-primary">重置</button>
					</div>
				</div>
			</form>
		</div>
    </div>
</body>
<!--引用资源文件-->
<script src="__STATIC__/js/layui/layui.js"></script>
<script src="__STATIC__/js/popup.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
	layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //日期
  laydate.render({
    elem: '#date'
  });
  laydate.render({
    elem: '#date1'
  });
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    ,content: function(value){
      layedit.sync(editIndex);
    }
  });
  
  //监听指定开关
  form.on('switch(switchTest)', function(data){
    layer.msg('开关checked'+ (this.checked ? 'true' : 'false'), {
      offset: '6px'
    });
    layer.tips('温馨提示请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
  });
  
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });
  
  
});
</script>
	<script type="text/javascript">
	function btn(){
	android.toFinish();
	
	}
		$(document).ready(function(){
			$('#btn_1').click(function(){
                var current_school = $('#current_school').val();
                var class1 = $('#class').val();
                var name = $('#name').val();
                var sex = $('#sex').val();
                var birthDate = $('#date').val();
                var contact = $('#contact').val();
                var introduce = $('#introduce').val();
				var schoolAccount = $('#schoolAccount').val();
				var myreg=/^[1][3,4,5,7,8][0-9]{9}$/; 
				if(current_school ==''){
				    <!-- var json = { -->
								<!-- msg:"请输入就读学校", -->
							<!-- } -->
                            <!-- $.alertView(json); -->
							//android.showToast('请输入就读学校');
							alert('请输入就读学校');
					return false;
				
				}
				
				if(class1 ==''){
				    <!--  var json = { -->
								<!-- msg:"请选择学段", -->
							<!-- } -->
                            <!-- $.alertView(json); --> 
							//android.showToast('请选择学段');
							alert('请选择学段');
					return false;
				
				}
				
				if(name ==''){
				    <!-- var json = { -->
								<!-- msg:"请输入姓名", -->
							<!-- } -->
                            <!-- $.alertView(json); -->
							//android.showToast('请输入姓名');
							alert('请输入姓名');
					return false;
				
				}
				
				if(sex ==''){
				    <!-- var json = { -->
								<!-- msg:"请选择性别", -->
							<!-- } -->
                            <!-- $.alertView(json); -->
							//android.showToast('请选择性别');
							alert('请选择性别');
					return false;
				
				}
				
				if(birthDate ==''){
				    <!-- var json = { -->
								<!-- msg:"请选择出生日期", -->
							<!-- } -->
                            <!-- $.alertView(json); -->
							//android.showToast('请选择出生日期');
							alert('请选择出生日期');
					return false;
				
				}
				
				if(!myreg.test(contact)){
				    <!-- var json = { -->
								<!-- msg:"请输入有效联系方式", -->
							<!-- } -->
                            <!-- $.alertView(json); -->
							//android.showToast('请输入有效联系方式');
							alert('请输入有效联系方式');
					return false;
				
				}
				
		

                $.ajax({
                	url:"<?php echo url('Schoolrecruit/recruit'); ?>",
                	type:"post",
                	data:{current_school:current_school,class:class1,name:name,sex:sex,birthDate:birthDate,contact:contact,introduce:introduce,schoolAccount:schoolAccount},//传值
                    success: function(data)
                    { 
	                    if(data==1){
							<!-- var json = { -->
								<!-- msg:"提交成功", -->
								
							<!-- } -->
                            <!-- $.alertView(json); -->
							//android.showToast('提交成功');
							alert('提交成功');
           
	                        location.reload();
	                    }else{
						
						<!-- var json = { -->
								<!-- msg:"提交失败", -->
								
							<!-- } -->
				
                            <!-- $.alertView(json); -->
							//android.showToast('提交失败');
							alert('提交失败');
                            //alert('提交失败');  
	                    }
                    }

                })
			})
		})

	</script>

</html>
</html>
