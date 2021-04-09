<?php
/**
 * File for class MicrobiltCriminalReportStructPastDuePeriods_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructPastDuePeriods_Type originally named PastDuePeriods_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructPastDuePeriods_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Period;
    /**
     * The PeriodDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PeriodDt;
    /**
     * The PastDueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $PastDueAmt;
    /**
     * Constructor method for PastDuePeriods_Type
     * @see parent::__construct()
     * @param string $_period
     * @param string $_periodDt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_pastDueAmt
     * @return MicrobiltCriminalReportStructPastDuePeriods_Type
     */
    public function __construct($_period = NULL,$_periodDt = NULL,$_pastDueAmt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Period'=>$_period,'PeriodDt'=>$_periodDt,'PastDueAmt'=>$_pastDueAmt),false);
    }
    /**
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param string $_period the Period
     * @return string
     */
    public function setPeriod($_period)
    {
        return ($this->Period = $_period);
    }
    /**
     * Get PeriodDt value
     * @return string|null
     */
    public function getPeriodDt()
    {
        return $this->PeriodDt;
    }
    /**
     * Set PeriodDt value
     * @param string $_periodDt the PeriodDt
     * @return string
     */
    public function setPeriodDt($_periodDt)
    {
        return ($this->PeriodDt = $_periodDt);
    }
    /**
     * Get PastDueAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getPastDueAmt()
    {
        return $this->PastDueAmt;
    }
    /**
     * Set PastDueAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_pastDueAmt the PastDueAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setPastDueAmt($_pastDueAmt)
    {
        return ($this->PastDueAmt = $_pastDueAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructPastDuePeriods_Type
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
