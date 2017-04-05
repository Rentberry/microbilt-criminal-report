<?php
/**
 * File for class MicrobiltCriminalReportStructSentenceLength_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSentenceLength_Type originally named SentenceLength_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSentenceLength_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Years
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Years;
    /**
     * The Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Months;
    /**
     * The Days
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Days;
    /**
     * Constructor method for SentenceLength_Type
     * @see parent::__construct()
     * @param int $_years
     * @param int $_months
     * @param int $_days
     * @return MicrobiltCriminalReportStructSentenceLength_Type
     */
    public function __construct($_years = NULL,$_months = NULL,$_days = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Years'=>$_years,'Months'=>$_months,'Days'=>$_days),false);
    }
    /**
     * Get Years value
     * @return int|null
     */
    public function getYears()
    {
        return $this->Years;
    }
    /**
     * Set Years value
     * @param int $_years the Years
     * @return int
     */
    public function setYears($_years)
    {
        return ($this->Years = $_years);
    }
    /**
     * Get Months value
     * @return int|null
     */
    public function getMonths()
    {
        return $this->Months;
    }
    /**
     * Set Months value
     * @param int $_months the Months
     * @return int
     */
    public function setMonths($_months)
    {
        return ($this->Months = $_months);
    }
    /**
     * Get Days value
     * @return int|null
     */
    public function getDays()
    {
        return $this->Days;
    }
    /**
     * Set Days value
     * @param int $_days the Days
     * @return int
     */
    public function setDays($_days)
    {
        return ($this->Days = $_days);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructSentenceLength_Type
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
