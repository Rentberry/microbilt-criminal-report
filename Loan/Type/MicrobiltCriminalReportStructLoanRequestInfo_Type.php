<?php
/**
 * File for class MicrobiltCriminalReportStructLoanRequestInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLoanRequestInfo_Type originally named LoanRequestInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLoanRequestInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RequestedCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $RequestedCreditAmt;
    /**
     * The DownPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $DownPmtAmt;
    /**
     * The MonthlyPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MonthlyPmtAmt;
    /**
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The RefinanceCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RefinanceCode;
    /**
     * The BookValueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $BookValueAmt;
    /**
     * The CostOfGoodsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CostOfGoodsAmt;
    /**
     * The TotalLiquidAssetsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalLiquidAssetsAmt;
    /**
     * The HousingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HousingType;
    /**
     * The DwellingStructureType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DwellingStructureType;
    /**
     * The MortgageRentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MortgageRentAmt;
    /**
     * The MortgageAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MortgageAmt;
    /**
     * The MortgageBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MortgageBalAmt;
    /**
     * The LoanType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanType;
    /**
     * The MonthlyDebtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MonthlyDebtAmt;
    /**
     * The BankruptcyOnApp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BankruptcyOnApp;
    /**
     * The RepossessionOnApp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $RepossessionOnApp;
    /**
     * The ForeclosureOnApp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ForeclosureOnApp;
    /**
     * Constructor method for LoanRequestInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_requestedCreditAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_downPmtAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_monthlyPmtAmt
     * @param string $_terms
     * @param string $_refinanceCode
     * @param MicrobiltCriminalReportStructCurrencyAmount $_bookValueAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_costOfGoodsAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalLiquidAssetsAmt
     * @param string $_housingType
     * @param string $_dwellingStructureType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_mortgageRentAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_mortgageAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_mortgageBalAmt
     * @param string $_loanType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_monthlyDebtAmt
     * @param MicrobiltCriminalReportEnumBoolean $_bankruptcyOnApp
     * @param MicrobiltCriminalReportEnumBoolean $_repossessionOnApp
     * @param MicrobiltCriminalReportEnumBoolean $_foreclosureOnApp
     * @return MicrobiltCriminalReportStructLoanRequestInfo_Type
     */
    public function __construct($_requestedCreditAmt = NULL,$_downPmtAmt = NULL,$_monthlyPmtAmt = NULL,$_terms = NULL,$_refinanceCode = NULL,$_bookValueAmt = NULL,$_costOfGoodsAmt = NULL,$_totalLiquidAssetsAmt = NULL,$_housingType = NULL,$_dwellingStructureType = NULL,$_mortgageRentAmt = NULL,$_mortgageAmt = NULL,$_mortgageBalAmt = NULL,$_loanType = NULL,$_monthlyDebtAmt = NULL,$_bankruptcyOnApp = NULL,$_repossessionOnApp = NULL,$_foreclosureOnApp = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RequestedCreditAmt'=>$_requestedCreditAmt,'DownPmtAmt'=>$_downPmtAmt,'MonthlyPmtAmt'=>$_monthlyPmtAmt,'Terms'=>$_terms,'RefinanceCode'=>$_refinanceCode,'BookValueAmt'=>$_bookValueAmt,'CostOfGoodsAmt'=>$_costOfGoodsAmt,'TotalLiquidAssetsAmt'=>$_totalLiquidAssetsAmt,'HousingType'=>$_housingType,'DwellingStructureType'=>$_dwellingStructureType,'MortgageRentAmt'=>$_mortgageRentAmt,'MortgageAmt'=>$_mortgageAmt,'MortgageBalAmt'=>$_mortgageBalAmt,'LoanType'=>$_loanType,'MonthlyDebtAmt'=>$_monthlyDebtAmt,'BankruptcyOnApp'=>$_bankruptcyOnApp,'RepossessionOnApp'=>$_repossessionOnApp,'ForeclosureOnApp'=>$_foreclosureOnApp),false);
    }
    /**
     * Get RequestedCreditAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getRequestedCreditAmt()
    {
        return $this->RequestedCreditAmt;
    }
    /**
     * Set RequestedCreditAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_requestedCreditAmt the RequestedCreditAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setRequestedCreditAmt($_requestedCreditAmt)
    {
        return ($this->RequestedCreditAmt = $_requestedCreditAmt);
    }
    /**
     * Get DownPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getDownPmtAmt()
    {
        return $this->DownPmtAmt;
    }
    /**
     * Set DownPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_downPmtAmt the DownPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setDownPmtAmt($_downPmtAmt)
    {
        return ($this->DownPmtAmt = $_downPmtAmt);
    }
    /**
     * Get MonthlyPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMonthlyPmtAmt()
    {
        return $this->MonthlyPmtAmt;
    }
    /**
     * Set MonthlyPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_monthlyPmtAmt the MonthlyPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMonthlyPmtAmt($_monthlyPmtAmt)
    {
        return ($this->MonthlyPmtAmt = $_monthlyPmtAmt);
    }
    /**
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get RefinanceCode value
     * @return string|null
     */
    public function getRefinanceCode()
    {
        return $this->RefinanceCode;
    }
    /**
     * Set RefinanceCode value
     * @param string $_refinanceCode the RefinanceCode
     * @return string
     */
    public function setRefinanceCode($_refinanceCode)
    {
        return ($this->RefinanceCode = $_refinanceCode);
    }
    /**
     * Get BookValueAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getBookValueAmt()
    {
        return $this->BookValueAmt;
    }
    /**
     * Set BookValueAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_bookValueAmt the BookValueAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setBookValueAmt($_bookValueAmt)
    {
        return ($this->BookValueAmt = $_bookValueAmt);
    }
    /**
     * Get CostOfGoodsAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCostOfGoodsAmt()
    {
        return $this->CostOfGoodsAmt;
    }
    /**
     * Set CostOfGoodsAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_costOfGoodsAmt the CostOfGoodsAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCostOfGoodsAmt($_costOfGoodsAmt)
    {
        return ($this->CostOfGoodsAmt = $_costOfGoodsAmt);
    }
    /**
     * Get TotalLiquidAssetsAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalLiquidAssetsAmt()
    {
        return $this->TotalLiquidAssetsAmt;
    }
    /**
     * Set TotalLiquidAssetsAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalLiquidAssetsAmt the TotalLiquidAssetsAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalLiquidAssetsAmt($_totalLiquidAssetsAmt)
    {
        return ($this->TotalLiquidAssetsAmt = $_totalLiquidAssetsAmt);
    }
    /**
     * Get HousingType value
     * @return string|null
     */
    public function getHousingType()
    {
        return $this->HousingType;
    }
    /**
     * Set HousingType value
     * @param string $_housingType the HousingType
     * @return string
     */
    public function setHousingType($_housingType)
    {
        return ($this->HousingType = $_housingType);
    }
    /**
     * Get DwellingStructureType value
     * @return string|null
     */
    public function getDwellingStructureType()
    {
        return $this->DwellingStructureType;
    }
    /**
     * Set DwellingStructureType value
     * @param string $_dwellingStructureType the DwellingStructureType
     * @return string
     */
    public function setDwellingStructureType($_dwellingStructureType)
    {
        return ($this->DwellingStructureType = $_dwellingStructureType);
    }
    /**
     * Get MortgageRentAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMortgageRentAmt()
    {
        return $this->MortgageRentAmt;
    }
    /**
     * Set MortgageRentAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_mortgageRentAmt the MortgageRentAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMortgageRentAmt($_mortgageRentAmt)
    {
        return ($this->MortgageRentAmt = $_mortgageRentAmt);
    }
    /**
     * Get MortgageAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMortgageAmt()
    {
        return $this->MortgageAmt;
    }
    /**
     * Set MortgageAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_mortgageAmt the MortgageAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMortgageAmt($_mortgageAmt)
    {
        return ($this->MortgageAmt = $_mortgageAmt);
    }
    /**
     * Get MortgageBalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMortgageBalAmt()
    {
        return $this->MortgageBalAmt;
    }
    /**
     * Set MortgageBalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_mortgageBalAmt the MortgageBalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMortgageBalAmt($_mortgageBalAmt)
    {
        return ($this->MortgageBalAmt = $_mortgageBalAmt);
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
     * Get MonthlyDebtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMonthlyDebtAmt()
    {
        return $this->MonthlyDebtAmt;
    }
    /**
     * Set MonthlyDebtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_monthlyDebtAmt the MonthlyDebtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMonthlyDebtAmt($_monthlyDebtAmt)
    {
        return ($this->MonthlyDebtAmt = $_monthlyDebtAmt);
    }
    /**
     * Get BankruptcyOnApp value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBankruptcyOnApp()
    {
        return $this->BankruptcyOnApp;
    }
    /**
     * Set BankruptcyOnApp value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_bankruptcyOnApp the BankruptcyOnApp
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBankruptcyOnApp($_bankruptcyOnApp)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_bankruptcyOnApp))
        {
            return false;
        }
        return ($this->BankruptcyOnApp = $_bankruptcyOnApp);
    }
    /**
     * Get RepossessionOnApp value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getRepossessionOnApp()
    {
        return $this->RepossessionOnApp;
    }
    /**
     * Set RepossessionOnApp value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_repossessionOnApp the RepossessionOnApp
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setRepossessionOnApp($_repossessionOnApp)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_repossessionOnApp))
        {
            return false;
        }
        return ($this->RepossessionOnApp = $_repossessionOnApp);
    }
    /**
     * Get ForeclosureOnApp value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getForeclosureOnApp()
    {
        return $this->ForeclosureOnApp;
    }
    /**
     * Set ForeclosureOnApp value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_foreclosureOnApp the ForeclosureOnApp
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setForeclosureOnApp($_foreclosureOnApp)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_foreclosureOnApp))
        {
            return false;
        }
        return ($this->ForeclosureOnApp = $_foreclosureOnApp);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLoanRequestInfo_Type
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
