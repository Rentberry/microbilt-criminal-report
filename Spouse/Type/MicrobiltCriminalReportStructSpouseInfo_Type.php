<?php
/**
 * File for class MicrobiltCriminalReportStructSpouseInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSpouseInfo_Type originally named SpouseInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSpouseInfo_Type extends MicrobiltCriminalReportStructAggregate
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
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructContactInfo_Type
     */
    public $ContactInfo;
    /**
     * The TINInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructTINInfo_Type
     */
    public $TINInfo;
    /**
     * The BirthDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthDt;
    /**
     * The DeathDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DeathDt;
    /**
     * The DriversLicense
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDriversLicense_Type
     */
    public $DriversLicense;
    /**
     * The MothersMaidenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MothersMaidenName;
    /**
     * The EmploymentHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructEmploymentHistory_Type
     */
    public $EmploymentHistory;
    /**
     * Constructor method for SpouseInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonName_Type $_personName
     * @param MicrobiltCriminalReportStructContactInfo_Type $_contactInfo
     * @param MicrobiltCriminalReportStructTINInfo_Type $_tINInfo
     * @param string $_birthDt
     * @param string $_deathDt
     * @param MicrobiltCriminalReportStructDriversLicense_Type $_driversLicense
     * @param string $_mothersMaidenName
     * @param MicrobiltCriminalReportStructEmploymentHistory_Type $_employmentHistory
     * @return MicrobiltCriminalReportStructSpouseInfo_Type
     */
    public function __construct($_personName = NULL,$_contactInfo = NULL,$_tINInfo = NULL,$_birthDt = NULL,$_deathDt = NULL,$_driversLicense = NULL,$_mothersMaidenName = NULL,$_employmentHistory = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonName'=>$_personName,'ContactInfo'=>$_contactInfo,'TINInfo'=>$_tINInfo,'BirthDt'=>$_birthDt,'DeathDt'=>$_deathDt,'DriversLicense'=>$_driversLicense,'MothersMaidenName'=>$_mothersMaidenName,'EmploymentHistory'=>$_employmentHistory),false);
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
     * Get ContactInfo value
     * @return MicrobiltCriminalReportStructContactInfo_Type|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @param MicrobiltCriminalReportStructContactInfo_Type $_contactInfo the ContactInfo
     * @return MicrobiltCriminalReportStructContactInfo_Type
     */
    public function setContactInfo($_contactInfo)
    {
        return ($this->ContactInfo = $_contactInfo);
    }
    /**
     * Get TINInfo value
     * @return MicrobiltCriminalReportStructTINInfo_Type|null
     */
    public function getTINInfo()
    {
        return $this->TINInfo;
    }
    /**
     * Set TINInfo value
     * @param MicrobiltCriminalReportStructTINInfo_Type $_tINInfo the TINInfo
     * @return MicrobiltCriminalReportStructTINInfo_Type
     */
    public function setTINInfo($_tINInfo)
    {
        return ($this->TINInfo = $_tINInfo);
    }
    /**
     * Get BirthDt value
     * @return string|null
     */
    public function getBirthDt()
    {
        return $this->BirthDt;
    }
    /**
     * Set BirthDt value
     * @param string $_birthDt the BirthDt
     * @return string
     */
    public function setBirthDt($_birthDt)
    {
        return ($this->BirthDt = $_birthDt);
    }
    /**
     * Get DeathDt value
     * @return string|null
     */
    public function getDeathDt()
    {
        return $this->DeathDt;
    }
    /**
     * Set DeathDt value
     * @param string $_deathDt the DeathDt
     * @return string
     */
    public function setDeathDt($_deathDt)
    {
        return ($this->DeathDt = $_deathDt);
    }
    /**
     * Get DriversLicense value
     * @return MicrobiltCriminalReportStructDriversLicense_Type|null
     */
    public function getDriversLicense()
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param MicrobiltCriminalReportStructDriversLicense_Type $_driversLicense the DriversLicense
     * @return MicrobiltCriminalReportStructDriversLicense_Type
     */
    public function setDriversLicense($_driversLicense)
    {
        return ($this->DriversLicense = $_driversLicense);
    }
    /**
     * Get MothersMaidenName value
     * @return string|null
     */
    public function getMothersMaidenName()
    {
        return $this->MothersMaidenName;
    }
    /**
     * Set MothersMaidenName value
     * @param string $_mothersMaidenName the MothersMaidenName
     * @return string
     */
    public function setMothersMaidenName($_mothersMaidenName)
    {
        return ($this->MothersMaidenName = $_mothersMaidenName);
    }
    /**
     * Get EmploymentHistory value
     * @return MicrobiltCriminalReportStructEmploymentHistory_Type|null
     */
    public function getEmploymentHistory()
    {
        return $this->EmploymentHistory;
    }
    /**
     * Set EmploymentHistory value
     * @param MicrobiltCriminalReportStructEmploymentHistory_Type $_employmentHistory the EmploymentHistory
     * @return MicrobiltCriminalReportStructEmploymentHistory_Type
     */
    public function setEmploymentHistory($_employmentHistory)
    {
        return ($this->EmploymentHistory = $_employmentHistory);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructSpouseInfo_Type
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
