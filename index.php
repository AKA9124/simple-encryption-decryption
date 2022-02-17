<?php
// Store a string into the variable which
// need to be Encrypted
$simple_string = "This is a text to encrypt";
echo 'Text          : '.$simple_string;
// Store the cipher method
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for encryption
$encryption_iv = '4569517538527534';
// Store the encryption key
$encryption_key = "blackbutler12";
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);
$hasil_enc = $encryption;//encrypt result
echo '<br><br> Encryption          : '.$hasil_enc;


// Non-NULL Initialization Vector for decryption
$decryption_iv = '4569517538527534';
// Store the decryption key
$decryption_key = "blackbutler12";
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering,
			$decryption_key, $options, $decryption_iv);
			
// Display the decrypted string
$hasil_dec = $decryption;//encrypt result
echo '<br><br> Decryption          : '.$hasil_dec;
			

?>
