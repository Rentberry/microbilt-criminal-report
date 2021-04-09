<?php
/**
 * File for class MicrobiltCriminalReportStructOtherAmounts_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructOtherAmounts_Type originally named OtherAmounts_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructOtherAmounts_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AmtType;
    /**
     * The OtherAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $OtherAmt;
    /**
     * Constructor method for OtherAmounts_Type
     * @see parent::__construct()
     * @param string $_amtType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_otherAmt
     * @return MicrobiltCriminalReportStructOtherAmounts_Type
     */
    public function __construct($_amtType = NULL,$_otherAmt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AmtType'=>$_amtType,'OtherAmt'=>$_otherAmt),false);
    }
    /**
     * Get AmtType value
     * @return string|null
     */
    public function getAmtType()
    {
        return $this->AmtType;
    }
    /**
     * Set AmtType value
     * @param string $_amtType the AmtType
     * @return string
     */
    public function setAmtType($_amtType)
    {
        return ($this->AmtType = $_amtType);
    }
    /**
     * Get OtherAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getOtherAmt()
    {
        return $this->OtherAmt;
    }
    /**
     * Set OtherAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_otherAmt the OtherAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setOtherAmt($_otherAmt)
    {
        return ($this->OtherAmt = $_otherAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructOtherAmounts_Type
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
