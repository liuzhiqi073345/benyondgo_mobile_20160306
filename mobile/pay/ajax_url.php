<?php

/**
 * 支付宝回调
*/


	define('IN_ECS', true);
	require('../../includes/init.php');
	file_put_contents('101.txt','111');
	/*========================支付宝sdk--bug修改代码片段开始==============================*/
	require_once("alipay.config.php");
	file_put_contents('102.txt','222');
	require_once("lib/alipay_notify.class.php");
	   file_put_contents('103.txt','333');
	//计算得出通知验证结果
	$alipayNotify = new AlipayNotify($alipay_config);
	file_put_contents('104.txt','444');
	$verify_result = $alipayNotify->verifyNotify();
	file_put_contents('105.txt','555');
	if($verify_result) {
	
/*========================支付宝sdk--bug修改代码片段结束==============================*/
	if(!empty($_POST['notify_data'])){
		$notify_data = $_POST['notify_data'];
		
		
		$doc = new DOMDocument();
		$doc->loadXML($notify_data);
		if( ! empty($doc->getElementsByTagName( "notify" )->item(0)->nodeValue) ) {
			//商户订单号
			$out_trade_no = $doc->getElementsByTagName( "out_trade_no" )->item(0)->nodeValue;
			//支付宝交易号
			$trade_no = $doc->getElementsByTagName( "trade_no" )->item(0)->nodeValue;
			//交易状态
			$trade_status = $doc->getElementsByTagName( "trade_status" )->item(0)->nodeValue;
			//交易金额
			$total_fee = $doc->getElementsByTagName( "total_fee" )->item(0)->nodeValue;
			$pay_time=time();
			file_put_contents('106.txt',var_export($out_trade_no,true));
			if($trade_status  == 'TRADE_FINISHED') {
				
				$row = $db -> query("update ".$ecs->table('order_info')." set pay_status = '2',`order_status`=1,`money_paid`='$total_fee',pay_time='$pay_time',order_amount='0.00' where order_sn = '$out_trade_no'");
				if($row){
					echo "success";	
				}else{
					echo "fail";	
				}
				
			}
			else if ($trade_status  == 'TRADE_SUCCESS') {
				
				$row = $db -> query("update ".$ecs->table('order_info')." set pay_status = '2',`order_status`=1,`money_paid`='$total_fee',pay_time='$pay_time',order_amount='0.00' where order_sn = '$out_trade_no'");
			
				if($row){
					echo "success";	
				}else{
					echo "fail";	
				}
			}
		}
		
	}
}
	
	

?>