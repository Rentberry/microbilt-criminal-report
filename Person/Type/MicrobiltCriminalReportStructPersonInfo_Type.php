<?php
/**
 * File for class MicrobiltCriminalReportStructPersonInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructPersonInfo_Type originally named PersonInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructPersonInfo_Type extends MicrobiltCriminalReportStructAggregate
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
     * The BirthState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthState;
    /**
     * The BirthCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthCountry;
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
     * The SpouseInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructSpouseInfo_Type
     */
    public $SpouseInfo;
    /**
     * The EmploymentHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructEmploymentHistory_Type
     */
    public $EmploymentHistory;
    /**
     * The SchoolInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructSchoolInfo_Type
     */
    public $SchoolInfo;
    /**
     * The PhysicalCharacteristics
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPhysicalCharacteristics_Type
     */
    public $PhysicalCharacteristics;
    /**
     * The Citizenship
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Citizenship;
    /**
     * The LanguageSpoken
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LanguageSpoken;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The Quality
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Quality;
    /**
     * The BirthCity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthCity;
    /**
     * The Nationality
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Nationality;
    /**
     * The Affiliation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Affiliation;
    /**
     * The ValidationInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructValidationInfo_Type
     */
    public $ValidationInfo;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The MilitaryIdInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMilitaryIdInfo_Type
     */
    public $MilitaryIdInfo;
    /**
     * The PassportInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPassportInfo_Type
     */
    public $PassportInfo;
    /**
     * The ChildrenInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructChildrenInfo_Type
     */
    public $ChildrenInfo;
    /**
     * The HometownArea
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HometownArea;
    /**
     * The RelationshipStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RelationshipStatus;
    /**
     * The Orientation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Orientation;
    /**
     * The AKAInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAKAInfo_Type
     */
    public $AKAInfo;
    /**
     * The Zodiac
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Zodiac;
    /**
     * The BirthYear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthYear;
    /**
     * The OwnershipPercentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $OwnershipPercentage;
    /**
     * Constructor method for PersonInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonName_Type $_personName
     * @param MicrobiltCriminalReportStructContactInfo_Type $_contactInfo
     * @param MicrobiltCriminalReportStructTINInfo_Type $_tINInfo
     * @param string $_birthDt
     * @param string $_birthState
     * @param string $_birthCountry
     * @param string $_deathDt
     * @param MicrobiltCriminalReportStructDriversLicense_Type $_driversLicense
     * @param string $_mothersMaidenName
     * @param MicrobiltCriminalReportStructSpouseInfo_Type $_spouseInfo
     * @param MicrobiltCriminalReportStructEmploymentHistory_Type $_employmentHistory
     * @param MicrobiltCriminalReportStructSchoolInfo_Type $_schoolInfo
     * @param MicrobiltCriminalReportStructPhysicalCharacteristics_Type $_physicalCharacteristics
     * @param string $_citizenship
     * @param string $_languageSpoken
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param string $_quality
     * @param string $_birthCity
     * @param string $_nationality
     * @param string $_affiliation
     * @param MicrobiltCriminalReportStructValidationInfo_Type $_validationInfo
     * @param string $_recordID
     * @param MicrobiltCriminalReportStructMilitaryIdInfo_Type $_militaryIdInfo
     * @param MicrobiltCriminalReportStructPassportInfo_Type $_passportInfo
     * @param MicrobiltCriminalReportStructChildrenInfo_Type $_childrenInfo
     * @param string $_hometownArea
     * @param string $_relationshipStatus
     * @param string $_orientation
     * @param MicrobiltCriminalReportStructAKAInfo_Type $_aKAInfo
     * @param string $_zodiac
     * @param string $_birthYear
     * @param float $_ownershipPercentage
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function __construct($_personName = NULL,$_contactInfo = NULL,$_tINInfo = NULL,$_birthDt = NULL,$_birthState = NULL,$_birthCountry = NULL,$_deathDt = NULL,$_driversLicense = NULL,$_mothersMaidenName = NULL,$_spouseInfo = NULL,$_employmentHistory = NULL,$_schoolInfo = NULL,$_physicalCharacteristics = NULL,$_citizenship = NULL,$_languageSpoken = NULL,$_message = NULL,$_quality = NULL,$_birthCity = NULL,$_nationality = NULL,$_affiliation = NULL,$_validationInfo = NULL,$_recordID = NULL,$_militaryIdInfo = NULL,$_passportInfo = NULL,$_childrenInfo = NULL,$_hometownArea = NULL,$_relationshipStatus = NULL,$_orientation = NULL,$_aKAInfo = NULL,$_zodiac = NULL,$_birthYear = NULL,$_ownershipPercentage = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonName'=>$_personName,'ContactInfo'=>$_contactInfo,'TINInfo'=>$_tINInfo,'BirthDt'=>$_birthDt,'BirthState'=>$_birthState,'BirthCountry'=>$_birthCountry,'DeathDt'=>$_deathDt,'DriversLicense'=>$_driversLicense,'MothersMaidenName'=>$_mothersMaidenName,'SpouseInfo'=>$_spouseInfo,'EmploymentHistory'=>$_employmentHistory,'SchoolInfo'=>$_schoolInfo,'PhysicalCharacteristics'=>$_physicalCharacteristics,'Citizenship'=>$_citizenship,'LanguageSpoken'=>$_languageSpoken,'Message'=>$_message,'Quality'=>$_quality,'BirthCity'=>$_birthCity,'Nationality'=>$_nationality,'Affiliation'=>$_affiliation,'ValidationInfo'=>$_validationInfo,'RecordID'=>$_recordID,'MilitaryIdInfo'=>$_militaryIdInfo,'PassportInfo'=>$_passportInfo,'ChildrenInfo'=>$_childrenInfo,'HometownArea'=>$_hometownArea,'RelationshipStatus'=>$_relationshipStatus,'Orientation'=>$_orientation,'AKAInfo'=>$_aKAInfo,'Zodiac'=>$_zodiac,'BirthYear'=>$_birthYear,'OwnershipPercentage'=>$_ownershipPercentage),false);
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
     * Get BirthState value
     * @return string|null
     */
    public function getBirthState()
    {
        return $this->BirthState;
    }
    /**
     * Set BirthState value
     * @param string $_birthState the BirthState
     * @return string
     */
    public function setBirthState($_birthState)
    {
        return ($this->BirthState = $_birthState);
    }
    /**
     * Get BirthCountry value
     * @return string|null
     */
    public function getBirthCountry()
    {
        return $this->BirthCountry;
    }
    /**
     * Set BirthCountry value
     * @param string $_birthCountry the BirthCountry
     * @return string
     */
    public function setBirthCountry($_birthCountry)
    {
        return ($this->BirthCountry = $_birthCountry);
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
     * Get SpouseInfo value
     * @return MicrobiltCriminalReportStructSpouseInfo_Type|null
     */
    public function getSpouseInfo()
    {
        return $this->SpouseInfo;
    }
    /**
     * Set SpouseInfo value
     * @param MicrobiltCriminalReportStructSpouseInfo_Type $_spouseInfo the SpouseInfo
     * @return MicrobiltCriminalReportStructSpouseInfo_Type
     */
    public function setSpouseInfo($_spouseInfo)
    {
        return ($this->SpouseInfo = $_spouseInfo);
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
     * Get SchoolInfo value
     * @return MicrobiltCriminalReportStructSchoolInfo_Type|null
     */
    public function getSchoolInfo()
    {
        return $this->SchoolInfo;
    }
    /**
     * Set SchoolInfo value
     * @param MicrobiltCriminalReportStructSchoolInfo_Type $_schoolInfo the SchoolInfo
     * @return MicrobiltCriminalReportStructSchoolInfo_Type
     */
    public function setSchoolInfo($_schoolInfo)
    {
        return ($this->SchoolInfo = $_schoolInfo);
    }
    /**
     * Get PhysicalCharacteristics value
     * @return MicrobiltCriminalReportStructPhysicalCharacteristics_Type|null
     */
    public function getPhysicalCharacteristics()
    {
        return $this->PhysicalCharacteristics;
    }
    /**
     * Set PhysicalCharacteristics value
     * @param MicrobiltCriminalReportStructPhysicalCharacteristics_Type $_physicalCharacteristics the PhysicalCharacteristics
     * @return MicrobiltCriminalReportStructPhysicalCharacteristics_Type
     */
    public function setPhysicalCharacteristics($_physicalCharacteristics)
    {
        return ($this->PhysicalCharacteristics = $_physicalCharacteristics);
    }
    /**
     * Get Citizenship value
     * @return string|null
     */
    public function getCitizenship()
    {
        return $this->Citizenship;
    }
    /**
     * Set Citizenship value
     * @param string $_citizenship the Citizenship
     * @return string
     */
    public function setCitizenship($_citizenship)
    {
        return ($this->Citizenship = $_citizenship);
    }
    /**
     * Get LanguageSpoken value
     * @return string|null
     */
    public function getLanguageSpoken()
    {
        return $this->LanguageSpoken;
    }
    /**
     * Set LanguageSpoken value
     * @param string $_languageSpoken the LanguageSpoken
     * @return string
     */
    public function setLanguageSpoken($_languageSpoken)
    {
        return ($this->LanguageSpoken = $_languageSpoken);
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
     * Get Quality value
     * @return string|null
     */
    public function getQuality()
    {
        return $this->Quality;
    }
    /**
     * Set Quality value
     * @param string $_quality the Quality
     * @return string
     */
    public function setQuality($_quality)
    {
        return ($this->Quality = $_quality);
    }
    /**
     * Get BirthCity value
     * @return string|null
     */
    public function getBirthCity()
    {
        return $this->BirthCity;
    }
    /**
     * Set BirthCity value
     * @param string $_birthCity the BirthCity
     * @return string
     */
    public function setBirthCity($_birthCity)
    {
        return ($this->BirthCity = $_birthCity);
    }
    /**
     * Get Nationality value
     * @return string|null
     */
    public function getNationality()
    {
        return $this->Nationality;
    }
    /**
     * Set Nationality value
     * @param string $_nationality the Nationality
     * @return string
     */
    public function setNationality($_nationality)
    {
        return ($this->Nationality = $_nationality);
    }
    /**
     * Get Affiliation value
     * @return string|null
     */
    public function getAffiliation()
    {
        return $this->Affiliation;
    }
    /**
     * Set Affiliation value
     * @param string $_affiliation the Affiliation
     * @return string
     */
    public function setAffiliation($_affiliation)
    {
        return ($this->Affiliation = $_affiliation);
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
     * Get MilitaryIdInfo value
     * @return MicrobiltCriminalReportStructMilitaryIdInfo_Type|null
     */
    public function getMilitaryIdInfo()
    {
        return $this->MilitaryIdInfo;
    }
    /**
     * Set MilitaryIdInfo value
     * @param MicrobiltCriminalReportStructMilitaryIdInfo_Type $_militaryIdInfo the MilitaryIdInfo
     * @return MicrobiltCriminalReportStructMilitaryIdInfo_Type
     */
    public function setMilitaryIdInfo($_militaryIdInfo)
    {
        return ($this->MilitaryIdInfo = $_militaryIdInfo);
    }
    /**
     * Get PassportInfo value
     * @return MicrobiltCriminalReportStructPassportInfo_Type|null
     */
    public function getPassportInfo()
    {
        return $this->PassportInfo;
    }
    /**
     * Set PassportInfo value
     * @param MicrobiltCriminalReportStructPassportInfo_Type $_passportInfo the PassportInfo
     * @return MicrobiltCriminalReportStructPassportInfo_Type
     */
    public function setPassportInfo($_passportInfo)
    {
        return ($this->PassportInfo = $_passportInfo);
    }
    /**
     * Get ChildrenInfo value
     * @return MicrobiltCriminalReportStructChildrenInfo_Type|null
     */
    public function getChildrenInfo()
    {
        return $this->ChildrenInfo;
    }
    /**
     * Set ChildrenInfo value
     * @param MicrobiltCriminalReportStructChildrenInfo_Type $_childrenInfo the ChildrenInfo
     * @return MicrobiltCriminalReportStructChildrenInfo_Type
     */
    public function setChildrenInfo($_childrenInfo)
    {
        return ($this->ChildrenInfo = $_childrenInfo);
    }
    /**
     * Get HometownArea value
     * @return string|null
     */
    public function getHometownArea()
    {
        return $this->HometownArea;
    }
    /**
     * Set HometownArea value
     * @param string $_hometownArea the HometownArea
     * @return string
     */
    public function setHometownArea($_hometownArea)
    {
        return ($this->HometownArea = $_hometownArea);
    }
    /**
     * Get RelationshipStatus value
     * @return string|null
     */
    public function getRelationshipStatus()
    {
        return $this->RelationshipStatus;
    }
    /**
     * Set RelationshipStatus value
     * @param string $_relationshipStatus the RelationshipStatus
     * @return string
     */
    public function setRelationshipStatus($_relationshipStatus)
    {
        return ($this->RelationshipStatus = $_relationshipStatus);
    }
    /**
     * Get Orientation value
     * @return string|null
     */
    public function getOrientation()
    {
        return $this->Orientation;
    }
    /**
     * Set Orientation value
     * @param string $_orientation the Orientation
     * @return string
     */
    public function setOrientation($_orientation)
    {
        return ($this->Orientation = $_orientation);
    }
    /**
     * Get AKAInfo value
     * @return MicrobiltCriminalReportStructAKAInfo_Type|null
     */
    public function getAKAInfo()
    {
        return $this->AKAInfo;
    }
    /**
     * Set AKAInfo value
     * @param MicrobiltCriminalReportStructAKAInfo_Type $_aKAInfo the AKAInfo
     * @return MicrobiltCriminalReportStructAKAInfo_Type
     */
    public function setAKAInfo($_aKAInfo)
    {
        return ($this->AKAInfo = $_aKAInfo);
    }
    /**
     * Get Zodiac value
     * @return string|null
     */
    public function getZodiac()
    {
        return $this->Zodiac;
    }
    /**
     * Set Zodiac value
     * @param string $_zodiac the Zodiac
     * @return string
     */
    public function setZodiac($_zodiac)
    {
        return ($this->Zodiac = $_zodiac);
    }
    /**
     * Get BirthYear value
     * @return string|null
     */
    public function getBirthYear()
    {
        return $this->BirthYear;
    }
    /**
     * Set BirthYear value
     * @param string $_birthYear the BirthYear
     * @return string
     */
    public function setBirthYear($_birthYear)
    {
        return ($this->BirthYear = $_birthYear);
    }
    /**
     * Get OwnershipPercentage value
     * @return float|null
     */
    public function getOwnershipPercentage()
    {
        return $this->OwnershipPercentage;
    }
    /**
     * Set OwnershipPercentage value
     * @param float $_ownershipPercentage the OwnershipPercentage
     * @return float
     */
    public function setOwnershipPercentage($_ownershipPercentage)
    {
        return ($this->OwnershipPercentage = $_ownershipPercentage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructPersonInfo_Type
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
