<?php
/**
 * File for class MicrobiltCriminalReportStructEmailInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructEmailInfo_Type originally named EmailInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructEmailInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The EmailAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EmailAddr;
    /**
     * The IPAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IPAddress;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The ValidationCd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ValidationCd;
    /**
     * Constructor method for EmailInfo_Type
     * @see parent::__construct()
     * @param string $_emailAddr
     * @param string $_iPAddress
     * @param string $_reportedDt
     * @param string $_validationCd
     * @return MicrobiltCriminalReportStructEmailInfo_Type
     */
    public function __construct($_emailAddr = NULL,$_iPAddress = NULL,$_reportedDt = NULL,$_validationCd = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('EmailAddr'=>$_emailAddr,'IPAddress'=>$_iPAddress,'ReportedDt'=>$_reportedDt,'ValidationCd'=>$_validationCd),false);
    }
    /**
     * Get EmailAddr value
     * @return string|null
     */
    public function getEmailAddr()
    {
        return $this->EmailAddr;
    }
    /**
     * Set EmailAddr value
     * @param string $_emailAddr the EmailAddr
     * @return string
     */
    public function setEmailAddr($_emailAddr)
    {
        return ($this->EmailAddr = $_emailAddr);
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $_iPAddress the IPAddress
     * @return string
     */
    public function setIPAddress($_iPAddress)
    {
        return ($this->IPAddress = $_iPAddress);
    }
    /**
     * Get ReportedDt value
     * @return string|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param string $_reportedDt the ReportedDt
     * @return string
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
    }
    /**
     * Get ValidationCd value
     * @return string|null
     */
    public function getValidationCd()
    {
        return $this->ValidationCd;
    }
    /**
     * Set ValidationCd value
     * @param string $_validationCd the ValidationCd
     * @return string
     */
    public function setValidationCd($_validationCd)
    {
        return ($this->ValidationCd = $_validationCd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructEmailInfo_Type
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
