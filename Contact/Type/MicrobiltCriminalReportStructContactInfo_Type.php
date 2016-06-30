<?php
/**
 * File for class MicrobiltCriminalReportStructContactInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructContactInfo_Type originally named ContactInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructContactInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ContactPref
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContactPref;
    /**
     * The PhoneNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPhoneNum_Type
     */
    public $PhoneNum;
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContactName;
    /**
     * The EmailAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EmailAddr;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $URL;
    /**
     * The PostAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPostAddr_Type
     */
    public $PostAddr;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The ContactType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContactType;
    /**
     * The ValidationInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructValidationInfo_Type
     */
    public $ValidationInfo;
    /**
     * The InstantMessagingInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructInstantMessagingInfo_Type
     */
    public $InstantMessagingInfo;
    /**
     * Constructor method for ContactInfo_Type
     * @see parent::__construct()
     * @param string $_contactPref
     * @param MicrobiltCriminalReportStructPhoneNum_Type $_phoneNum
     * @param string $_contactName
     * @param string $_emailAddr
     * @param string $_uRL
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param string $_contactType
     * @param MicrobiltCriminalReportStructValidationInfo_Type $_validationInfo
     * @param MicrobiltCriminalReportStructInstantMessagingInfo_Type $_instantMessagingInfo
     * @return MicrobiltCriminalReportStructContactInfo_Type
     */
    public function __construct($_contactPref = NULL,$_phoneNum = NULL,$_contactName = NULL,$_emailAddr = NULL,$_uRL = NULL,$_postAddr = NULL,$_message = NULL,$_contactType = NULL,$_validationInfo = NULL,$_instantMessagingInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ContactPref'=>$_contactPref,'PhoneNum'=>$_phoneNum,'ContactName'=>$_contactName,'EmailAddr'=>$_emailAddr,'URL'=>$_uRL,'PostAddr'=>$_postAddr,'Message'=>$_message,'ContactType'=>$_contactType,'ValidationInfo'=>$_validationInfo,'InstantMessagingInfo'=>$_instantMessagingInfo),false);
    }
    /**
     * Get ContactPref value
     * @return string|null
     */
    public function getContactPref()
    {
        return $this->ContactPref;
    }
    /**
     * Set ContactPref value
     * @param string $_contactPref the ContactPref
     * @return string
     */
    public function setContactPref($_contactPref)
    {
        return ($this->ContactPref = $_contactPref);
    }
    /**
     * Get PhoneNum value
     * @return MicrobiltCriminalReportStructPhoneNum_Type|null
     */
    public function getPhoneNum()
    {
        return $this->PhoneNum;
    }
    /**
     * Set PhoneNum value
     * @param MicrobiltCriminalReportStructPhoneNum_Type $_phoneNum the PhoneNum
     * @return MicrobiltCriminalReportStructPhoneNum_Type
     */
    public function setPhoneNum($_phoneNum)
    {
        return ($this->PhoneNum = $_phoneNum);
    }
    /**
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $_contactName the ContactName
     * @return string
     */
    public function setContactName($_contactName)
    {
        return ($this->ContactName = $_contactName);
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
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $_uRL the URL
     * @return string
     */
    public function setURL($_uRL)
    {
        return ($this->URL = $_uRL);
    }
    /**
     * Get PostAddr value
     * @return MicrobiltCriminalReportStructPostAddr_Type|null
     */
    public function getPostAddr()
    {
        return $this->PostAddr;
    }
    /**
     * Set PostAddr value
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr the PostAddr
     * @return MicrobiltCriminalReportStructPostAddr_Type
     */
    public function setPostAddr($_postAddr)
    {
        return ($this->PostAddr = $_postAddr);
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
     * Get ContactType value
     * @return string|null
     */
    public function getContactType()
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param string $_contactType the ContactType
     * @return string
     */
    public function setContactType($_contactType)
    {
        return ($this->ContactType = $_contactType);
    }
    /**
     * Get ValidationInfo value
     * @return MicrobiltCriminalReportStructValidationInfo_Type|null
     */
    public function getValidationInfo()
    {
        return $this->ValidationInfo;
    }
    /**
     * Set ValidationInfo value
     * @param MicrobiltCriminalReportStructValidationInfo_Type $_validationInfo the ValidationInfo
     * @return MicrobiltCriminalReportStructValidationInfo_Type
     */
    public function setValidationInfo($_validationInfo)
    {
        return ($this->ValidationInfo = $_validationInfo);
    }
    /**
     * Get InstantMessagingInfo value
     * @return MicrobiltCriminalReportStructInstantMessagingInfo_Type|null
     */
    public function getInstantMessagingInfo()
    {
        return $this->InstantMessagingInfo;
    }
    /**
     * Set InstantMessagingInfo value
     * @param MicrobiltCriminalReportStructInstantMessagingInfo_Type $_instantMessagingInfo the InstantMessagingInfo
     * @return MicrobiltCriminalReportStructInstantMessagingInfo_Type
     */
    public function setInstantMessagingInfo($_instantMessagingInfo)
    {
        return ($this->InstantMessagingInfo = $_instantMessagingInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructContactInfo_Type
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
