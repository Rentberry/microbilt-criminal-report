<?php
/**
 * File for class MicrobiltCriminalReportStructApplicantData_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructApplicantData_Type originally named ApplicantData_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructApplicantData_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RentPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $RentPmtAmt;
    /**
     * The NumberOfCurrentLoans
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumberOfCurrentLoans;
    /**
     * The PreviousCustomer
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $PreviousCustomer;
    /**
     * The PayrollGarnishment
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $PayrollGarnishment;
    /**
     * The CurrentBankruptcy
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $CurrentBankruptcy;
    /**
     * The CurrentWriteOff
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $CurrentWriteOff;
    /**
     * Constructor method for ApplicantData_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_rentPmtAmt
     * @param int $_numberOfCurrentLoans
     * @param MicrobiltCriminalReportEnumBoolean $_previousCustomer
     * @param MicrobiltCriminalReportEnumBoolean $_payrollGarnishment
     * @param MicrobiltCriminalReportEnumBoolean $_currentBankruptcy
     * @param MicrobiltCriminalReportEnumBoolean $_currentWriteOff
     * @return MicrobiltCriminalReportStructApplicantData_Type
     */
    public function __construct($_rentPmtAmt = NULL,$_numberOfCurrentLoans = NULL,$_previousCustomer = NULL,$_payrollGarnishment = NULL,$_currentBankruptcy = NULL,$_currentWriteOff = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RentPmtAmt'=>$_rentPmtAmt,'NumberOfCurrentLoans'=>$_numberOfCurrentLoans,'PreviousCustomer'=>$_previousCustomer,'PayrollGarnishment'=>$_payrollGarnishment,'CurrentBankruptcy'=>$_currentBankruptcy,'CurrentWriteOff'=>$_currentWriteOff),false);
    }
    /**
     * Get RentPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getRentPmtAmt()
    {
        return $this->RentPmtAmt;
    }
    /**
     * Set RentPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_rentPmtAmt the RentPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setRentPmtAmt($_rentPmtAmt)
    {
        return ($this->RentPmtAmt = $_rentPmtAmt);
    }
    /**
     * Get NumberOfCurrentLoans value
     * @return int|null
     */
    public function getNumberOfCurrentLoans()
    {
        return $this->NumberOfCurrentLoans;
    }
    /**
     * Set NumberOfCurrentLoans value
     * @param int $_numberOfCurrentLoans the NumberOfCurrentLoans
     * @return int
     */
    public function setNumberOfCurrentLoans($_numberOfCurrentLoans)
    {
        return ($this->NumberOfCurrentLoans = $_numberOfCurrentLoans);
    }
    /**
     * Get PreviousCustomer value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getPreviousCustomer()
    {
        return $this->PreviousCustomer;
    }
    /**
     * Set PreviousCustomer value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_previousCustomer the PreviousCustomer
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setPreviousCustomer($_previousCustomer)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_previousCustomer))
        {
            return false;
        }
        return ($this->PreviousCustomer = $_previousCustomer);
    }
    /**
     * Get PayrollGarnishment value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getPayrollGarnishment()
    {
        return $this->PayrollGarnishment;
    }
    /**
     * Set PayrollGarnishment value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_payrollGarnishment the PayrollGarnishment
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setPayrollGarnishment($_payrollGarnishment)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_payrollGarnishment))
        {
            return false;
        }
        return ($this->PayrollGarnishment = $_payrollGarnishment);
    }
    /**
     * Get CurrentBankruptcy value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getCurrentBankruptcy()
    {
        return $this->CurrentBankruptcy;
    }
    /**
     * Set CurrentBankruptcy value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_currentBankruptcy the CurrentBankruptcy
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setCurrentBankruptcy($_currentBankruptcy)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_currentBankruptcy))
        {
            return false;
        }
        return ($this->CurrentBankruptcy = $_currentBankruptcy);
    }
    /**
     * Get CurrentWriteOff value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getCurrentWriteOff()
    {
        return $this->CurrentWriteOff;
    }
    /**
     * Set CurrentWriteOff value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_currentWriteOff the CurrentWriteOff
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setCurrentWriteOff($_currentWriteOff)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_currentWriteOff))
        {
            return false;
        }
        return ($this->CurrentWriteOff = $_currentWriteOff);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructApplicantData_Type
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
