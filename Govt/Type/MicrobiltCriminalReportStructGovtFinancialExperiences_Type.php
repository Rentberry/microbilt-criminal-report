<?php
/**
 * File for class MicrobiltCriminalReportStructGovtFinancialExperiences_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGovtFinancialExperiences_Type originally named GovtFinancialExperiences_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGovtFinancialExperiences_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The TypeOfBankAcct
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TypeOfBankAcct;
    /**
     * The OpenedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $OpenedDt;
    /**
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ClosedDt;
    /**
     * The AccountRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $AccountRating;
    /**
     * The BalanceRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $BalanceRange;
    /**
     * The FiguresInBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $FiguresInBalance;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The ProfileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ProfileDt;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $DisputeInd;
    /**
     * Constructor method for GovtFinancialExperiences_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param string $_typeOfBankAcct
     * @param date $_openedDt
     * @param date $_closedDt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_accountRating
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_balanceRange
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_figuresInBalance
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt
     * @param date $_profileDt
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd
     * @return MicrobiltCriminalReportStructGovtFinancialExperiences_Type
     */
    public function __construct($_orgInfo = NULL,$_typeOfBankAcct = NULL,$_openedDt = NULL,$_closedDt = NULL,$_accountRating = NULL,$_balanceRange = NULL,$_figuresInBalance = NULL,$_balanceAmt = NULL,$_profileDt = NULL,$_disputeInd = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'TypeOfBankAcct'=>$_typeOfBankAcct,'OpenedDt'=>$_openedDt,'ClosedDt'=>$_closedDt,'AccountRating'=>$_accountRating,'BalanceRange'=>$_balanceRange,'FiguresInBalance'=>$_figuresInBalance,'BalanceAmt'=>$_balanceAmt,'ProfileDt'=>$_profileDt,'DisputeInd'=>$_disputeInd),false);
    }
    /**
     * Get OrgInfo value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get TypeOfBankAcct value
     * @return string|null
     */
    public function getTypeOfBankAcct()
    {
        return $this->TypeOfBankAcct;
    }
    /**
     * Set TypeOfBankAcct value
     * @param string $_typeOfBankAcct the TypeOfBankAcct
     * @return string
     */
    public function setTypeOfBankAcct($_typeOfBankAcct)
    {
        return ($this->TypeOfBankAcct = $_typeOfBankAcct);
    }
    /**
     * Get OpenedDt value
     * @return date|null
     */
    public function getOpenedDt()
    {
        return $this->OpenedDt;
    }
    /**
     * Set OpenedDt value
     * @param date $_openedDt the OpenedDt
     * @return date
     */
    public function setOpenedDt($_openedDt)
    {
        return ($this->OpenedDt = $_openedDt);
    }
    /**
     * Get ClosedDt value
     * @return date|null
     */
    public function getClosedDt()
    {
        return $this->ClosedDt;
    }
    /**
     * Set ClosedDt value
     * @param date $_closedDt the ClosedDt
     * @return date
     */
    public function setClosedDt($_closedDt)
    {
        return ($this->ClosedDt = $_closedDt);
    }
    /**
     * Get AccountRating value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getAccountRating()
    {
        return $this->AccountRating;
    }
    /**
     * Set AccountRating value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_accountRating the AccountRating
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setAccountRating($_accountRating)
    {
        return ($this->AccountRating = $_accountRating);
    }
    /**
     * Get BalanceRange value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getBalanceRange()
    {
        return $this->BalanceRange;
    }
    /**
     * Set BalanceRange value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_balanceRange the BalanceRange
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setBalanceRange($_balanceRange)
    {
        return ($this->BalanceRange = $_balanceRange);
    }
    /**
     * Get FiguresInBalance value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getFiguresInBalance()
    {
        return $this->FiguresInBalance;
    }
    /**
     * Set FiguresInBalance value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_figuresInBalance the FiguresInBalance
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setFiguresInBalance($_figuresInBalance)
    {
        return ($this->FiguresInBalance = $_figuresInBalance);
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
     * Get ProfileDt value
     * @return date|null
     */
    public function getProfileDt()
    {
        return $this->ProfileDt;
    }
    /**
     * Set ProfileDt value
     * @param date $_profileDt the ProfileDt
     * @return date
     */
    public function setProfileDt($_profileDt)
    {
        return ($this->ProfileDt = $_profileDt);
    }
    /**
     * Get DisputeInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGovtFinancialExperiences_Type
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
