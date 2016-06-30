<?php
/**
 * File for class MicrobiltCriminalReportStructAccountHistory_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAccountHistory_Type originally named AccountHistory_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAccountHistory_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The DtEffective
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtEffective;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The HighCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $HighCreditAmt;
    /**
     * The CreditLimitAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CreditLimitAmt;
    /**
     * The ScheduledPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ScheduledPmtAmt;
    /**
     * The PastDueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $PastDueAmt;
    /**
     * The PaymentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $PaymentAmt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for AccountHistory_Type
     * @see parent::__construct()
     * @param date $_dtEffective
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt
     * @param MicrobiltCriminalReportStructCompAmt_Type $_highCreditAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_creditLimitAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_scheduledPmtAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_pastDueAmt
     * @param MicrobiltCriminalReportStructCompAmt_Type $_paymentAmt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructAccountHistory_Type
     */
    public function __construct($_dtEffective = NULL,$_balanceAmt = NULL,$_highCreditAmt = NULL,$_creditLimitAmt = NULL,$_scheduledPmtAmt = NULL,$_pastDueAmt = NULL,$_paymentAmt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('DtEffective'=>$_dtEffective,'BalanceAmt'=>$_balanceAmt,'HighCreditAmt'=>$_highCreditAmt,'CreditLimitAmt'=>$_creditLimitAmt,'ScheduledPmtAmt'=>$_scheduledPmtAmt,'PastDueAmt'=>$_pastDueAmt,'PaymentAmt'=>$_paymentAmt,'Message'=>$_message),false);
    }
    /**
     * Get DtEffective value
     * @return date|null
     */
    public function getDtEffective()
    {
        return $this->DtEffective;
    }
    /**
     * Set DtEffective value
     * @param date $_dtEffective the DtEffective
     * @return date
     */
    public function setDtEffective($_dtEffective)
    {
        return ($this->DtEffective = $_dtEffective);
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
     * Get HighCreditAmt value
     * @return MicrobiltCriminalReportStructCompAmt_Type|null
     */
    public function getHighCreditAmt()
    {
        return $this->HighCreditAmt;
    }
    /**
     * Set HighCreditAmt value
     * @param MicrobiltCriminalReportStructCompAmt_Type $_highCreditAmt the HighCreditAmt
     * @return MicrobiltCriminalReportStructCompAmt_Type
     */
    public function setHighCreditAmt($_highCreditAmt)
    {
        return ($this->HighCreditAmt = $_highCreditAmt);
    }
    /**
     * Get CreditLimitAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCreditLimitAmt()
    {
        return $this->CreditLimitAmt;
    }
    /**
     * Set CreditLimitAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_creditLimitAmt the CreditLimitAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCreditLimitAmt($_creditLimitAmt)
    {
        return ($this->CreditLimitAmt = $_creditLimitAmt);
    }
    /**
     * Get ScheduledPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getScheduledPmtAmt()
    {
        return $this->ScheduledPmtAmt;
    }
    /**
     * Set ScheduledPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_scheduledPmtAmt the ScheduledPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setScheduledPmtAmt($_scheduledPmtAmt)
    {
        return ($this->ScheduledPmtAmt = $_scheduledPmtAmt);
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
     * Get PaymentAmt value
     * @return MicrobiltCriminalReportStructCompAmt_Type|null
     */
    public function getPaymentAmt()
    {
        return $this->PaymentAmt;
    }
    /**
     * Set PaymentAmt value
     * @param MicrobiltCriminalReportStructCompAmt_Type $_paymentAmt the PaymentAmt
     * @return MicrobiltCriminalReportStructCompAmt_Type
     */
    public function setPaymentAmt($_paymentAmt)
    {
        return ($this->PaymentAmt = $_paymentAmt);
    }
    /**
     * Get Message value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltCriminalReportStructMessage_Type $_message the Message
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAccountHistory_Type
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
