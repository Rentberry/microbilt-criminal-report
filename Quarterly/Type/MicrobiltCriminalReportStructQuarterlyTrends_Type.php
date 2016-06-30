<?php
/**
 * File for class MicrobiltCriminalReportStructQuarterlyTrends_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructQuarterlyTrends_Type originally named QuarterlyTrends_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructQuarterlyTrends_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The YearOfQuarter
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $YearOfQuarter;
    /**
     * The Quarter
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Quarter;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The PastDuePeriods
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPastDuePeriods_Type
     */
    public $PastDuePeriods;
    /**
     * The NumSuppliers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumSuppliers;
    /**
     * Constructor method for QuarterlyTrends_Type
     * @see parent::__construct()
     * @param string $_yearOfQuarter
     * @param string $_quarter
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt
     * @param MicrobiltCriminalReportStructPastDuePeriods_Type $_pastDuePeriods
     * @param string $_numSuppliers
     * @return MicrobiltCriminalReportStructQuarterlyTrends_Type
     */
    public function __construct($_yearOfQuarter = NULL,$_quarter = NULL,$_balanceAmt = NULL,$_pastDuePeriods = NULL,$_numSuppliers = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('YearOfQuarter'=>$_yearOfQuarter,'Quarter'=>$_quarter,'BalanceAmt'=>$_balanceAmt,'PastDuePeriods'=>$_pastDuePeriods,'NumSuppliers'=>$_numSuppliers),false);
    }
    /**
     * Get YearOfQuarter value
     * @return string|null
     */
    public function getYearOfQuarter()
    {
        return $this->YearOfQuarter;
    }
    /**
     * Set YearOfQuarter value
     * @param string $_yearOfQuarter the YearOfQuarter
     * @return string
     */
    public function setYearOfQuarter($_yearOfQuarter)
    {
        return ($this->YearOfQuarter = $_yearOfQuarter);
    }
    /**
     * Get Quarter value
     * @return string|null
     */
    public function getQuarter()
    {
        return $this->Quarter;
    }
    /**
     * Set Quarter value
     * @param string $_quarter the Quarter
     * @return string
     */
    public function setQuarter($_quarter)
    {
        return ($this->Quarter = $_quarter);
    }
    /**
     * Get BalanceAmt value
     * @return MicrobiltCriminalReportStructCompAmt_Type|null
     */
    public function getBalanceAmt()
    {
        return $this->BalanceAmt;
    }
    /**
     * Set BalanceAmt value
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt the BalanceAmt
     * @return MicrobiltCriminalReportStructCompAmt_Type
     */
    public function setBalanceAmt($_balanceAmt)
    {
        return ($this->BalanceAmt = $_balanceAmt);
    }
    /**
     * Get PastDuePeriods value
     * @return MicrobiltCriminalReportStructPastDuePeriods_Type|null
     */
    public function getPastDuePeriods()
    {
        return $this->PastDuePeriods;
    }
    /**
     * Set PastDuePeriods value
     * @param MicrobiltCriminalReportStructPastDuePeriods_Type $_pastDuePeriods the PastDuePeriods
     * @return MicrobiltCriminalReportStructPastDuePeriods_Type
     */
    public function setPastDuePeriods($_pastDuePeriods)
    {
        return ($this->PastDuePeriods = $_pastDuePeriods);
    }
    /**
     * Get NumSuppliers value
     * @return string|null
     */
    public function getNumSuppliers()
    {
        return $this->NumSuppliers;
    }
    /**
     * Set NumSuppliers value
     * @param string $_numSuppliers the NumSuppliers
     * @return string
     */
    public function setNumSuppliers($_numSuppliers)
    {
        return ($this->NumSuppliers = $_numSuppliers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructQuarterlyTrends_Type
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
