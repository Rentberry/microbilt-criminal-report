<?php
/**
 * File for class MicrobiltCriminalReportStructFraud_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructFraud_Type originally named Fraud_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructFraud_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The FraudWarnings
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $FraudWarnings;
    /**
     * The FraudCounters
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $FraudCounters;
    /**
     * The FraudValidations
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructFraudValidations_Type
     */
    public $FraudValidations;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructContactInfo_Type
     */
    public $ContactInfo;
    /**
     * Constructor method for Fraud_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructMessage_Type $_fraudWarnings
     * @param MicrobiltCriminalReportStructMessage_Type $_fraudCounters
     * @param MicrobiltCriminalReportStructFraudValidations_Type $_fraudValidations
     * @param MicrobiltCriminalReportStructContactInfo_Type $_contactInfo
     * @return MicrobiltCriminalReportStructFraud_Type
     */
    public function __construct($_fraudWarnings = NULL,$_fraudCounters = NULL,$_fraudValidations = NULL,$_contactInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('FraudWarnings'=>$_fraudWarnings,'FraudCounters'=>$_fraudCounters,'FraudValidations'=>$_fraudValidations,'ContactInfo'=>$_contactInfo),false);
    }
    /**
     * Get FraudWarnings value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getFraudWarnings()
    {
        return $this->FraudWarnings;
    }
    /**
     * Set FraudWarnings value
     * @param MicrobiltCriminalReportStructMessage_Type $_fraudWarnings the FraudWarnings
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setFraudWarnings($_fraudWarnings)
    {
        return ($this->FraudWarnings = $_fraudWarnings);
    }
    /**
     * Get FraudCounters value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getFraudCounters()
    {
        return $this->FraudCounters;
    }
    /**
     * Set FraudCounters value
     * @param MicrobiltCriminalReportStructMessage_Type $_fraudCounters the FraudCounters
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setFraudCounters($_fraudCounters)
    {
        return ($this->FraudCounters = $_fraudCounters);
    }
    /**
     * Get FraudValidations value
     * @return MicrobiltCriminalReportStructFraudValidations_Type|null
     */
    public function getFraudValidations()
    {
        return $this->FraudValidations;
    }
    /**
     * Set FraudValidations value
     * @param MicrobiltCriminalReportStructFraudValidations_Type $_fraudValidations the FraudValidations
     * @return MicrobiltCriminalReportStructFraudValidations_Type
     */
    public function setFraudValidations($_fraudValidations)
    {
        return ($this->FraudValidations = $_fraudValidations);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructFraud_Type
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
