<?php
/**
 * Created by PhpStorm.
 * User: php-slim
 * Date: 11/01/19
 * Time: 15:30
 */

class messageModel
{
    /**
     * @var string
     * The source in which the message has been sent
     */
    private $source;

    /**
     * @var string
     * the destination the message is to be sent to
     */
    private $destination;

    /**
     * @var string
     * The time in which the message was sent
     */
    private $time;

    /**
     * @var string
     * The group id that is set by the user
     */
    private $id;

    /**
     * @var array
     * An array of the switches information ie if it is on or off
     */
    private $switches;

    /**
     * @var string
     * Whether the fan is FWD or RVS
     */
    private $fan;

    /**
     * @var string
     * temperature of device
     */
    private $temp;

    /**
     * @var string
     * Last Key entered into the device
     */
    private $key;

    /**
     * messageModel constructor. Initialises all the variables
     */
    public function __construct()
    {
        $this->source = 'Not Set';
        $this->destination = 'Not Set';
        $this->time = 'Not Set';
        $this->id = 'Not Set';
        $this->switches[0] = 'Not Set';
        $this->switches[1] = 'Not Set';
        $this->switches[2] = 'Not Set';
        $this->switches[3] = 'Not Set';
        $this->temp = 'Not Set';
        $this->key = 'Not Set';
    }

    /**
     *
     */
    public function __destruct()
    {

    }

    /**
     * @param $p_parsed_xml_array
     * takes in an array that has been converted from XML and is able to push the array into an
     * object ready to be used
     */
    public function set_parameters($p_parsed_xml_array)
    {

        if (isset($p_parsed_xml_array['TEMP'])) {
            $this->temp = $p_parsed_xml_array['TEMP'];
        } else {
            $this->temp = 'Not Set';
        }

        if (isset($p_parsed_xml_array['SOURCEMSISDN'])) {
            $this->source = $p_parsed_xml_array['SOURCEMSISDN'];
        } else {
            $this->source = 'Not Set';
        }

        if (isset($p_parsed_xml_array['DESTINATIONMSISDN'])) {
            $this->destination = $p_parsed_xml_array['DESTINATIONMSISDN'];
        } else {
            $this->destination = 'Not Set';
        }


        if (isset($p_parsed_xml_array['RECEIVEDTIME'])) {
            $this->time = $p_parsed_xml_array['RECEIVEDTIME'];
        } else {
            $this->time = 'Not Set';
        }

        if (isset($p_parsed_xml_array['ID'])) {
            $this->id = $p_parsed_xml_array['ID'];
        } else {
            $this->id = 'Not Set';
        }

        if (isset($p_parsed_xml_array['S1'])) {
            $this->switches[0] = $p_parsed_xml_array['S1'];
        } else {
            $this->switches[0] = 'Not Set';
        }

        if (isset($p_parsed_xml_array['S2'])) {
            $this->switches[1] = $p_parsed_xml_array['S2'];
        } else {
            $this->switches[1] = 'Not Set';
        }

        if (isset($p_parsed_xml_array['S3'])) {
            $this->switches[2] = $p_parsed_xml_array['S3'];
        } else {
            $this->switches[2] = 'Not Set';
        }

        if (isset($p_parsed_xml_array['S4'])) {
            $this->switches[3] = $p_parsed_xml_array['S4'];
        } else {
            $this->switches[3] = 'Not Set';
        }

        if (isset($p_parsed_xml_array['FAN'])) {
            $this->fan = $p_parsed_xml_array['FAN'];
        } else {
            $this->fan = 'Not Set';
        }


        if (isset($p_parsed_xml_array['KP'])) {
            $this->key = $p_parsed_xml_array['KP'];
        } else {
            $this->key = 'Not Set';
        }
    }

    /**
     * @return string
     * gets the source from the model
     */
    public function get_source()
    {
        return $this->source;
    }


    /**
     * @return string
     * gets the destination variable from the model
     */
    public function get_destination()
    {
        return $this->destination;
    }

    /**
     * @return gets the time of the message from the model
     */
    public function get_time()
    {
        return $this->time;
    }

    /**
     * @return gets the group id from the model
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * @return string
     * gets the information of switch 1 from the model
     */
    public function get_switch1()
    {
        return $this->switches[0];
    }

    /**
     * @return string
     * gets the information of switch 2 from the model
     */
    public function get_switch2()
    {
        return $this->switches[1];
    }

    /**
     * @return string
     * gets the information of switch 3 from the model
     */
    public function get_switch3()
    {
        return $this->switches[2];
    }

    /**
     * @return mixed
     * gets the information of switch 4 from the model
     */
    public function get_switch4()
    {
        return $this->switches[3];
    }

    /**
     * @return mixed
     * gets the information of the fan from the model
     */
    public function get_fan()
    {
        return $this->fan;
    }

    /**
     * @return string
     * gets the temperature information from the model
     */
    public function get_temp()
    {
        return $this->temp;
    }

    /**
     * @return string
     * gets the key from the model
     */
    public function get_key()
    {
        return $this->key;
    }


}