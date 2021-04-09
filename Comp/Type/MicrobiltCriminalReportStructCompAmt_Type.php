<?php
/**
 * File for class MicrobiltCriminalReportStructCompAmt_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCompAmt_Type originally named CompAmt_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCompAmt_Type extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalAmt;
    /**
     * The InstAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $InstAmt;
    /**
     * The RevAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $RevAmt;
    /**
     * The ClosedWithBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ClosedWithBalAmt;
    /**
     * The AvailableAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AvailableAmt;
    /**
     * The CurrentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CurrentAmt;
    /**
     * Constructor method for CompAmt_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_instAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_revAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_closedWithBalAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_availableAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_currentAmt
     * @return MicrobiltCriminalReportStructCompAmt_Type
     */
    public function __construct($_totalAmt = NULL,$_instAmt = NULL,$_revAmt = NULL,$_closedWithBalAmt = NULL,$_availableAmt = NULL,$_currentAmt = NULL)
    {
        parent::__construct(array('TotalAmt'=>$_totalAmt,'InstAmt'=>$_instAmt,'RevAmt'=>$_revAmt,'ClosedWithBalAmt'=>$_closedWithBalAmt,'AvailableAmt'=>$_availableAmt,'CurrentAmt'=>$_currentAmt),false);
    }
    /**
     * Get TotalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }
    /**
     * Set TotalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalAmt the TotalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalAmt($_totalAmt)
    {
        return ($this->TotalAmt = $_totalAmt);
    }
    /**
     * Get InstAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getInstAmt()
    {
        return $this->InstAmt;
    }
    /**
     * Set InstAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_instAmt the InstAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setInstAmt($_instAmt)
    {
        return ($this->InstAmt = $_instAmt);
    }
    /**
     * Get RevAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getRevAmt()
    {
        return $this->RevAmt;
    }
    /**
     * Set RevAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_revAmt the RevAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setRevAmt($_revAmt)
    {
        return ($this->RevAmt = $_revAmt);
    }
    /**
     * Get ClosedWithBalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getClosedWithBalAmt()
    {
        return $this->ClosedWithBalAmt;
    }
    /**
     * Set ClosedWithBalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_closedWithBalAmt the ClosedWithBalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setClosedWithBalAmt($_closedWithBalAmt)
    {
        return ($this->ClosedWithBalAmt = $_closedWithBalAmt);
    }
    /**
     * Get AvailableAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAvailableAmt()
    {
        return $this->AvailableAmt;
    }
    /**
     * Set AvailableAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_availableAmt the AvailableAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAvailableAmt($_availableAmt)
    {
        return ($this->AvailableAmt = $_availableAmt);
    }
    /**
     * Get CurrentAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCurrentAmt()
    {
        return $this->CurrentAmt;
    }
    /**
     * Set CurrentAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_currentAmt the CurrentAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCurrentAmt($_currentAmt)
    {
        return ($this->CurrentAmt = $_currentAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCompAmt_Type
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
