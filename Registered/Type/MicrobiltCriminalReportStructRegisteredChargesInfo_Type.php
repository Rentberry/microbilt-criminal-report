<?php
/**
 * File for class MicrobiltCriminalReportStructRegisteredChargesInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructRegisteredChargesInfo_Type originally named RegisteredChargesInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructRegisteredChargesInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RegisteredChargesSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRegisteredChargesSummary_Type
     */
    public $RegisteredChargesSummary;
    /**
     * The RegisteredChargesDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRegisteredChargesDetails_Type
     */
    public $RegisteredChargesDetails;
    /**
     * The RegisteredCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRegisteredCharge_Type
     */
    public $RegisteredCharge;
    /**
     * Constructor method for RegisteredChargesInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructRegisteredChargesSummary_Type $_registeredChargesSummary
     * @param MicrobiltCriminalReportStructRegisteredChargesDetails_Type $_registeredChargesDetails
     * @param MicrobiltCriminalReportStructRegisteredCharge_Type $_registeredCharge
     * @return MicrobiltCriminalReportStructRegisteredChargesInfo_Type
     */
    public function __construct($_registeredChargesSummary = NULL,$_registeredChargesDetails = NULL,$_registeredCharge = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RegisteredChargesSummary'=>$_registeredChargesSummary,'RegisteredChargesDetails'=>$_registeredChargesDetails,'RegisteredCharge'=>$_registeredCharge),false);
    }
    /**
     * Get RegisteredChargesSummary value
     * @return MicrobiltCriminalReportStructRegisteredChargesSummary_Type|null
     */
    public function getRegisteredChargesSummary()
    {
        return $this->RegisteredChargesSummary;
    }
    /**
     * Set RegisteredChargesSummary value
     * @param MicrobiltCriminalReportStructRegisteredChargesSummary_Type $_registeredChargesSummary the RegisteredChargesSummary
     * @return MicrobiltCriminalReportStructRegisteredChargesSummary_Type
     */
    public function setRegisteredChargesSummary($_registeredChargesSummary)
    {
        return ($this->RegisteredChargesSummary = $_registeredChargesSummary);
    }
    /**
     * Get RegisteredChargesDetails value
     * @return MicrobiltCriminalReportStructRegisteredChargesDetails_Type|null
     */
    public function getRegisteredChargesDetails()
    {
        return $this->RegisteredChargesDetails;
    }
    /**
     * Set RegisteredChargesDetails value
     * @param MicrobiltCriminalReportStructRegisteredChargesDetails_Type $_registeredChargesDetails the RegisteredChargesDetails
     * @return MicrobiltCriminalReportStructRegisteredChargesDetails_Type
     */
    public function setRegisteredChargesDetails($_registeredChargesDetails)
    {
        return ($this->RegisteredChargesDetails = $_registeredChargesDetails);
    }
    /**
     * Get RegisteredCharge value
     * @return MicrobiltCriminalReportStructRegisteredCharge_Type|null
     */
    public function getRegisteredCharge()
    {
        return $this->RegisteredCharge;
    }
    /**
     * Set RegisteredCharge value
     * @param MicrobiltCriminalReportStructRegisteredCharge_Type $_registeredCharge the RegisteredCharge
     * @return MicrobiltCriminalReportStructRegisteredCharge_Type
     */
    public function setRegisteredCharge($_registeredCharge)
    {
        return ($this->RegisteredCharge = $_registeredCharge);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructRegisteredChargesInfo_Type
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
