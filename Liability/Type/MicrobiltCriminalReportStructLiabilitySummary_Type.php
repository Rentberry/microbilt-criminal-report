<?php
/**
 * File for class MicrobiltCriminalReportStructLiabilitySummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLiabilitySummary_Type originally named LiabilitySummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLiabilitySummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The TotalNumTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalNumTrades;
    /**
     * The TotalNumTradesWithBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalNumTradesWithBalance;
    /**
     * The TotalBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalBalanceAmt;
    /**
     * The TotalScheduledMoPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalScheduledMoPmtAmt;
    /**
     * The TotalHC_CLAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalHC_CLAmt;
    /**
     * The LateCount30
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount30;
    /**
     * The LateCount60
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount60;
    /**
     * The LateCount90
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount90;
    /**
     * The AvailablePercentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $AvailablePercentage;
    /**
     * Constructor method for LiabilitySummary_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param int $_totalNumTrades
     * @param int $_totalNumTradesWithBalance
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalBalanceAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalScheduledMoPmtAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalHC_CLAmt
     * @param int $_lateCount30
     * @param int $_lateCount60
     * @param int $_lateCount90
     * @param float $_availablePercentage
     * @return MicrobiltCriminalReportStructLiabilitySummary_Type
     */
    public function __construct($_msgClass = NULL,$_totalNumTrades = NULL,$_totalNumTradesWithBalance = NULL,$_totalBalanceAmt = NULL,$_totalScheduledMoPmtAmt = NULL,$_totalHC_CLAmt = NULL,$_lateCount30 = NULL,$_lateCount60 = NULL,$_lateCount90 = NULL,$_availablePercentage = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'TotalNumTrades'=>$_totalNumTrades,'TotalNumTradesWithBalance'=>$_totalNumTradesWithBalance,'TotalBalanceAmt'=>$_totalBalanceAmt,'TotalScheduledMoPmtAmt'=>$_totalScheduledMoPmtAmt,'TotalHC_CLAmt'=>$_totalHC_CLAmt,'LateCount30'=>$_lateCount30,'LateCount60'=>$_lateCount60,'LateCount90'=>$_lateCount90,'AvailablePercentage'=>$_availablePercentage),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get TotalNumTrades value
     * @return int|null
     */
    public function getTotalNumTrades()
    {
        return $this->TotalNumTrades;
    }
    /**
     * Set TotalNumTrades value
     * @param int $_totalNumTrades the TotalNumTrades
     * @return int
     */
    public function setTotalNumTrades($_totalNumTrades)
    {
        return ($this->TotalNumTrades = $_totalNumTrades);
    }
    /**
     * Get TotalNumTradesWithBalance value
     * @return int|null
     */
    public function getTotalNumTradesWithBalance()
    {
        return $this->TotalNumTradesWithBalance;
    }
    /**
     * Set TotalNumTradesWithBalance value
     * @param int $_totalNumTradesWithBalance the TotalNumTradesWithBalance
     * @return int
     */
    public function setTotalNumTradesWithBalance($_totalNumTradesWithBalance)
    {
        return ($this->TotalNumTradesWithBalance = $_totalNumTradesWithBalance);
    }
    /**
     * Get TotalBalanceAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalBalanceAmt()
    {
        return $this->TotalBalanceAmt;
    }
    /**
     * Set TotalBalanceAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalBalanceAmt the TotalBalanceAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalBalanceAmt($_totalBalanceAmt)
    {
        return ($this->TotalBalanceAmt = $_totalBalanceAmt);
    }
    /**
     * Get TotalScheduledMoPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalScheduledMoPmtAmt()
    {
        return $this->TotalScheduledMoPmtAmt;
    }
    /**
     * Set TotalScheduledMoPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalScheduledMoPmtAmt the TotalScheduledMoPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalScheduledMoPmtAmt($_totalScheduledMoPmtAmt)
    {
        return ($this->TotalScheduledMoPmtAmt = $_totalScheduledMoPmtAmt);
    }
    /**
     * Get TotalHC_CLAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalHC_CLAmt()
    {
        return $this->TotalHC_CLAmt;
    }
    /**
     * Set TotalHC_CLAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalHC_CLAmt the TotalHC_CLAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalHC_CLAmt($_totalHC_CLAmt)
    {
        return ($this->TotalHC_CLAmt = $_totalHC_CLAmt);
    }
    /**
     * Get LateCount30 value
     * @return int|null
     */
    public function getLateCount30()
    {
        return $this->LateCount30;
    }
    /**
     * Set LateCount30 value
     * @param int $_lateCount30 the LateCount30
     * @return int
     */
    public function setLateCount30($_lateCount30)
    {
        return ($this->LateCount30 = $_lateCount30);
    }
    /**
     * Get LateCount60 value
     * @return int|null
     */
    public function getLateCount60()
    {
        return $this->LateCount60;
    }
    /**
     * Set LateCount60 value
     * @param int $_lateCount60 the LateCount60
     * @return int
     */
    public function setLateCount60($_lateCount60)
    {
        return ($this->LateCount60 = $_lateCount60);
    }
    /**
     * Get LateCount90 value
     * @return int|null
     */
    public function getLateCount90()
    {
        return $this->LateCount90;
    }
    /**
     * Set LateCount90 value
     * @param int $_lateCount90 the LateCount90
     * @return int
     */
    public function setLateCount90($_lateCount90)
    {
        return ($this->LateCount90 = $_lateCount90);
    }
    /**
     * Get AvailablePercentage value
     * @return float|null
     */
    public function getAvailablePercentage()
    {
        return $this->AvailablePercentage;
    }
    /**
     * Set AvailablePercentage value
     * @param float $_availablePercentage the AvailablePercentage
     * @return float
     */
    public function setAvailablePercentage($_availablePercentage)
    {
        return ($this->AvailablePercentage = $_availablePercentage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLiabilitySummary_Type
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
