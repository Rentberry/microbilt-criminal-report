<?php
/**
 * File for class MicrobiltCriminalReportStructAddressInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAddressInfo_Type originally named AddressInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAddressInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The PostAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPostAddr_Type
     */
    public $PostAddr;
    /**
     * The Verified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $Verified;
    /**
     * The Shared
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $Shared;
    /**
     * The PhoneInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPhoneInfo_Type
     */
    public $PhoneInfo;
    /**
     * Constructor method for AddressInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr
     * @param MicrobiltCriminalReportEnumBoolean $_verified
     * @param MicrobiltCriminalReportEnumBoolean $_shared
     * @param MicrobiltCriminalReportStructPhoneInfo_Type $_phoneInfo
     * @return MicrobiltCriminalReportStructAddressInfo_Type
     */
    public function __construct($_personInfo = NULL,$_postAddr = NULL,$_verified = NULL,$_shared = NULL,$_phoneInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'PostAddr'=>$_postAddr,'Verified'=>$_verified,'Shared'=>$_shared,'PhoneInfo'=>$_phoneInfo),false);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltCriminalReportStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
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
     * Get Verified value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getVerified()
    {
        return $this->Verified;
    }
    /**
     * Set Verified value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_verified the Verified
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setVerified($_verified)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_verified))
        {
            return false;
        }
        return ($this->Verified = $_verified);
    }
    /**
     * Get Shared value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getShared()
    {
        return $this->Shared;
    }
    /**
     * Set Shared value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_shared the Shared
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setShared($_shared)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_shared))
        {
            return false;
        }
        return ($this->Shared = $_shared);
    }
    /**
     * Get PhoneInfo value
     * @return MicrobiltCriminalReportStructPhoneInfo_Type|null
     */
    public function getPhoneInfo()
    {
        return $this->PhoneInfo;
    }
    /**
     * Set PhoneInfo value
     * @param MicrobiltCriminalReportStructPhoneInfo_Type $_phoneInfo the PhoneInfo
     * @return MicrobiltCriminalReportStructPhoneInfo_Type
     */
    public function setPhoneInfo($_phoneInfo)
    {
        return ($this->PhoneInfo = $_phoneInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAddressInfo_Type
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
