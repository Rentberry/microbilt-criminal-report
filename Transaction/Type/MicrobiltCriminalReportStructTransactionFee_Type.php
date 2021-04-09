<?php
/**
 * File for class MicrobiltCriminalReportStructTransactionFee_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructTransactionFee_Type originally named TransactionFee_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructTransactionFee_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The BaseFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $BaseFee;
    /**
     * The JurisdictionFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $JurisdictionFee;
    /**
     * The AdditionalFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AdditionalFee;
    /**
     * Constructor method for TransactionFee_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_baseFee
     * @param MicrobiltCriminalReportStructCurrencyAmount $_jurisdictionFee
     * @param MicrobiltCriminalReportStructCurrencyAmount $_additionalFee
     * @return MicrobiltCriminalReportStructTransactionFee_Type
     */
    public function __construct($_baseFee = NULL,$_jurisdictionFee = NULL,$_additionalFee = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('BaseFee'=>$_baseFee,'JurisdictionFee'=>$_jurisdictionFee,'AdditionalFee'=>$_additionalFee),false);
    }
    /**
     * Get BaseFee value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getBaseFee()
    {
        return $this->BaseFee;
    }
    /**
     * Set BaseFee value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_baseFee the BaseFee
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setBaseFee($_baseFee)
    {
        return ($this->BaseFee = $_baseFee);
    }
    /**
     * Get JurisdictionFee value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getJurisdictionFee()
    {
        return $this->JurisdictionFee;
    }
    /**
     * Set JurisdictionFee value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_jurisdictionFee the JurisdictionFee
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setJurisdictionFee($_jurisdictionFee)
    {
        return ($this->JurisdictionFee = $_jurisdictionFee);
    }
    /**
     * Get AdditionalFee value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAdditionalFee()
    {
        return $this->AdditionalFee;
    }
    /**
     * Set AdditionalFee value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_additionalFee the AdditionalFee
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAdditionalFee($_additionalFee)
    {
        return ($this->AdditionalFee = $_additionalFee);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructTransactionFee_Type
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
