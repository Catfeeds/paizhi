<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Exception;
use think\Db;
use think\Loader;
use think\Config;

class Alipay extends Controller
{
	use \app\admin\traits\controller\Controller;
						//商户订单号     订单名称    付款金额     body
	public function pagepay($out_trade_no,$subject,$total_amount,$body="")
	{
		require_once '../vendor/alipay/config.php';
		require_once '../vendor/alipay/pagepay/service/AlipayTradeService.php';
		require_once '../vendor/alipay/pagepay/buildermodel/AlipayTradePagePayContentBuilder.php';

		/*vendor('alipay.config');
		vendor('alipay.pagepay.service.AlipayTradeService');
		vendor('alipay.pagepay.buildermodel.AlipayTradePagePayContentBuilder');
		Loader::import('alipay.config', VENDOR_PATH);*/

		//构造参数
		$payRequestBuilder = new \AlipayTradePagePayContentBuilder();
		$payRequestBuilder->setBody($body);
		$payRequestBuilder->setSubject($subject);
		$payRequestBuilder->setTotalAmount($total_amount);
		$payRequestBuilder->setOutTradeNo($out_trade_no);
	
		$aop = new \AlipayTradeService($config);
	
		/**
		 * pagePay 电脑网站支付请求
		 * @param $builder 业务参数，使用buildmodel中的对象生成。
		 * @param $return_url 同步跳转地址，公网可以访问
		 * @param $notify_url 异步通知地址，公网可以访问
		 * @return $response 支付宝返回的信息
 		*/
		$response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);
	
		//输出表单
		var_dump($response);
	}

}