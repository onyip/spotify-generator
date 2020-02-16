<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spotify extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$data['result'] = $this->session->userdata('result');
		$this->load->view('index', $data);
	}

	public function generate()
	{
		$this->load->library('session');
		$this->load->library('curl');
		$data = $this->input->post(null, true);
		$jumlah = (int)$data['jumlah'];
		// var_dump($jumlah); die();
		$result = [];
		if (@$data) {
			if ($jumlah > 1) {
				for($i=0;$i<$jumlah;$i++){
					$mail = $data['user'].$i."@".$data['dns'].".".$data['domain'];
					$get_user = [
						'key' => '142b583129b2df829de3656f9eb484e6',
						'iagree' => 'true',
						'birth_day' => '11',
						'birth_month' => '11',
						'birth_year' => '1999',
						'platform' => 'Android-ARM',
						'creation_point' => 'client_mobile',
						'gender' => 'male',
						'app_version' => '849800892',
						'email' => $mail,
						'password' => $data['password'],
						'password_repeat' => $data['password'],
					];
					$send = $this->curl->simple_post('https://spclient.wg.spotify.com:443/signup/public/v1/account/', $get_user, array(CURLOPT_BUFFERSIZE => 10));
					$hasil = json_decode($send);
					if ($hasil->status == 1) {
						$val = ['email' => $mail." : ".$data['password'], 'status' => 1];
						$result[] = $val;
					}else{
						$val = ['email' => $mail." : ".$data['password'], 'status' => 0];
						$result[] = $val;;
					}
				}

			} else {
				$mail = $data['user']."@".$data['dns'].".".$data['domain'];
				$get_user = [
					'key' => '142b583129b2df829de3656f9eb484e6',
					'iagree' => 'true',
					'birth_day' => '11',
					'birth_month' => '11',
					'birth_year' => '1999',
					'platform' => 'Android-ARM',
					'creation_point' => 'client_mobile',
					'gender' => 'male',
					'app_version' => '849800892',
					'email' => $mail,
					'password' => $data['password'],
					'password_repeat' => $data['password'],
				];
				$send = $this->curl->simple_post('https://spclient.wg.spotify.com:443/signup/public/v1/account/', $get_user, array(CURLOPT_BUFFERSIZE => 10));
				$hasil = json_decode($send);
				if ($hasil->status == 1) {
					$val = ['email' => $mail." : ".$data['password'], 'status' => 1];
					$result[] = $val;
				}else{
					$val = ['email' => $mail." : ".$data['password'], 'status' => 0];
					$result[] = $val;
				}
			}

		} else {
			redirect();
		}

		$this->session->set_userdata('result', $result);
		redirect();
	}
}
