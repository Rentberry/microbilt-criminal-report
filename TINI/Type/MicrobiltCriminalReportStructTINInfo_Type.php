<?php
/**
 * File for class MicrobiltCriminalReportStructTINInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructTINInfo_Type originally named TINInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructTINInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The TINType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TINType;
    /**
     * The TaxId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TaxId;
    /**
     * The CertCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CertCode;
    /**
     * The IssuedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $IssuedDt;
    /**
     * The IssuedState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssuedState;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDateRange_Type
     */
    public $DateRange;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Country;
    /**
     * The OtherTaxId
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOtherTaxId_Type
     */
    public $OtherTaxId;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for TINInfo_Type
     * @see parent::__construct()
     * @param string $_tINType
     * @param string $_taxId
     * @param string $_certCode
     * @param date $_issuedDt
     * @param string $_issuedState
     * @param MicrobiltCriminalReportStructDateRange_Type $_dateRange
     * @param string $_country
     * @param MicrobiltCriminalReportStructOtherTaxId_Type $_otherTaxId
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructTINInfo_Type
     */
    public function __construct($_tINType = NULL,$_taxId = NULL,$_certCode = NULL,$_issuedDt = NULL,$_issuedState = NULL,$_dateRange = NULL,$_country = NULL,$_otherTaxId = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('TINType'=>$_tINType,'TaxId'=>$_taxId,'CertCode'=>$_certCode,'IssuedDt'=>$_issuedDt,'IssuedState'=>$_issuedState,'DateRange'=>$_dateRange,'Country'=>$_country,'OtherTaxId'=>$_otherTaxId,'Message'=>$_message),false);
    }
    /**
     * Get TINType value
     * @return string|null
     */
    public function getTINType()
    {
        return $this->TINType;
    }
    /**
     * Set TINType value
     * @param string $_tINType the TINType
     * @return string
     */
    public function setTINType($_tINType)
    {
        return ($this->TINType = $_tINType);
    }
    /**
     * Get TaxId value
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->TaxId;
    }
    /**
     * Set TaxId value
     * @param string $_taxId the TaxId
     * @return string
     */
    public function setTaxId($_taxId)
    {
        return ($this->TaxId = $_taxId);
    }
    /**
     * Get CertCode value
     * @return string|null
     */
    public function getCertCode()
    {
        return $this->CertCode;
    }
    /**
     * Set CertCode value
     * @param string $_certCode the CertCode
     * @return string
     */
    public function setCertCode($_certCode)
    {
        return ($this->CertCode = $_certCode);
    }
    /**
     * Get IssuedDt value
     * @return date|null
     */
    public function getIssuedDt()
    {
        return $this->IssuedDt;
    }
    /**
     * Set IssuedDt value
     * @param date $_issuedDt the IssuedDt
     * @return date
     */
    public function setIssuedDt($_issuedDt)
    {
        return ($this->IssuedDt = $_issuedDt);
    }
    /**
     * Get IssuedState value
     * @return string|null
     */
    public function getIssuedState()
    {
        return $this->IssuedState;
    }
    /**
     * Set IssuedState value
     * @param string $_issuedState the IssuedState
     * @return string
     */
    public function setIssuedState($_issuedState)
    {
        return ($this->IssuedState = $_issuedState);
    }
    /**
     * Get DateRange value
     * @return MicrobiltCriminalReportStructDateRange_Type|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param MicrobiltCriminalReportStructDateRange_Type $_dateRange the DateRange
     * @return MicrobiltCriminalReportStructDateRange_Type
     */
    public function setDateRange($_dateRange)
    {
        return ($this->DateRange = $_dateRange);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $_country the Country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->Country = $_country);
    }
    /**
     * Get OtherTaxId value
     * @return MicrobiltCriminalReportStructOtherTaxId_Type|null
     */
    public function getOtherTaxId()
    {
        return $this->OtherTaxId;
    }
    /**
     * Set OtherTaxId value
     * @param MicrobiltCriminalReportStructOtherTaxId_Type $_otherTaxId the OtherTaxId
     * @return MicrobiltCriminalReportStructOtherTaxId_Type
     */
    public function setOtherTaxId($_otherTaxId)
    {
        return ($this->OtherTaxId = $_otherTaxId);
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
     * @return MicrobiltCriminalReportStructTINInfo_Type
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
