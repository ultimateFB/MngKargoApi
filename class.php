<?php
error_reporting(0);

$wsdl="http://service.mngkargo.com.tr/tservis/musterikargosiparis.asmx?WSDL";
class mng{
	function SiparisGirisiDetayliV3($params){
	$req='<?xml version="1.0" encoding="utf-8"?>
			<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
			  <soap12:Body>
				<SiparisGirisiDetayliV3 xmlns="http://tempuri.org/">
				  <pChIrsaliyeNo>'.$params['pChIrsaliyeNo'].'</pChIrsaliyeNo>
				  <pChBarkod>'.$params['pChBarkod'].'</pChBarkod>
				  <pChIcerik>'.$params['pChIcerik'].'</pChIcerik>
				  <pGonderiHizmetSekli>'.$params['pGonderiHizmetSekli'].'</pGonderiHizmetSekli>
				  <pTeslimSekli>'.$params['pTeslimSekli'].'</pTeslimSekli>
				  <pFlAlSms>'.$params['pFlAlSms'].'</pFlAlSms>
				  <pFlGnSms>'.$params['pFlGnSms'].'</pFlGnSms>
				  <pKargoParcaList>'.$params['pKargoParcaList'].'</pKargoParcaList>
				  <pAliciMusteriMngNo>'.$params['pAliciMusteriMngNo'].'</pAliciMusteriMngNo>
				  <pAliciMusteriBayiNo>'.$params['pAliciMusteriBayiNo'].'</pAliciMusteriBayiNo>
				  <pAliciMusteriAdi>'.$params['pAliciMusteriAdi'].'</pAliciMusteriAdi>
				  <pChSiparisNo>'.$params['pChSiparisNo'].'</pChSiparisNo>
				  <pLuOdemeSekli>'.$params['pLuOdemeSekli'].'</pLuOdemeSekli>
				  <pFlAdresFarkli>'.$params['pFlAdresFarkli'].'</pFlAdresFarkli>
				  <pChIl>'.$params['pChIl'].'</pChIl>
				  <pChIlce>'.$params['pChIlce'].'</pChIlce>
				  <pChAdres>'.$params['pChAdres'].'</pChAdres>
				  <pChSemt>'.$params['pChSemt'].'</pChSemt>
				  <pChMahalle>'.$params['pChMahalle'].'</pChMahalle>
				  <pChMeydanBulvar>'.$params['pChMeydanBulvar'].'</pChMeydanBulvar>
				  <pChCadde>'.$params['pChCadde'].'</pChCadde>
				  <pChSokak>'.$params['pChSokak'].'</pChSokak>
				  <pChTelEv>'.$params['pChTelEv'].'</pChTelEv>
				  <pChTelCep>'.$params['pChTelCep'].'</pChTelCep>
				  <pChTelIs>'.$params['pChTelIs'].'</pChTelIs>
				  <pChFax>'.$params['pChFax'].'</pChFax>
				  <pChEmail>'.$params['pChEmail'].'</pChEmail>
				  <pChVergiDairesi>'.$params['pChVergiDairesi'].'</pChVergiDairesi>
				  <pChVergiNumarasi>'.$params['pChVergiNumarasi'].'</pChVergiNumarasi>
				  <pFlKapidaOdeme>'.$params['pFlKapidaOdeme'].'</pFlKapidaOdeme>
				  <pMalBedeliOdemeSekli>'.$params['pMalBedeliOdemeSekli'].'</pMalBedeliOdemeSekli>
				  <pPlatformKisaAdi>'.$params['pPlatformKisaAdi'].'</pPlatformKisaAdi>
				  <pPlatformSatisKodu>'.$params['pPlatformSatisKodu'].'</pPlatformSatisKodu>
				  <pKullaniciAdi>'.$params['pKullaniciAdi'].'</pKullaniciAdi>
				  <pSifre>'.$params['pSifre'].'</pSifre>
				</SiparisGirisiDetayliV3>
			  </soap12:Body>
			</soap12:Envelope>';
		 $response=$this->curl_post($req);
		$return=array();
		if($response['soapBody']['SiparisGirisiDetayliV3Response']['SiparisGirisiDetayliV3Result']=="1"){
			$return['mesaj']="Kargo Bilgileri Aktarıldı";
		}else{
			$return['mesaj']=$response['soapBody']['SiparisGirisiDetayliV3Response']['SiparisGirisiDetayliV3Result'];
		}
		return $return;
	}
	function FaturaSiparisListesi($params){
		$req='<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<FaturaSiparisListesi xmlns="http://tempuri.org/">
					  <pSiparisNo>'.$params['pSiparisNo'].'</pSiparisNo>
					  <pKullaniciAdi>'.$params['pKullaniciAdi'].'</pKullaniciAdi>
					  <pSifre>'.$params['pSifre'].'</pSifre>
					</FaturaSiparisListesi>
				  </soap:Body>
				</soap:Envelope>';
		$response=$this->curl_post($req);
		return $response['soapBody']['FaturaSiparisListesiResponse']['FaturaSiparisListesiResult']['diffgrdiffgram']['NewDataSet']['FaturaSiparisListesi'];		
	}
	function KargoBilgileriByReferans($params){
		$req='<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<KargoBilgileriByReferans xmlns="http://tempuri.org/">
					  <pMusteriNo>'.$params['pMusteriNo'].'</pMusteriNo>
					  <pSifre>'.$params['pSifre'].'</pSifre>
					  <pSiparisNo>'.$params['pSiparisNo'].'</pSiparisNo>
					  <pGonderiNo>'.$params['pGonderiNo'].'</pGonderiNo>
					  <pFaturaSeri>'.$params['pFaturaSeri'].'</pFaturaSeri>
					  <pFaturaNo>'.$params['pFaturaNo'].'</pFaturaNo>
					  <pIrsaliyeNo>'.$params['pIrsaliyeNo'].'</pIrsaliyeNo>
					  <pEFaturaNo>'.$params['pEFaturaNo'].'</pEFaturaNo>
					  <pRaporType>'.$params['pRaporType'].'</pRaporType>
					</KargoBilgileriByReferans>
				  </soap:Body>
				</soap:Envelope>';
		$response=$this->curl_post($req);
	return $response['soapBody']['KargoBilgileriByReferansResponse']['KargoBilgileriByReferansResult']['diffgrdiffgram']['NewDataSet']['Table1'];	
	}
	function FaturaSiparisListesiByTarih($params){
		$req='<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<FaturaSiparisListesiByTarih xmlns="http://tempuri.org/">
					  <pKullaniciAdi>'.$params['pKullaniciAdi'].'</pKullaniciAdi>
					  <pSiparisTarih>'.$params['pSiparisTarih'].'</pSiparisTarih>
					  <pSifre>'.$params['pSifre'].'</pSifre>
					</FaturaSiparisListesiByTarih>
				  </soap:Body>
				</soap:Envelope>';
		$response=$this->curl_post($req);
	return $response['soapBody']['FaturaSiparisListesiByTarihResponse']['FaturaSiparisListesiByTarihResult']['diffgrdiffgram']['NewDataSet']['FaturaSiparisListesi'];	
	}
	function KargoBilgileriByTarih($params){
		$req='<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<KargoBilgileriByTarih xmlns="http://tempuri.org/">
					  <pMusteriNo>'.$params['pMusteriNo'].'</pMusteriNo>
					  <pSifre>'.$params['pSifre'].'</pSifre>
					  <pTarih>'.$params['pTarih'].'</pTarih>
					  <pRaporType>'.$params['pRaporType'].'</pRaporType>
					  <pFlAltfirma>'.$params['pFlAltfirma'].'</pFlAltfirma>
					</KargoBilgileriByTarih>
				  </soap:Body>
				</soap:Envelope>';
		$response=$this->curl_post($req);
		print_r($response);
	return $response;	
	}
	function KargoTakipByReferans($params){
		$req='<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<KargoTakipByReferans xmlns="http://tempuri.org/">
					  <pKullanici>'.$params['pKullanici'].'</pKullanici>
					  <pSifre>'.$params['pSifre'].'</pSifre>
					  <pReferansId>'.$params['pReferansId'].'</pReferansId>
					</KargoTakipByReferans>
				  </soap:Body>
				</soap:Envelope>';
		$response=$this->curl_post($req);

	return $response['soapBody']['KargoTakipByReferansResponse']['KargoTakipByReferansResult']['diffgrdiffgram'];	
	}
	function curl_post($req){
		global $wsdl;
		$header = array(
		"Content-type: text/xml;charset=\"utf-8\"",
		"Accept: text/xml",
		"Cache-Control: no-cache",
		"Pragma: no-cache",
		"Content-length: ".strlen($req),
		); 
		$soap_do = curl_init();
		curl_setopt($soap_do, CURLOPT_URL, $wsdl );
		curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($soap_do, CURLOPT_TIMEOUT,        10);
		curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true );
		curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($soap_do, CURLOPT_POST,           true );
		curl_setopt($soap_do, CURLOPT_POSTFIELDS,     $req);
		curl_setopt($soap_do, CURLOPT_HTTPHEADER,     $header);
		$result=curl_exec($soap_do);
		$xml = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $result);
		$xml = simplexml_load_string($xml);
		$json = json_encode($xml);
		$responseArray = json_decode($json,true);
		return $responseArray;
	}
	
}
?>
