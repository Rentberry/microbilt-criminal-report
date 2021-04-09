<?php
/**
 * File for class MicrobiltCriminalReportStructAKAInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAKAInfo_Type originally named AKAInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAKAInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonName_Type
     */
    public $PersonName;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for AKAInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonName_Type $_personName
     * @param string $_recordID
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructAKAInfo_Type
     */
    public function __construct($_personName = NULL,$_recordID = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonName'=>$_personName,'RecordID'=>$_recordID,'Message'=>$_message),false);
    }
    /**
     * Get PersonName value
     * @return MicrobiltCriminalReportStructPersonName_Type|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param MicrobiltCriminalReportStructPersonName_Type $_personName the PersonName
     * @return MicrobiltCriminalReportStructPersonName_Type
     */
    public function setPersonName($_personName)
    {
        return ($this->PersonName = $_personName);
    }
    /**
     * Get RecordID value
     * @return string|null
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }
    /**
     * Set RecordID value
     * @param string $_recordID the RecordID
     * @return string
     */
    public function setRecordID($_recordID)
    {
        return ($this->RecordID = $_recordID);
    }
    /**
     * Get Message value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltCriminalReportStructMessage_Type $_message the Message
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAKAInfo_Type
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
