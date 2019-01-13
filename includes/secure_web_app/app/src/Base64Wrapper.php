<?php
/**
 * Wrapper class for the Base 64 encoding/decoding library
 *
 * Methods available are:
 *
 * Encode/Decode the given string with base 64 encoding
 *
 * @author CF Ingrams <cfi@dmu.ac.uk>
 * @copyright De Montfort University
 */

class Base64Wrapper
{
    /**
     * Base64Wrapper constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /**
     *The function accepts a string as a parameter and encoded_string variable is set to false at the start of the function.
     *if the string is not empty the function encodes the given string with data stored in variables nonce and encrypted_string.
     *
     * @param $string_to_encode
     * @return bool|string
     */
    public function encode_base64($string_to_encode)
    {
        $encoded_string = false;

        if (!empty($string_to_encode['encrypted_string'])) {
            $nonce = $string_to_encode['nonce'];
            $encrypted_string = $string_to_encode['encrypted_string'];
            $encoded_string = base64_encode($nonce . $encrypted_string);
        }

        return $encoded_string;
    }

    /**
     * The function accepts passed parameter as a string. variable decoded_string is set to false in the beginning of the function.
     * if the passed string is not empty - decoded_string is set to passed string which is basee64 decoded using "base64_decode" method, then decoded_string is returned.
     * @param $string_to_decode
     * @return bool|string
     */
    public function decode_base64($string_to_decode)
    {
        $decoded_string = false;
        if (!empty($string_to_decode)) {
            $decoded_string = base64_decode($string_to_decode);
        }
        return $decoded_string;
    }
}
