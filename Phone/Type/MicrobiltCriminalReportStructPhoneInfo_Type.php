<?php
/**
 * File for class MicrobiltCriminalReportStructPhoneInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructPhoneInfo_Type originally named PhoneInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructPhoneInfo_Type extends MicrobiltCriminalReportStructAggregate
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
     * The PhoneNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPhoneNum_Type
     */
    public $PhoneNum;
    /**
     * The Published
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $Published;
    /**
     * The PhoneTypeIndicators
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDataIndicators_Type
     */
    public $PhoneTypeIndicators;
    /**
     * Constructor method for PhoneInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonName_Type $_personName
     * @param MicrobiltCriminalReportStructPhoneNum_Type $_phoneNum
     * @param MicrobiltCriminalReportEnumBoolean $_published
     * @param MicrobiltCriminalReportStructDataIndicators_Type $_phoneTypeIndicators
     * @return MicrobiltCriminalReportStructPhoneInfo_Type
     */
    public function __construct($_personName = NULL,$_phoneNum = NULL,$_published = NULL,$_phoneTypeIndicators = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonName'=>$_personName,'PhoneNum'=>$_phoneNum,'Published'=>$_published,'PhoneTypeIndicators'=>$_phoneTypeIndicators),false);
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
     * Get Published value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getPublished()
    {
        return $this->Published;
    }
    /**
     * Set Published value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_published the Published
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setPublished($_published)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_published))
        {
            return false;
        }
        return ($this->Published = $_published);
    }
    /**
     * Get PhoneTypeIndicators value
     * @return MicrobiltCriminalReportStructDataIndicators_Type|null
     */
    public function getPhoneTypeIndicators()
    {
        return $this->PhoneTypeIndicators;
    }
    /**
     * Set PhoneTypeIndicators value
     * @param MicrobiltCriminalReportStructDataIndicators_Type $_phoneTypeIndicators the PhoneTypeIndicators
     * @return MicrobiltCriminalReportStructDataIndicators_Type
     */
    public function setPhoneTypeIndicators($_phoneTypeIndicators)
    {
        return ($this->PhoneTypeIndicators = $_phoneTypeIndicators);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructPhoneInfo_Type
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
