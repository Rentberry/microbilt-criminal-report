<?php
/**
 * File for class MicrobiltCriminalReportStructMessage_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructMessage_Type originally named Message_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructMessage_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The MsgCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgCode;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for Message_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_msgCode
     * @param string $_text
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function __construct($_msgClass = NULL,$_msgCode = NULL,$_text = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'MsgCode'=>$_msgCode,'Text'=>$_text),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get MsgCode value
     * @return string|null
     */
    public function getMsgCode()
    {
        return $this->MsgCode;
    }
    /**
     * Set MsgCode value
     * @param string $_msgCode the MsgCode
     * @return string
     */
    public function setMsgCode($_msgCode)
    {
        return ($this->MsgCode = $_msgCode);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $_text the Text
     * @return string
     */
    public function setText($_text)
    {
        return ($this->Text = $_text);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public static function magick_set_state(array $_array,$_className = __CLASS__)
    {
        return parent::magick_set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
