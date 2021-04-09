<?php
/**
 * File for class MicrobiltCriminalReportStructLoanParams_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLoanParams_Type originally named LoanParams_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLoanParams_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RequestedAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $RequestedAmt;
    /**
     * The FeeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $FeeAmt;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DueDate;
    /**
     * The Renewal
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $Renewal;
    /**
     * The Rollover
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $Rollover;
    /**
     * The RolloverNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $RolloverNumber;
    /**
     * The ConsecutiveLoanNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $ConsecutiveLoanNumber;
    /**
     * The LastLoanEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastLoanEndDt;
    /**
     * The LoanAmountFlag
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanAmountFlag;
    /**
     * The LoanDuration
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LoanDuration;
    /**
     * The GenericRequestField
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GenericRequestField;
    /**
     * The DaysOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DaysOpen;
    /**
     * The LoanType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanType;
    /**
     * The AlternativeLoanAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AlternativeLoanAmt;
    /**
     * The ApprovalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ApprovalAmt;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Name;
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Error;
    /**
     * The DebtToIncome
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DebtToIncome;
    /**
     * The LoansRemaining
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LoansRemaining;
    /**
     * The CoolOffDaysRemaining
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CoolOffDaysRemaining;
    /**
     * The CoolOffPeriodRemaining
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CoolOffPeriodRemaining;
    /**
     * The DaysBeforeCoolingOffPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DaysBeforeCoolingOffPeriod;
    /**
     * The DaysBefore90DayLimit
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DaysBefore90DayLimit;
    /**
     * The EligibleDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EligibleDt;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateProv;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for LoanParams_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_requestedAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_feeAmt
     * @param string $_dueDate
     * @param MicrobiltCriminalReportEnumBoolean $_renewal
     * @param MicrobiltCriminalReportEnumBoolean $_rollover
     * @param int $_rolloverNumber
     * @param int $_consecutiveLoanNumber
     * @param string $_lastLoanEndDt
     * @param string $_loanAmountFlag
     * @param int $_loanDuration
     * @param string $_genericRequestField
     * @param int $_daysOpen
     * @param string $_loanType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_alternativeLoanAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_approvalAmt
     * @param string $_name
     * @param string $_error
     * @param string $_debtToIncome
     * @param int $_loansRemaining
     * @param int $_coolOffDaysRemaining
     * @param string $_coolOffPeriodRemaining
     * @param int $_daysBeforeCoolingOffPeriod
     * @param int $_daysBefore90DayLimit
     * @param string $_eligibleDt
     * @param string $_stateProv
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructLoanParams_Type
     */
    public function __construct($_requestedAmt = NULL,$_feeAmt = NULL,$_dueDate = NULL,$_renewal = NULL,$_rollover = NULL,$_rolloverNumber = NULL,$_consecutiveLoanNumber = NULL,$_lastLoanEndDt = NULL,$_loanAmountFlag = NULL,$_loanDuration = NULL,$_genericRequestField = NULL,$_daysOpen = NULL,$_loanType = NULL,$_alternativeLoanAmt = NULL,$_approvalAmt = NULL,$_name = NULL,$_error = NULL,$_debtToIncome = NULL,$_loansRemaining = NULL,$_coolOffDaysRemaining = NULL,$_coolOffPeriodRemaining = NULL,$_daysBeforeCoolingOffPeriod = NULL,$_daysBefore90DayLimit = NULL,$_eligibleDt = NULL,$_stateProv = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RequestedAmt'=>$_requestedAmt,'FeeAmt'=>$_feeAmt,'DueDate'=>$_dueDate,'Renewal'=>$_renewal,'Rollover'=>$_rollover,'RolloverNumber'=>$_rolloverNumber,'ConsecutiveLoanNumber'=>$_consecutiveLoanNumber,'LastLoanEndDt'=>$_lastLoanEndDt,'LoanAmountFlag'=>$_loanAmountFlag,'LoanDuration'=>$_loanDuration,'GenericRequestField'=>$_genericRequestField,'DaysOpen'=>$_daysOpen,'LoanType'=>$_loanType,'AlternativeLoanAmt'=>$_alternativeLoanAmt,'ApprovalAmt'=>$_approvalAmt,'Name'=>$_name,'Error'=>$_error,'DebtToIncome'=>$_debtToIncome,'LoansRemaining'=>$_loansRemaining,'CoolOffDaysRemaining'=>$_coolOffDaysRemaining,'CoolOffPeriodRemaining'=>$_coolOffPeriodRemaining,'DaysBeforeCoolingOffPeriod'=>$_daysBeforeCoolingOffPeriod,'DaysBefore90DayLimit'=>$_daysBefore90DayLimit,'EligibleDt'=>$_eligibleDt,'StateProv'=>$_stateProv,'Message'=>$_message),false);
    }
    /**
     * Get RequestedAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getRequestedAmt()
    {
        return $this->RequestedAmt;
    }
    /**
     * Set RequestedAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_requestedAmt the RequestedAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setRequestedAmt($_requestedAmt)
    {
        return ($this->RequestedAmt = $_requestedAmt);
    }
    /**
     * Get FeeAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getFeeAmt()
    {
        return $this->FeeAmt;
    }
    /**
     * Set FeeAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_feeAmt the FeeAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setFeeAmt($_feeAmt)
    {
        return ($this->FeeAmt = $_feeAmt);
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $_dueDate the DueDate
     * @return string
     */
    public function setDueDate($_dueDate)
    {
        return ($this->DueDate = $_dueDate);
    }
    /**
     * Get Renewal value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getRenewal()
    {
        return $this->Renewal;
    }
    /**
     * Set Renewal value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_renewal the Renewal
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setRenewal($_renewal)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_renewal))
        {
            return false;
        }
        return ($this->Renewal = $_renewal);
    }
    /**
     * Get Rollover value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getRollover()
    {
        return $this->Rollover;
    }
    /**
     * Set Rollover value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_rollover the Rollover
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setRollover($_rollover)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_rollover))
        {
            return false;
        }
        return ($this->Rollover = $_rollover);
    }
    /**
     * Get RolloverNumber value
     * @return int|null
     */
    public function getRolloverNumber()
    {
        return $this->RolloverNumber;
    }
    /**
     * Set RolloverNumber value
     * @param int $_rolloverNumber the RolloverNumber
     * @return int
     */
    public function setRolloverNumber($_rolloverNumber)
    {
        return ($this->RolloverNumber = $_rolloverNumber);
    }
    /**
     * Get ConsecutiveLoanNumber value
     * @return int|null
     */
    public function getConsecutiveLoanNumber()
    {
        return $this->ConsecutiveLoanNumber;
    }
    /**
     * Set ConsecutiveLoanNumber value
     * @param int $_consecutiveLoanNumber the ConsecutiveLoanNumber
     * @return int
     */
    public function setConsecutiveLoanNumber($_consecutiveLoanNumber)
    {
        return ($this->ConsecutiveLoanNumber = $_consecutiveLoanNumber);
    }
    /**
     * Get LastLoanEndDt value
     * @return string|null
     */
    public function getLastLoanEndDt()
    {
        return $this->LastLoanEndDt;
    }
    /**
     * Set LastLoanEndDt value
     * @param string $_lastLoanEndDt the LastLoanEndDt
     * @return string
     */
    public function setLastLoanEndDt($_lastLoanEndDt)
    {
        return ($this->LastLoanEndDt = $_lastLoanEndDt);
    }
    /**
     * Get LoanAmountFlag value
     * @return string|null
     */
    public function getLoanAmountFlag()
    {
        return $this->LoanAmountFlag;
    }
    /**
     * Set LoanAmountFlag value
     * @param string $_loanAmountFlag the LoanAmountFlag
     * @return string
     */
    public function setLoanAmountFlag($_loanAmountFlag)
    {
        return ($this->LoanAmountFlag = $_loanAmountFlag);
    }
    /**
     * Get LoanDuration value
     * @return int|null
     */
    public function getLoanDuration()
    {
        return $this->LoanDuration;
    }
    /**
     * Set LoanDuration value
     * @param int $_loanDuration the LoanDuration
     * @return int
     */
    public function setLoanDuration($_loanDuration)
    {
        return ($this->LoanDuration = $_loanDuration);
    }
    /**
     * Get GenericRequestField value
     * @return string|null
     */
    public function getGenericRequestField()
    {
        return $this->GenericRequestField;
    }
    /**
     * Set GenericRequestField value
     * @param string $_genericRequestField the GenericRequestField
     * @return string
     */
    public function setGenericRequestField($_genericRequestField)
    {
        return ($this->GenericRequestField = $_genericRequestField);
    }
    /**
     * Get DaysOpen value
     * @return int|null
     */
    public function getDaysOpen()
    {
        return $this->DaysOpen;
    }
    /**
     * Set DaysOpen value
     * @param int $_daysOpen the DaysOpen
     * @return int
     */
    public function setDaysOpen($_daysOpen)
    {
        return ($this->DaysOpen = $_daysOpen);
    }
    /**
     * Get LoanType value
     * @return string|null
     */
    public function getLoanType()
    {
        return $this->LoanType;
    }
    /**
     * Set LoanType value
     * @param string $_loanType the LoanType
     * @return string
     */
    public function setLoanType($_loanType)
    {
        return ($this->LoanType = $_loanType);
    }
    /**
     * Get AlternativeLoanAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAlternativeLoanAmt()
    {
        return $this->AlternativeLoanAmt;
    }
    /**
     * Set AlternativeLoanAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_alternativeLoanAmt the AlternativeLoanAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAlternativeLoanAmt($_alternativeLoanAmt)
    {
        return ($this->AlternativeLoanAmt = $_alternativeLoanAmt);
    }
    /**
     * Get ApprovalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getApprovalAmt()
    {
        return $this->ApprovalAmt;
    }
    /**
     * Set ApprovalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_approvalAmt the ApprovalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setApprovalAmt($_approvalAmt)
    {
        return ($this->ApprovalAmt = $_approvalAmt);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get Error value
     * @return string|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $_error the Error
     * @return string
     */
    public function setError($_error)
    {
        return ($this->Error = $_error);
    }
    /**
     * Get DebtToIncome value
     * @return string|null
     */
    public function getDebtToIncome()
    {
        return $this->DebtToIncome;
    }
    /**
     * Set DebtToIncome value
     * @param string $_debtToIncome the DebtToIncome
     * @return string
     */
    public function setDebtToIncome($_debtToIncome)
    {
        return ($this->DebtToIncome = $_debtToIncome);
    }
    /**
     * Get LoansRemaining value
     * @return int|null
     */
    public function getLoansRemaining()
    {
        return $this->LoansRemaining;
    }
    /**
     * Set LoansRemaining value
     * @param int $_loansRemaining the LoansRemaining
     * @return int
     */
    public function setLoansRemaining($_loansRemaining)
    {
        return ($this->LoansRemaining = $_loansRemaining);
    }
    /**
     * Get CoolOffDaysRemaining value
     * @return int|null
     */
    public function getCoolOffDaysRemaining()
    {
        return $this->CoolOffDaysRemaining;
    }
    /**
     * Set CoolOffDaysRemaining value
     * @param int $_coolOffDaysRemaining the CoolOffDaysRemaining
     * @return int
     */
    public function setCoolOffDaysRemaining($_coolOffDaysRemaining)
    {
        return ($this->CoolOffDaysRemaining = $_coolOffDaysRemaining);
    }
    /**
     * Get CoolOffPeriodRemaining value
     * @return string|null
     */
    public function getCoolOffPeriodRemaining()
    {
        return $this->CoolOffPeriodRemaining;
    }
    /**
     * Set CoolOffPeriodRemaining value
     * @param string $_coolOffPeriodRemaining the CoolOffPeriodRemaining
     * @return string
     */
    public function setCoolOffPeriodRemaining($_coolOffPeriodRemaining)
    {
        return ($this->CoolOffPeriodRemaining = $_coolOffPeriodRemaining);
    }
    /**
     * Get DaysBeforeCoolingOffPeriod value
     * @return int|null
     */
    public function getDaysBeforeCoolingOffPeriod()
    {
        return $this->DaysBeforeCoolingOffPeriod;
    }
    /**
     * Set DaysBeforeCoolingOffPeriod value
     * @param int $_daysBeforeCoolingOffPeriod the DaysBeforeCoolingOffPeriod
     * @return int
     */
    public function setDaysBeforeCoolingOffPeriod($_daysBeforeCoolingOffPeriod)
    {
        return ($this->DaysBeforeCoolingOffPeriod = $_daysBeforeCoolingOffPeriod);
    }
    /**
     * Get DaysBefore90DayLimit value
     * @return int|null
     */
    public function getDaysBefore90DayLimit()
    {
        return $this->DaysBefore90DayLimit;
    }
    /**
     * Set DaysBefore90DayLimit value
     * @param int $_daysBefore90DayLimit the DaysBefore90DayLimit
     * @return int
     */
    public function setDaysBefore90DayLimit($_daysBefore90DayLimit)
    {
        return ($this->DaysBefore90DayLimit = $_daysBefore90DayLimit);
    }
    /**
     * Get EligibleDt value
     * @return string|null
     */
    public function getEligibleDt()
    {
        return $this->EligibleDt;
    }
    /**
     * Set EligibleDt value
     * @param string $_eligibleDt the EligibleDt
     * @return string
     */
    public function setEligibleDt($_eligibleDt)
    {
        return ($this->EligibleDt = $_eligibleDt);
    }
    /**
     * Get StateProv value
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param string $_stateProv the StateProv
     * @return string
     */
    public function setStateProv($_stateProv)
    {
        return ($this->StateProv = $_stateProv);
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
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLoanParams_Type
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
