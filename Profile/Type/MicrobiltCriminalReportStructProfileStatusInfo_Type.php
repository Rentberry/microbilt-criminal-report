<?php
/**
 * File for class MicrobiltCriminalReportStructProfileStatusInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructProfileStatusInfo_Type originally named ProfileStatusInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructProfileStatusInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ProfileStatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ProfileStatusDt;
    /**
     * The StatusHTML
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusHTML;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ProfileStatusInfo_Type
     * @see parent::__construct()
     * @param date $_profileStatusDt
     * @param string $_statusHTML
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructProfileStatusInfo_Type
     */
    public function __construct($_profileStatusDt = NULL,$_statusHTML = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ProfileStatusDt'=>$_profileStatusDt,'StatusHTML'=>$_statusHTML,'Message'=>$_message),false);
    }
    /**
     * Get ProfileStatusDt value
     * @return date|null
     */
    public function getProfileStatusDt()
    {
        return $this->ProfileStatusDt;
    }
    /**
     * Set ProfileStatusDt value
     * @param date $_profileStatusDt the ProfileStatusDt
     * @return date
     */
    public function setProfileStatusDt($_profileStatusDt)
    {
        return ($this->ProfileStatusDt = $_profileStatusDt);
    }
    /**
     * Get StatusHTML value
     * @return string|null
     */
    public function getStatusHTML()
    {
        return $this->StatusHTML;
    }
    /**
     * Set StatusHTML value
     * @param string $_statusHTML the StatusHTML
     * @return string
     */
    public function setStatusHTML($_statusHTML)
    {
        return ($this->StatusHTML = $_statusHTML);
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
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructProfileStatusInfo_Type
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
