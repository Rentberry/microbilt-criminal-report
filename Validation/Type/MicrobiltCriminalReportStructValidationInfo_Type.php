<?php
/**
 * File for class MicrobiltCriminalReportStructValidationInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructValidationInfo_Type originally named ValidationInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructValidationInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The NameValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $NameValidation;
    /**
     * The SSNValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $SSNValidation;
    /**
     * The DOBValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $DOBValidation;
    /**
     * The DLValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $DLValidation;
    /**
     * The DeceasedValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $DeceasedValidation;
    /**
     * The AddressValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $AddressValidation;
    /**
     * The PhoneValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $PhoneValidation;
    /**
     * The OtherValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $OtherValidation;
    /**
     * Constructor method for ValidationInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructMessage_Type $_nameValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_sSNValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_dOBValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_dLValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_deceasedValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_addressValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_phoneValidation
     * @param MicrobiltCriminalReportStructMessage_Type $_otherValidation
     * @return MicrobiltCriminalReportStructValidationInfo_Type
     */
    public function __construct($_nameValidation = NULL,$_sSNValidation = NULL,$_dOBValidation = NULL,$_dLValidation = NULL,$_deceasedValidation = NULL,$_addressValidation = NULL,$_phoneValidation = NULL,$_otherValidation = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('NameValidation'=>$_nameValidation,'SSNValidation'=>$_sSNValidation,'DOBValidation'=>$_dOBValidation,'DLValidation'=>$_dLValidation,'DeceasedValidation'=>$_deceasedValidation,'AddressValidation'=>$_addressValidation,'PhoneValidation'=>$_phoneValidation,'OtherValidation'=>$_otherValidation),false);
    }
    /**
     * Get NameValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getNameValidation()
    {
        return $this->NameValidation;
    }
    /**
     * Set NameValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_nameValidation the NameValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setNameValidation($_nameValidation)
    {
        return ($this->NameValidation = $_nameValidation);
    }
    /**
     * Get SSNValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getSSNValidation()
    {
        return $this->SSNValidation;
    }
    /**
     * Set SSNValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_sSNValidation the SSNValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setSSNValidation($_sSNValidation)
    {
        return ($this->SSNValidation = $_sSNValidation);
    }
    /**
     * Get DOBValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getDOBValidation()
    {
        return $this->DOBValidation;
    }
    /**
     * Set DOBValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_dOBValidation the DOBValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setDOBValidation($_dOBValidation)
    {
        return ($this->DOBValidation = $_dOBValidation);
    }
    /**
     * Get DLValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getDLValidation()
    {
        return $this->DLValidation;
    }
    /**
     * Set DLValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_dLValidation the DLValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setDLValidation($_dLValidation)
    {
        return ($this->DLValidation = $_dLValidation);
    }
    /**
     * Get DeceasedValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getDeceasedValidation()
    {
        return $this->DeceasedValidation;
    }
    /**
     * Set DeceasedValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_deceasedValidation the DeceasedValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setDeceasedValidation($_deceasedValidation)
    {
        return ($this->DeceasedValidation = $_deceasedValidation);
    }
    /**
     * Get AddressValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getAddressValidation()
    {
        return $this->AddressValidation;
    }
    /**
     * Set AddressValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_addressValidation the AddressValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setAddressValidation($_addressValidation)
    {
        return ($this->AddressValidation = $_addressValidation);
    }
    /**
     * Get PhoneValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getPhoneValidation()
    {
        return $this->PhoneValidation;
    }
    /**
     * Set PhoneValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_phoneValidation the PhoneValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setPhoneValidation($_phoneValidation)
    {
        return ($this->PhoneValidation = $_phoneValidation);
    }
    /**
     * Get OtherValidation value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getOtherValidation()
    {
        return $this->OtherValidation;
    }
    /**
     * Set OtherValidation value
     * @param MicrobiltCriminalReportStructMessage_Type $_otherValidation the OtherValidation
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setOtherValidation($_otherValidation)
    {
        return ($this->OtherValidation = $_otherValidation);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructValidationInfo_Type
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
