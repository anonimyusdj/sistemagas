<?php
  class Cifrado{

    public function cifrador($action,$texto){
      $action=trim($action);
      $salida=false;

      $myKey='255as33$%&SDSD2%7)=ffd';
      $myIV='#~¬sasaffr4t4546€~#246%/()';
      $encrypt_method='AES-256-CBC';

      $secret_key=hash('sha256',$myKey);
      $secret_iv=substr(hash('sha256',$myIV),0,16);

      if ($action=='cifrar' || $action=='descifrar') {
        $texto=trim(strval($texto));
        switch ($action) {
          case 'cifrar':
            $salida=openssl_encrypt($texto,$encrypt_method,$secret_key,0,$secret_iv);
            break;
          case 'descifrar':
            $salida=openssl_decrypt($texto,$encrypt_method,$secret_key,0,$secret_iv);
            break;
          default:
            echo "Opcion No valida";
            break;
        }
      }
      return $salida;
    }
  }
 ?>
