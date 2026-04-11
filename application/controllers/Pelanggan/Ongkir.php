<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ongkir extends CI_Controller
{


	// private $api_key = '3f018925eeb63642fc6a25c862a54db5';
	// private $api_key = '7jLX9MbP213ff18674eab1e29WSBIimb';
	private $api_key = '6bad9044fb6fdb33caac381cb5b5bc5c';
	public function provinsi()
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			// CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/destination/province",
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
			$array_response = json_decode($response, true);
			echo '<pre>';
			print_r($array_response['data']);
			echo '</pre>';
			$data_provinsi = $array_response['data'];
			echo '<option value="">--Pilih Provinsi--</option>';
			foreach ($data_provinsi as $key => $value) {
				echo "<option value='" . $value['name'] . "'id_provinsi='" . $value['id'] .  "'>" . $value['name'] . "</option>";
			}
		}
	}
	public function kota()
	{
		$id_provinsi_terpilih = $this->input->post('id_provinsi');
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/destination/city/" . $id_provinsi_terpilih,
			// CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $id_provinsi_terpilih,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
			$array_response = json_decode($response, true);
			echo '<pre>';
			print_r($array_response['data']);
			echo '</pre>';
			$data_kota = $array_response['data'];
			echo '<option value="">--Pilih Kota--</option>';
			foreach ($data_kota as $key => $value) {
				echo "<option value='" . $value['name'] . "'id_kota='" . $value['id'] . "'>" . $value['name'] . "</option>";
			}
		}
	}
	public function kecamatan()
	{
		$id_kota_terpilih = $this->input->post('id_kota');
		$curl = curl_init();

		curl_setopt_array($curl, array(
			// CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/destination/district/575",
			CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/destination/district/" . $id_kota_terpilih,
			// CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $id_provinsi_terpilih,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
			$array_response = json_decode($response, true);
			echo '<pre>';
			print_r($array_response['data']);
			echo '</pre>';
			$data_kota = $array_response['data'];
			echo '<option value="">--Pilih Kota--</option>';
			foreach ($data_kota as $key => $value) {
				echo "<option value='" . $value['name'] . "'id_kota='" . $value['id'] . "'>" . $value['name'] . "</option>";
			}
		}
	}
	public function desa()
	{
		$id_kecamatan_terpilih = $this->input->post('id_kecamatan');
		$curl = curl_init();

		curl_setopt_array($curl, array(
			// CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/destination/sub-district/5823",
			CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/destination/sub-district/" . $id_kecamatan_terpilih,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
			$array_response = json_decode($response, true);
			echo '<pre>';
			print_r($array_response['data']);
			echo '</pre>';
			$data_kota = $array_response['data'];
			echo '<option value="">--Pilih Kota--</option>';
			foreach ($data_kota as $key => $value) {
				echo "<option value='" . $value['name'] . "'id_kota='" . $value['id'] . "'>" . $value['name'] . "</option>";
			}
		}
	}
	public function expedisi()
	{
		echo '<option value="">--Pilih Ekspedisi</option>';
		echo '<option value="jne">JNE</option>';
		echo '<option value="tiki">TIKI</option>';
		echo '<option value="pos">POS Indonesia</option>';
	}
	public function paket()
	{
		$id_kota_asal = 1224;
		$expedisi = $this->input->post('expedisi');
		$id_kecamatan = $this->input->post('id_kecamatan');
		// $id_desa = $this->input->post('id_desa');
		$berat = $this->input->post('berat');
		// die($id_kecamatan);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://rajaongkir.komerce.id/api/v1/calculate/district/domestic-cost",
			// CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=" . $id_kota_asal . "&destination=114&weight=" . $berat . "&courier=" . $expedisi . "&price=lowest",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
			$array_response = json_decode($response, true);
			echo '<pre>';
			print_r($array_response['data']);
			echo '</pre>';
			$data_paket = $array_response['data'];
			echo "<option value=''>--Pilih Paket---</option>";
			foreach ($data_paket as $key => $value) {
				echo "<option value='" . $value['service'] . "' ongkir='" . $value['cost'] . "' estimasi='" . $value['etd'] . " Hari'>";
				echo $value['service'] . " | Rp." . $value['cost'] . " | " . $value['etd'] . " Hari";
				echo "</option>";
			}
		}
	}
}
