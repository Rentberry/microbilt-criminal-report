<?php
/**
 * File for class MicrobiltCriminalReportStructBusinessInquiry_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructBusinessInquiry_Type originally named BusinessInquiry_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructBusinessInquiry_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The Inquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructInquiry_Type
     */
    public $Inquiry;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for BusinessInquiry_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param MicrobiltCriminalReportStructInquiry_Type $_inquiry
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructBusinessInquiry_Type
     */
    public function __construct($_orgInfo = NULL,$_inquiry = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'Inquiry'=>$_inquiry,'Message'=>$_message),false);
    }
    /**
     * Get OrgInfo value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get Inquiry value
     * @return MicrobiltCriminalReportStructInquiry_Type|null
     */
    public function getInquiry()
    {
        return $this->Inquiry;
    }
    /**
     * Set Inquiry value
     * @param MicrobiltCriminalReportStructInquiry_Type $_inquiry the Inquiry
     * @return MicrobiltCriminalReportStructInquiry_Type
     */
    public function setInquiry($_inquiry)
    {
        return ($this->Inquiry = $_inquiry);
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
     * @return MicrobiltCriminalReportStructBusinessInquiry_Type
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
