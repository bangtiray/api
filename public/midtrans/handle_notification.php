<?php
require_once(dirname(__FILE__) . '/Veritrans.php');
Veritrans_Config::$isProduction = false;
Veritrans_Config::$serverKey = 'SB-Mid-server-XJSbs3pShXe52tUJu_hYk-5H';



if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {


 try {
  $notif = new Veritrans_Notification();
} catch (Exception $e) {
  echo "Exception: ".$e->getMessage()."\r\n";
  echo "Notification received: ".file_get_contents("php://input");
  exit();
} 
$myfile = fopen("newText.txt", "w") or die("Unable to open file!");
$transaction = $notif->transaction_status;
$type = $notif->payment_type;
$order_id = $notif->order_id;
$fraud = $notif->fraud_status;
if ($transaction == 'capture') {
  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
  if ($type == 'credit_card'){
    if($fraud == 'challenge'){
      // TODO set payment status in merchant's database to 'Challenge by FDS'
      // TODO merchant should decide whether this transaction is authorized or not in MAP
      echo "Transaction order_id: " . $order_id ." is challenged by FDS";
      }
      else {
      // TODO set payment status in merchant's database to 'Success'
      echo "Transaction order_id: " . $order_id ." successfully captured using " . $type;
      }
    }
  }
else if ($transaction == 'settlement'){
  // TODO set payment status in merchant's database to 'Settlement'
  
  $updateUrl="api/v2/guest/updatestatus/" . $order_id . "/" . $type . "/settlement";
  fwrite($myfile, $updateUrl);
//   movePage(308,$updateUrl);
  header("Location: " .$updateUrl);
  exit();

  //  $ch = curl_init();
  //   curl_setopt($ch, CURLOPT_URL, $updateUrl);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  //   curl_exec($ch);
  //   curl_close ($ch);
  echo "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
  }
  else if($transaction == 'pending'){
  // TODO set payment status in merchant's database to 'Pending'
  fwrite($myfile, "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type);
  $updateUrl="api/v2/guest/updatestatus/" . $order_id . "/" . $type . "/pending";
//   movePage(308,$updateUrl);

header("Location: " .$updateUrl);
  //  $ch = curl_init();
  //   curl_setopt($ch, CURLOPT_URL, $updateUrl);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  //   curl_exec($ch);
  //   curl_close ($ch);
  echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
  }
  else if ($transaction == 'deny') {
  // TODO set payment status in merchant's database to 'Denied'
  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
  }
  else if ($transaction == 'expire') {
  // TODO set payment status in merchant's database to 'expire'
  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is expired.";
  }
  else if ($transaction == 'cancel') {
  // TODO set payment status in merchant's database to 'Denied'
  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is canceled.";
}


} else {


    //
    // order_id=776981683&status_code=200&transaction_status=capture

    $order_id = $_GET['order_id'];
    $statusCode = $_GET['status_code'];
    $transaction  = $_GET['transaction_status'];


	if($transaction == 'capture') {
	  echo "<p>Transaksi berhasil.</p>";
	  echo "<p>Status transaksi untuk order id : " . $order_id;

	}
	// Deny
	else if($transaction == 'deny') {
	  echo "<p>Transaksi ditolak.</p>";
	  echo "<p>Status transaksi untuk order id .: " . $order_id;

	}
	// Challenge
	else if($transaction == 'challenge') {
	  echo "<p>Transaksi challenge.</p>";
	  echo "<p>Status transaksi untuk order id : " . $order_id;

	}
	// Error
	else {
	  echo "<p>Terjadi kesalahan pada data transaksi yang dikirim.</p>";
	  echo "<p>Status message: [$response->status_code] " . $transaction;
	}


}
function movePage($num,$url){
   static $http = array (
       100 => "HTTP/1.1 100 Continue",
       101 => "HTTP/1.1 101 Switching Protocols",
       200 => "HTTP/1.1 200 OK",
       201 => "HTTP/1.1 201 Created",
       202 => "HTTP/1.1 202 Accepted",
       203 => "HTTP/1.1 203 Non-Authoritative Information",
       204 => "HTTP/1.1 204 No Content",
       205 => "HTTP/1.1 205 Reset Content",
       206 => "HTTP/1.1 206 Partial Content",
       300 => "HTTP/1.1 300 Multiple Choices",
       301 => "HTTP/1.1 301 Moved Permanently",
       302 => "HTTP/1.1 302 Found",
       303 => "HTTP/1.1 303 See Other",
       304 => "HTTP/1.1 304 Not Modified",
       305 => "HTTP/1.1 305 Use Proxy",
       307 => "HTTP/1.1 307 Temporary Redirect",
       400 => "HTTP/1.1 400 Bad Request",
       401 => "HTTP/1.1 401 Unauthorized",
       402 => "HTTP/1.1 402 Payment Required",
       403 => "HTTP/1.1 403 Forbidden",
       404 => "HTTP/1.1 404 Not Found",
       405 => "HTTP/1.1 405 Method Not Allowed",
       406 => "HTTP/1.1 406 Not Acceptable",
       407 => "HTTP/1.1 407 Proxy Authentication Required",
       408 => "HTTP/1.1 408 Request Time-out",
       409 => "HTTP/1.1 409 Conflict",
       410 => "HTTP/1.1 410 Gone",
       411 => "HTTP/1.1 411 Length Required",
       412 => "HTTP/1.1 412 Precondition Failed",
       413 => "HTTP/1.1 413 Request Entity Too Large",
       414 => "HTTP/1.1 414 Request-URI Too Large",
       415 => "HTTP/1.1 415 Unsupported Media Type",
       416 => "HTTP/1.1 416 Requested range not satisfiable",
       417 => "HTTP/1.1 417 Expectation Failed",
       500 => "HTTP/1.1 500 Internal Server Error",
       501 => "HTTP/1.1 501 Not Implemented",
       502 => "HTTP/1.1 502 Bad Gateway",
       503 => "HTTP/1.1 503 Service Unavailable",
       504 => "HTTP/1.1 504 Gateway Time-out"
   );
   header($http[$num]);
   header ("Location: $url");
}