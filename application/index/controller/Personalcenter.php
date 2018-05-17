<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Loader;
use think\exception\HttpException;
use think\Config;
use think\Session;
use think\Request;

class Personalcenter extends Controller
{
    //我的兼职
    public function part() {
        $user_id = $this->request->param('user_id');
        $user_id = isset($user_id)?$user_id:'';
        $token = $this->request->param('token');
        $token = isset($token)?$token:'';
        $ishire = $this->request->param('ishire');
        $ishire = isset($ishire)?$ishire:0;
        $data = [];
        if($user_id&&$token){
            if($this->token($user_id,$token)==1){
                $list = Db::name('CompanyPositionEnroll')->field('pid')->where('user_id',$user_id)->where('status',1)->where('ishire',$ishire)->where('isdelete',0)->select();
                if($list){
                	foreach($list as $key=>$value){
	                    $info = Db::name('CompanyReleasePosition')->field('id,salary,unit,positionName,work_time,companyAccount')->where('id',$value['pid'])->where('status',1)->where('isdelete',0)->find();
	                    $info1 = Db::name('SchoolManagement')->field('logo')->where('schoolAccount',$info['companyAccount'])->where('status',1)->where('isdelete',0)->find();
	                    $arr = explode('-',$info['work_time']);
	                    $data[] = array(
	                        'positionName'=>$info['positionName'],
	                        'salary'=>$info['salary'],
	                        'up_work'=>$arr[0],
	                        'off_work'=>$arr[1],
	                        'logo'=>$info1['logo'],
	                        'unit'=>$info['unit'],
	                        'id'=>$info['id'],

	                    );

	                }
                }
               
               
                if($data){
                    $this->json(1,'成功',$data);
                }else{
                    $this->json(13,'暂无数据');
 
                }

                $this->json(1,'成功',$data);

            }

        }else{
            $this->json(12,'无参数');
        }

    }
    
     //我的兼职已被邀约
    public function parthire() {
        $user_id = $this->request->param('user_id');
        $user_id = isset($user_id)?$user_id:'';
        $token = $this->request->param('token');
        $token = isset($token)?$token:'';
        $ishire = $this->request->param('ishire');
        $ishire = isset($ishire)?$ishire:0;
        $data = [];
        if($user_id&&$token){
            if($this->token($user_id,$token)==1){
                $list = Db::name('CompanyPositionEnroll')->field('pid')->where('user_id',$user_id)->where('status',1)->where('ishire',$ishire)->where('isdelete',0)->select();
                if($list){
                	foreach($list as $key=>$value){
	                    $info = Db::name('CompanyReleasePosition')->field('id,area,unit,salary,gather_place,phone,positionName')->where('id',$value['pid'])->where('status',1)->where('isdelete',0)->find();
	                    
	                    $data[] = array(
	                        'positionName'=>$info['positionName'],
	                        'salary'=>$info['salary'],
	                        'gather_place'=>$info['gather_place'],
	                        'phone'=>$info['phone'],
	                        'unit'=>$info['unit'],
	                        'id'=>$info['id'],
	                        'area'=>$info['area'],

	                    );

	                }
                }
               
               
                if($data){
                    $this->json(1,'成功',$data);
                }else{
                    $this->json(13,'暂无数据');
 
                }

                $this->json(1,'成功',$data);

            }

        }else{
            $this->json(12,'无参数');
        }

    }
     
    

    	//验证token
	public  function token ($user_id,$token){
		$info = DB::name('patriarch')->where('user_id','=',$user_id)->where('status',1)->where('isdelete',0)->find();
		if($token<>$info['token']){
			$this->json(10,'你的账号已在其他设备上登录');
		}elseif(time()-strtotime($info['expire_time'])>60*60*24*30){
			$this->json(11,'已失效,请重新登录');
		}else{
			return 1;
		}

	}



    public static function json($code, $msg = '', $data = array()) {
        
        if(!is_numeric($code)) {
            return '';
        }
        
        if(empty($data)){
            $result = array(
                'code' => $code,
                'msg' => $msg,
            );
        }else{
            $result = array(
                'code' => $code,
                'msg' => $msg,
                'data' => $data,
            );
        }
        
        echo json_encode($result);
        exit;
    }
}
