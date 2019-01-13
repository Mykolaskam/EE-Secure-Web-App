<?php
/**
 * class XmlParser
 *
 * Parses a given XML string and returns an associative array
 * todo: include attributes in output - how?
 *
 * @author CF Ingrams - cfi@dmu.ac.uk
 * @copyright De Montfort University
 */

class XmlParser
{
    /**
     * @var
     */
    private $xml_parser;                              // handle to instance of the XML parser
    /**
     * @var array
     */
    private $arr_parsed_data;              // array holds extracted data
    /**
     * @var
     */
    private $element_name;                // store the current element name
    /**
     * @var
     */
    private $arr_temporary_attributes;    // temporarily store tag attributes and values
    /**
     * @var
     */
    private $xml_string_to_parse;

    /**
     * XmlParser constructor.
     */
    public function __construct()
    {
        $this->arr_parsed_data = [];
    }

    // release retained memory

    /**
     *
     */
    public function __destruct()
    {
        xml_parser_free($this->xml_parser);
    }

    /**
     * @param $xml_string_to_parse
     */
    public function set_xml_string_to_parse($xml_string_to_parse)
    {
        $this->xml_string_to_parse = $xml_string_to_parse;
    }

    /**
     * @return array
     */
    public function get_parsed_data()
    {
        return $this->arr_parsed_data;
    }

    /**
     *
     */
    public function parse_the_xml_string()
    {
        $this->xml_parser = xml_parser_create();

        xml_set_object($this->xml_parser, $this);

        // assign functions to be called when a new element is entered and exited
        xml_set_element_handler($this->xml_parser, "open_element", "close_element");

        // assign the function to be used when an element contains data
        xml_set_character_data_handler($this->xml_parser, "process_element_data");

        $this->parse_the_data_string();
    }

    // use the parser to step through the element tags

    /**
     *
     */
    private function parse_the_data_string()
    {
        xml_parse($this->xml_parser, $this->xml_string_to_parse);
    }

    // process an open element event & store the tag name
    // extract the attribute names and values, if any
    /**
     * @param $parser
     * @param $element_name
     * @param $attributes
     */
    private function open_element($parser, $element_name, $attributes)
    {
        $this->element_name = $element_name;
        if (sizeof($attributes) > 0) {
            foreach ($attributes as $att_name => $att_value) {
                $tag_att = $element_name . "." . $att_name;
                $this->arr_temporary_attributes[$tag_att] = $att_value;
            }
        }
    }

    // process data from an element

    /**
     * @param $parser
     * @param $element_data
     */
    private function process_element_data($parser, $element_data)
    {
        if (array_key_exists($this->element_name, $this->arr_parsed_data) === false) {
            $this->arr_parsed_data[$this->element_name] = $element_data;
            if (isset($this->arr_temporary_attributes) && count($this->arr_temporary_attributes) > 0) {
                foreach ($this->arr_temporary_attributes as $tag_att_name => $tag_att_value) {
                    $this->arr_parsed_data[$tag_att_name] = $tag_att_value;
                }
            }
        }
    }

    // process a close element event

    /**
     * @param $parser
     * @param $element_name
     */
    private function close_element($parser, $element_name)
    {
        // do nothing here
    }
}