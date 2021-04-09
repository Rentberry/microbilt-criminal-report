<?php
/**
 * File for class MicrobiltCriminalReportStructHuntingFishingLicense_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructHuntingFishingLicense_Type originally named HuntingFishingLicense_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructHuntingFishingLicense_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The LicenseNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LicenseNum;
    /**
     * The LicenseType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LicenseType;
    /**
     * The LicenseState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LicenseState;
    /**
     * Constructor method for HuntingFishingLicense_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param string $_licenseNum
     * @param string $_licenseType
     * @param string $_licenseState
     * @return MicrobiltCriminalReportStructHuntingFishingLicense_Type
     */
    public function __construct($_personInfo = NULL,$_licenseNum = NULL,$_licenseType = NULL,$_licenseState = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'LicenseNum'=>$_licenseNum,'LicenseType'=>$_licenseType,'LicenseState'=>$_licenseState),false);
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
     * Get LicenseNum value
     * @return string|null
     */
    public function getLicenseNum()
    {
        return $this->LicenseNum;
    }
    /**
     * Set LicenseNum value
     * @param string $_licenseNum the LicenseNum
     * @return string
     */
    public function setLicenseNum($_licenseNum)
    {
        return ($this->LicenseNum = $_licenseNum);
    }
    /**
     * Get LicenseType value
     * @return string|null
     */
    public function getLicenseType()
    {
        return $this->LicenseType;
    }
    /**
     * Set LicenseType value
     * @param string $_licenseType the LicenseType
     * @return string
     */
    public function setLicenseType($_licenseType)
    {
        return ($this->LicenseType = $_licenseType);
    }
    /**
     * Get LicenseState value
     * @return string|null
     */
    public function getLicenseState()
    {
        return $this->LicenseState;
    }
    /**
     * Set LicenseState value
     * @param string $_licenseState the LicenseState
     * @return string
     */
    public function setLicenseState($_licenseState)
    {
        return ($this->LicenseState = $_licenseState);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructHuntingFishingLicense_Type
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
