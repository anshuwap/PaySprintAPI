<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'/third_party/jwt.php');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your owndd constructor code
    }

    public function index() {
        // Encode the array to a JWT string.
        $secret_Key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJQQVlTUFJJTlQiLCJ0aW1lc3RhbXAiOjE2MTAwMjYzMzgsInBhcnRuZXJJZCI6IlBTMDAxIiwicHJvZHVjdCI6IldBTExFVCIsInJlcWlkIjoxNjEwMDI2MzM4fQ.buzD40O8X_41RmJ0PCYbBYx3IBlsmNb9iVmrVH9Ix64";
        $partnerID = "PS001097"; //"PS001";
        // $secret_Key = "UFMwMDEyNGQ2NTliODUzYmViM2I1OWRjMDc2YWNhMTE2M2I1NQ==";
        $data['auth_key'] = "YTY1ZDZlYmRiNGIxZjRkNDIxYTZmYzUyZWRmY2Q4ZmU="; //MzNkYzllOGJmZGVhNWRkZTc1YTgzM2Y5ZDFlY2EyZTQ=
        $request_data = '{"timestamp": '.time().', "partnerId": '.$partnerID.', "reqid": "123"}';
        $data['request_data'] = "{\"refid\":\"123\",\"account_number\":\"024901541163\",\"ifsc\":\"ICICI0000249\",\"ifsc_details\":true}";
        echo $data['token'] = JWT::encode(
            $request_data,
            $secret_Key,
            'HS256'
        );
        $this->load->view('accountVerifyAPI', $data);
    }
    public function test() {
        // Encode the array to a JWT string.
        // $secret_Key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJQQVlTUFJJTlQiLCJ0aW1lc3RhbXAiOjE2MTAwMjYzMzgsInBhcnRuZXJJZCI6IlBTMDAxIiwicHJvZHVjdCI6IldBTExFVCIsInJlcWlkIjoxNjEwMDI2MzM4fQ.buzD40O8X_41RmJ0PCYbBYx3IBlsmNb9iVmrVH9Ix64";
        $partnerID = "PS001";
        $secret_Key = "UFMwMDEyNGQ2NTliODUzYmViM2I1OWRjMDc2YWNhMTE2M2I1NQ==";
        $data['auth_key'] = "MzNkYzllOGJmZGVhNWRkZTc1YTgzM2Y5ZDFlY2EyZTQ=";
        $request_data = '{"timestamp": '.time().', "partnerId": '.$partnerID.', "reqid": "123"}';
        $data['request_data'] = "{\"refid\":\"123\",\"account_number\":\"024901541163\",\"ifsc\":\"ICICI0000249\",\"ifsc_details\":true}";
        echo $data['token'] = JWT::encode(
            $request_data,
            $secret_Key,
            'HS256'
        );
        $this->load->view('accountVerifyAPI', $data);
    }
}