<?php
  require_once("mng/mng.php");
  $mng = new mng();  
  $params=array();
  $params['pKullaniciAdi']='XXXXXX';
  $params['pSifre']='YYYYYYYYYYYY';
  $params['pGonderiHizmetSekli ']='NORMAL';
  $params['pTeslimSekli']=1;
  $params['pFlAlSms']=0;
  $params['pFlGnSms']=0;
  $params['pKargoParcaList']="0:0:0:Zarf:1:;";
  $params['pAliciMusteriAdi']="ultimateFB";
  $params['pChSiparisNo']="1907";
  $params['pLuOdemeSekli']="P";
  $params['pFlAdresFarkli']="1";
  $params['pChIl']="KONYA";
  $params['pChIlce']="MERAM";
  $params['pChAdres']="SUPER GIZLI EV ADRESIM";
  $params['pChTelCep']="SUPER GIZLI GSM NO";
  $params['pChEmail']="SUPER GIZLI EPOSTA ADRESI";
  $params['pFlKapidaOdeme']=0;
  print_r($mng->SiparisGirisiDetayliV3($params));
  
  $params2=array();
  $params2['pKullaniciAdi']='XXXXXX';
  $params2['pSifre']='YYYYYYYYYYYY';
  $params2['pSiparisNo']='1';
  print_r($mng->FaturaSiparisListesi($params2));  
  
  $params3=array();
  $params3['pMusteriNo']='XXXXXX';
  $params3['pSifre']='YYYYYYYYYYYY';
  $params3['pSiparisNo']='1';
  print_r($mng->KargoBilgileriByReferans($params3));  
	
  $params4=array();
  $params4['pKullaniciAdi']='XXXXXX';
  $params4['pSifre']='YYYYYYYYYYYY';
  $params4['pSiparisTarih']='21.12.2018';
  print_r($mng->FaturaSiparisListesiByTarih($params4));
  
  $params5=array();
  $params5['pMusteriNo']='XXXXXX';
  $params5['pSifre']='YYYYYYYYYYYY';
  $params5['pTarih']='21.12.2018';
  $params5['pFlAltfirma']='0';
  $params5['pRaporType']='GIDEN'; //"GELEN" - "GIDEN" - "TESLIM" 
  print_r($mng->KargoBilgileriByTarih($params5));  
  
  $params6=array();
  $params6['pKullanici']='XXXXXX';
  $params6['pSifre']='YYYYYYYYYYYY';
  $params6['pReferansId']='1';
  print_r($mng->KargoTakipByReferans($params6));
?>
