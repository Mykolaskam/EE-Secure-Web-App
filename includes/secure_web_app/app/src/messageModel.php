<?php
/**
 * Created by PhpStorm.
 * User: php-slim
 * Date: 11/01/19
 * Time: 15:30
 */

class messageModel
{
    private $source;
    private $destination;
    private $time;
    private $id;
    private $switches;
    private $fan;
    private $temp;
    private $key;

    public function __construct()
    {
        $this->source = 'Not Set';
        $this->destination ='Not Set';
        $this->time = 'Not Set';
        $this->id = 'Not Set';
        $this->switches[0] = 'Not Set';
        $this->switches[1] = 'Not Set';
        $this->switches[2] = 'Not Set';
        $this->switches[3] = 'Not Set';
        $this->temp = 'Not Set';
        $this->key = 'Not Set';
    }

    public function __destruct()
    {

    }
    public function setParameters($parsed_xml_array)
    {
   
        if (isset($parsed_xml_array['TEMP'])) {
            $this->temp = $parsed_xml_array['TEMP'];
        }
        else{
            $this->temp = 'Not Set';
        }

        if (isset($parsed_xml_array['SOURCEMSISDN'])) {
            $this->source = $parsed_xml_array['SOURCEMSISDN'];
        }
        else{
            $this->source = 'Not Set';
        }

        if (isset($parsed_xml_array['DESTINATIONMSISDN'])) {
            $this->destination = $parsed_xml_array['DESTINATIONMSISDN'];
        }
        else{
            $this->destination = 'Not Set';
        }


        if (isset($parsed_xml_array['RECEIVEDTIME'])) {
            $this->time = $parsed_xml_array['RECEIVEDTIME'];
        }
        else{
            $this->time = 'Not Set';
        }

        if (isset($parsed_xml_array['ID'])) {
            $this->id = $parsed_xml_array['ID'];
        }
        else{
            $this->id = 'Not Set';
        }

        if (isset($parsed_xml_array['S1'])) {
            $this->switches[0] = $parsed_xml_array['S1'];
        }
        else{
            $this->switches[0] = 'Not Set';
        }

        if (isset($parsed_xml_array['S2'])) {
            $this->switches[1] = $parsed_xml_array['S2'];
        }
        else{
            $this->switches[1] = 'Not Set';
        }

        if (isset($parsed_xml_array['S3'])) {
            $this->switches[2] = $parsed_xml_array['S3'];
        }
        else{
            $this->switches[2] = 'Not Set';
        }

        if (isset($parsed_xml_array['S4'])) {
            $this->switches[3] = $parsed_xml_array['S4'];
        }
        else{
            $this->switches[3] = 'Not Set';
        }

        if (isset($parsed_xml_array['FAN'])) {
            $this->fan = $parsed_xml_array['FAN'];
        }
        else{
            $this->fan = 'Not Set';
        }



        if (isset($parsed_xml_array['KP'])) {
            $this->key = $parsed_xml_array['KP'];
        }
        else{
            $this->key = 'Not Set';
        }
    }

    public function getSource()
    {
        return $this->source;
    }


    public function getDestination()
    {
        return $this->destination;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSwitch1()
    {
        return $this->switches[0];
    }
    public function getSwitch2()
    {
        return $this->switches[1];
    }
    public function getSwitch3()
    {
        return $this->switches[2];
    }
    public function getSwitch4()
    {
        return $this->switches[3];
    }
    public function getFan()
    {
        return $this->fan;
    }

    public function getTemp()
    {
        return $this->temp;
    }

    public function getKey()
    {
        return $this->key;
    }


}