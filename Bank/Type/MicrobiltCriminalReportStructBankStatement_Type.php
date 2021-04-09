<?php
/**
 * File for class MicrobiltCriminalReportStructBankStatement_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructBankStatement_Type originally named BankStatement_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructBankStatement_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The StatementDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatementDt;
    /**
     * The NumberOfTransactions
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumberOfTransactions;
    /**
     * The NumberOfNSFs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumberOfNSFs;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VerifiedDt;
    /**
     * The StatementBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $StatementBalAmt;
    /**
     * Constructor method for BankStatement_Type
     * @see parent::__construct()
     * @param string $_statementDt
     * @param int $_numberOfTransactions
     * @param int $_numberOfNSFs
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt
     * @param string $_verifiedDt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_statementBalAmt
     * @return MicrobiltCriminalReportStructBankStatement_Type
     */
    public function __construct($_statementDt = NULL,$_numberOfTransactions = NULL,$_numberOfNSFs = NULL,$_balanceAmt = NULL,$_verifiedDt = NULL,$_statementBalAmt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('StatementDt'=>$_statementDt,'NumberOfTransactions'=>$_numberOfTransactions,'NumberOfNSFs'=>$_numberOfNSFs,'BalanceAmt'=>$_balanceAmt,'VerifiedDt'=>$_verifiedDt,'StatementBalAmt'=>$_statementBalAmt),false);
    }
    /**
     * Get StatementDt value
     * @return string|null
     */
    public function getStatementDt()
    {
        return $this->StatementDt;
    }
    /**
     * Set StatementDt value
     * @param string $_statementDt the StatementDt
     * @return string
     */
    public function setStatementDt($_statementDt)
    {
        return ($this->StatementDt = $_statementDt);
    }
    /**
     * Get NumberOfTransactions value
     * @return int|null
     */
    public function getNumberOfTransactions()
    {
        return $this->NumberOfTransactions;
    }
    /**
     * Set NumberOfTransactions value
     * @param int $_numberOfTransactions the NumberOfTransactions
     * @return int
     */
    public function setNumberOfTransactions($_numberOfTransactions)
    {
        return ($this->NumberOfTransactions = $_numberOfTransactions);
    }
    /**
     * Get NumberOfNSFs value
     * @return int|null
     */
    public function getNumberOfNSFs()
    {
        return $this->NumberOfNSFs;
    }
    /**
     * Set NumberOfNSFs value
     * @param int $_numberOfNSFs the NumberOfNSFs
     * @return int
     */
    public function setNumberOfNSFs($_numberOfNSFs)
    {
        return ($this->NumberOfNSFs = $_numberOfNSFs);
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
     * Get VerifiedDt value
     * @return string|null
     */
    public function getVerifiedDt()
    {
        return $this->VerifiedDt;
    }
    /**
     * Set VerifiedDt value
     * @param string $_verifiedDt the VerifiedDt
     * @return string
     */
    public function setVerifiedDt($_verifiedDt)
    {
        return ($this->VerifiedDt = $_verifiedDt);
    }
    /**
     * Get StatementBalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getStatementBalAmt()
    {
        return $this->StatementBalAmt;
    }
    /**
     * Set StatementBalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_statementBalAmt the StatementBalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setStatementBalAmt($_statementBalAmt)
    {
        return ($this->StatementBalAmt = $_statementBalAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructBankStatement_Type
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
