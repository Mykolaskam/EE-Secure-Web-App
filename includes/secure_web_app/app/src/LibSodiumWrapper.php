<?php
/**
 * Wrapper class for the PHP LibSodium library.  Takes the pain out of using the library.
 *
 *
 * @author CF Ingrams <cfi@dmu.ac.uk>
 * @copyright De Montfort University
 *
 */

class LibSodiumWrapper
{
    /**
     * @var
     */
    private $key;

    /**
     * LibSodiumWrapper constructor.
     */
    public function __construct()
    {
        $this->initialise_encryption();
    }

    /**
     *
     */
    public function __destruct()
    {
        sodium_memzero($this->key);
    }

    /**
     *function sets the key for encryption and checks key size compared to SODIUM_CRYPTO_SECRETBOX_KEYBYTES, if not equal range exception is thrown .
     */
    private function initialise_encryption()
    {
        $this->key = 'The boy stood on the burning dek';

        if (mb_strlen($this->key, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
            throw new RangeException('Key is not the correct size (must be 32 bytes).');
        }
    }

    /**
     * This function accepts a string and encrypts it using a key and random_bytes nonce variable
     * @param $string_to_encrypt
     * @return array
     * @throws Exception
     */
    public function encrypt($string_to_encrypt)
    {
        $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

        $encryption_data = [];

        $encrypted_string = '';
        $encrypted_string = sodium_crypto_secretbox(
            $string_to_encrypt,
            $nonce,
            $this->key
        );

        $encryption_data['nonce'] = $nonce;
        $encryption_data['encrypted_string'] = $encrypted_string;

        sodium_memzero($string_to_encrypt);
        return $encryption_data;
    }

    /**
     * This function accepts a base 64 wrapper and a string that needs to be decrypted.
     * the string is decoded with decode_base64 and if it returns false - exception will be thrown.
     * then a check is made if the message was truncated - if not the message is decrypted using sodium_crypto_secretbox_open
     * @param $base64_wrapper
     * @param $string_to_decrypt
     * @return bool|string
     * @throws Exception
     */
    public function decrypt($base64_wrapper, $string_to_decrypt)
    {
        $decrypted_string = '';
        $decoded = $base64_wrapper->decode_base64($string_to_decrypt);

        if ($decoded === false) {
            throw new Exception('Ooops, the encoding failed');
        }

        if (mb_strlen($decoded, '8bit') < (SODIUM_CRYPTO_SECRETBOX_NONCEBYTES + SODIUM_CRYPTO_SECRETBOX_MACBYTES)) {
            throw new Exception('Oops, the message was truncated');
        }

        $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');

        $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

        $decrypted_string = sodium_crypto_secretbox_open(
            $ciphertext,
            $nonce,
            $this->key
        );

        if ($decrypted_string === false) {
            throw new Exception('the message was tampered with in transit');
        }

        sodium_memzero($ciphertext);

        return $decrypted_string;
    }
}
