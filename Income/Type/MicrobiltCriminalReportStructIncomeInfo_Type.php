<?php
/**
 * File for class MicrobiltCriminalReportStructIncomeInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructIncomeInfo_Type originally named IncomeInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructIncomeInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Source;
    /**
     * The MonthlyIncome
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MonthlyIncome;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The PayPerPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $PayPerPeriod;
    /**
     * The DirectDepositInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $DirectDepositInd;
    /**
     * The DtOfNextPaycheck
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtOfNextPaycheck;
    /**
     * The DtOfSecondPaycheck
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtOfSecondPaycheck;
    /**
     * The GrossIncome
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $GrossIncome;
    /**
     * Constructor method for IncomeInfo_Type
     * @see parent::__construct()
     * @param string $_source
     * @param MicrobiltCriminalReportStructCurrencyAmount $_monthlyIncome
     * @param string $_pmtFreq
     * @param MicrobiltCriminalReportStructCurrencyAmount $_payPerPeriod
     * @param MicrobiltCriminalReportEnumBoolean $_directDepositInd
     * @param string $_dtOfNextPaycheck
     * @param string $_dtOfSecondPaycheck
     * @param MicrobiltCriminalReportStructCurrencyAmount $_grossIncome
     * @return MicrobiltCriminalReportStructIncomeInfo_Type
     */
    public function __construct($_source = NULL,$_monthlyIncome = NULL,$_pmtFreq = NULL,$_payPerPeriod = NULL,$_directDepositInd = NULL,$_dtOfNextPaycheck = NULL,$_dtOfSecondPaycheck = NULL,$_grossIncome = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Source'=>$_source,'MonthlyIncome'=>$_monthlyIncome,'PmtFreq'=>$_pmtFreq,'PayPerPeriod'=>$_payPerPeriod,'DirectDepositInd'=>$_directDepositInd,'DtOfNextPaycheck'=>$_dtOfNextPaycheck,'DtOfSecondPaycheck'=>$_dtOfSecondPaycheck,'GrossIncome'=>$_grossIncome),false);
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $_source the Source
     * @return string
     */
    public function setSource($_source)
    {
        return ($this->Source = $_source);
    }
    /**
     * Get MonthlyIncome value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMonthlyIncome()
    {
        return $this->MonthlyIncome;
    }
    /**
     * Set MonthlyIncome value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_monthlyIncome the MonthlyIncome
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMonthlyIncome($_monthlyIncome)
    {
        return ($this->MonthlyIncome = $_monthlyIncome);
    }
    /**
     * Get PmtFreq value
     * @return string|null
     */
    public function getPmtFreq()
    {
        return $this->PmtFreq;
    }
    /**
     * Set PmtFreq value
     * @param string $_pmtFreq the PmtFreq
     * @return string
     */
    public function setPmtFreq($_pmtFreq)
    {
        return ($this->PmtFreq = $_pmtFreq);
    }
    /**
     * Get PayPerPeriod value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getPayPerPeriod()
    {
        return $this->PayPerPeriod;
    }
    /**
     * Set PayPerPeriod value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_payPerPeriod the PayPerPeriod
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setPayPerPeriod($_payPerPeriod)
    {
        return ($this->PayPerPeriod = $_payPerPeriod);
    }
    /**
     * Get DirectDepositInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getDirectDepositInd()
    {
        return $this->DirectDepositInd;
    }
    /**
     * Set DirectDepositInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_directDepositInd the DirectDepositInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setDirectDepositInd($_directDepositInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_directDepositInd))
        {
            return false;
        }
        return ($this->DirectDepositInd = $_directDepositInd);
    }
    /**
     * Get DtOfNextPaycheck value
     * @return string|null
     */
    public function getDtOfNextPaycheck()
    {
        return $this->DtOfNextPaycheck;
    }
    /**
     * Set DtOfNextPaycheck value
     * @param string $_dtOfNextPaycheck the DtOfNextPaycheck
     * @return string
     */
    public function setDtOfNextPaycheck($_dtOfNextPaycheck)
    {
        return ($this->DtOfNextPaycheck = $_dtOfNextPaycheck);
    }
    /**
     * Get DtOfSecondPaycheck value
     * @return string|null
     */
    public function getDtOfSecondPaycheck()
    {
        return $this->DtOfSecondPaycheck;
    }
    /**
     * Set DtOfSecondPaycheck value
     * @param string $_dtOfSecondPaycheck the DtOfSecondPaycheck
     * @return string
     */
    public function setDtOfSecondPaycheck($_dtOfSecondPaycheck)
    {
        return ($this->DtOfSecondPaycheck = $_dtOfSecondPaycheck);
    }
    /**
     * Get GrossIncome value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getGrossIncome()
    {
        return $this->GrossIncome;
    }
    /**
     * Set GrossIncome value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_grossIncome the GrossIncome
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setGrossIncome($_grossIncome)
    {
        return ($this->GrossIncome = $_grossIncome);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructIncomeInfo_Type
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
