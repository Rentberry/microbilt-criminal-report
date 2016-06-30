<?php
/**
 * File for class MicrobiltCriminalReportStructBankVerification_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructBankVerification_Type originally named BankVerification_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructBankVerification_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ABANum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ABANum;
    /**
     * The AccountNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AccountNum;
    /**
     * The AcctStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctStatus;
    /**
     * The AcctTimesSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctTimesSeen;
    /**
     * The DtFirstSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtFirstSeen;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtLastSeen;
    /**
     * The NACHACode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NACHACode;
    /**
     * The NACHACodeDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $NACHACodeDt;
    /**
     * The SourceType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SourceType;
    /**
     * The TransType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransType;
    /**
     * The ACHStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ACHStatus;
    /**
     * The BankInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $BankInfo;
    /**
     * The RoutingNumType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RoutingNumType;
    /**
     * The RoutingNumStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RoutingNumStatus;
    /**
     * The InstitutionStatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $InstitutionStatusCode;
    /**
     * The InstitutionType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $InstitutionType;
    /**
     * The ServicingNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ServicingNum;
    /**
     * The BranchType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BranchType;
    /**
     * The RiskLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $RiskLevel;
    /**
     * The PossibleNonDDAAcct
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PossibleNonDDAAcct;
    /**
     * The BankPerformanceScore
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BankPerformanceScore;
    /**
     * The LRI
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LRI;
    /**
     * The LDD
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LDD;
    /**
     * The AdditionalABAs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAdditionalABAs_Type
     */
    public $AdditionalABAs;
    /**
     * Constructor method for BankVerification_Type
     * @see parent::__construct()
     * @param string $_aBANum
     * @param string $_accountNum
     * @param string $_acctStatus
     * @param string $_acctTimesSeen
     * @param date $_dtFirstSeen
     * @param date $_dtLastSeen
     * @param string $_nACHACode
     * @param date $_nACHACodeDt
     * @param string $_sourceType
     * @param string $_transType
     * @param string $_aCHStatus
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_bankInfo
     * @param string $_routingNumType
     * @param string $_routingNumStatus
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_institutionStatusCode
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_institutionType
     * @param string $_servicingNum
     * @param string $_branchType
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_riskLevel
     * @param string $_possibleNonDDAAcct
     * @param string $_bankPerformanceScore
     * @param string $_lRI
     * @param string $_lDD
     * @param MicrobiltCriminalReportStructAdditionalABAs_Type $_additionalABAs
     * @return MicrobiltCriminalReportStructBankVerification_Type
     */
    public function __construct($_aBANum = NULL,$_accountNum = NULL,$_acctStatus = NULL,$_acctTimesSeen = NULL,$_dtFirstSeen = NULL,$_dtLastSeen = NULL,$_nACHACode = NULL,$_nACHACodeDt = NULL,$_sourceType = NULL,$_transType = NULL,$_aCHStatus = NULL,$_bankInfo = NULL,$_routingNumType = NULL,$_routingNumStatus = NULL,$_institutionStatusCode = NULL,$_institutionType = NULL,$_servicingNum = NULL,$_branchType = NULL,$_riskLevel = NULL,$_possibleNonDDAAcct = NULL,$_bankPerformanceScore = NULL,$_lRI = NULL,$_lDD = NULL,$_additionalABAs = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ABANum'=>$_aBANum,'AccountNum'=>$_accountNum,'AcctStatus'=>$_acctStatus,'AcctTimesSeen'=>$_acctTimesSeen,'DtFirstSeen'=>$_dtFirstSeen,'DtLastSeen'=>$_dtLastSeen,'NACHACode'=>$_nACHACode,'NACHACodeDt'=>$_nACHACodeDt,'SourceType'=>$_sourceType,'TransType'=>$_transType,'ACHStatus'=>$_aCHStatus,'BankInfo'=>$_bankInfo,'RoutingNumType'=>$_routingNumType,'RoutingNumStatus'=>$_routingNumStatus,'InstitutionStatusCode'=>$_institutionStatusCode,'InstitutionType'=>$_institutionType,'ServicingNum'=>$_servicingNum,'BranchType'=>$_branchType,'RiskLevel'=>$_riskLevel,'PossibleNonDDAAcct'=>$_possibleNonDDAAcct,'BankPerformanceScore'=>$_bankPerformanceScore,'LRI'=>$_lRI,'LDD'=>$_lDD,'AdditionalABAs'=>$_additionalABAs),false);
    }
    /**
     * Get ABANum value
     * @return string|null
     */
    public function getABANum()
    {
        return $this->ABANum;
    }
    /**
     * Set ABANum value
     * @param string $_aBANum the ABANum
     * @return string
     */
    public function setABANum($_aBANum)
    {
        return ($this->ABANum = $_aBANum);
    }
    /**
     * Get AccountNum value
     * @return string|null
     */
    public function getAccountNum()
    {
        return $this->AccountNum;
    }
    /**
     * Set AccountNum value
     * @param string $_accountNum the AccountNum
     * @return string
     */
    public function setAccountNum($_accountNum)
    {
        return ($this->AccountNum = $_accountNum);
    }
    /**
     * Get AcctStatus value
     * @return string|null
     */
    public function getAcctStatus()
    {
        return $this->AcctStatus;
    }
    /**
     * Set AcctStatus value
     * @param string $_acctStatus the AcctStatus
     * @return string
     */
    public function setAcctStatus($_acctStatus)
    {
        return ($this->AcctStatus = $_acctStatus);
    }
    /**
     * Get AcctTimesSeen value
     * @return string|null
     */
    public function getAcctTimesSeen()
    {
        return $this->AcctTimesSeen;
    }
    /**
     * Set AcctTimesSeen value
     * @param string $_acctTimesSeen the AcctTimesSeen
     * @return string
     */
    public function setAcctTimesSeen($_acctTimesSeen)
    {
        return ($this->AcctTimesSeen = $_acctTimesSeen);
    }
    /**
     * Get DtFirstSeen value
     * @return date|null
     */
    public function getDtFirstSeen()
    {
        return $this->DtFirstSeen;
    }
    /**
     * Set DtFirstSeen value
     * @param date $_dtFirstSeen the DtFirstSeen
     * @return date
     */
    public function setDtFirstSeen($_dtFirstSeen)
    {
        return ($this->DtFirstSeen = $_dtFirstSeen);
    }
    /**
     * Get DtLastSeen value
     * @return date|null
     */
    public function getDtLastSeen()
    {
        return $this->DtLastSeen;
    }
    /**
     * Set DtLastSeen value
     * @param date $_dtLastSeen the DtLastSeen
     * @return date
     */
    public function setDtLastSeen($_dtLastSeen)
    {
        return ($this->DtLastSeen = $_dtLastSeen);
    }
    /**
     * Get NACHACode value
     * @return string|null
     */
    public function getNACHACode()
    {
        return $this->NACHACode;
    }
    /**
     * Set NACHACode value
     * @param string $_nACHACode the NACHACode
     * @return string
     */
    public function setNACHACode($_nACHACode)
    {
        return ($this->NACHACode = $_nACHACode);
    }
    /**
     * Get NACHACodeDt value
     * @return date|null
     */
    public function getNACHACodeDt()
    {
        return $this->NACHACodeDt;
    }
    /**
     * Set NACHACodeDt value
     * @param date $_nACHACodeDt the NACHACodeDt
     * @return date
     */
    public function setNACHACodeDt($_nACHACodeDt)
    {
        return ($this->NACHACodeDt = $_nACHACodeDt);
    }
    /**
     * Get SourceType value
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }
    /**
     * Set SourceType value
     * @param string $_sourceType the SourceType
     * @return string
     */
    public function setSourceType($_sourceType)
    {
        return ($this->SourceType = $_sourceType);
    }
    /**
     * Get TransType value
     * @return string|null
     */
    public function getTransType()
    {
        return $this->TransType;
    }
    /**
     * Set TransType value
     * @param string $_transType the TransType
     * @return string
     */
    public function setTransType($_transType)
    {
        return ($this->TransType = $_transType);
    }
    /**
     * Get ACHStatus value
     * @return string|null
     */
    public function getACHStatus()
    {
        return $this->ACHStatus;
    }
    /**
     * Set ACHStatus value
     * @param string $_aCHStatus the ACHStatus
     * @return string
     */
    public function setACHStatus($_aCHStatus)
    {
        return ($this->ACHStatus = $_aCHStatus);
    }
    /**
     * Get BankInfo value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getBankInfo()
    {
        return $this->BankInfo;
    }
    /**
     * Set BankInfo value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_bankInfo the BankInfo
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setBankInfo($_bankInfo)
    {
        return ($this->BankInfo = $_bankInfo);
    }
    /**
     * Get RoutingNumType value
     * @return string|null
     */
    public function getRoutingNumType()
    {
        return $this->RoutingNumType;
    }
    /**
     * Set RoutingNumType value
     * @param string $_routingNumType the RoutingNumType
     * @return string
     */
    public function setRoutingNumType($_routingNumType)
    {
        return ($this->RoutingNumType = $_routingNumType);
    }
    /**
     * Get RoutingNumStatus value
     * @return string|null
     */
    public function getRoutingNumStatus()
    {
        return $this->RoutingNumStatus;
    }
    /**
     * Set RoutingNumStatus value
     * @param string $_routingNumStatus the RoutingNumStatus
     * @return string
     */
    public function setRoutingNumStatus($_routingNumStatus)
    {
        return ($this->RoutingNumStatus = $_routingNumStatus);
    }
    /**
     * Get InstitutionStatusCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getInstitutionStatusCode()
    {
        return $this->InstitutionStatusCode;
    }
    /**
     * Set InstitutionStatusCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_institutionStatusCode the InstitutionStatusCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setInstitutionStatusCode($_institutionStatusCode)
    {
        return ($this->InstitutionStatusCode = $_institutionStatusCode);
    }
    /**
     * Get InstitutionType value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getInstitutionType()
    {
        return $this->InstitutionType;
    }
    /**
     * Set InstitutionType value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_institutionType the InstitutionType
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setInstitutionType($_institutionType)
    {
        return ($this->InstitutionType = $_institutionType);
    }
    /**
     * Get ServicingNum value
     * @return string|null
     */
    public function getServicingNum()
    {
        return $this->ServicingNum;
    }
    /**
     * Set ServicingNum value
     * @param string $_servicingNum the ServicingNum
     * @return string
     */
    public function setServicingNum($_servicingNum)
    {
        return ($this->ServicingNum = $_servicingNum);
    }
    /**
     * Get BranchType value
     * @return string|null
     */
    public function getBranchType()
    {
        return $this->BranchType;
    }
    /**
     * Set BranchType value
     * @param string $_branchType the BranchType
     * @return string
     */
    public function setBranchType($_branchType)
    {
        return ($this->BranchType = $_branchType);
    }
    /**
     * Get RiskLevel value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getRiskLevel()
    {
        return $this->RiskLevel;
    }
    /**
     * Set RiskLevel value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_riskLevel the RiskLevel
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setRiskLevel($_riskLevel)
    {
        return ($this->RiskLevel = $_riskLevel);
    }
    /**
     * Get PossibleNonDDAAcct value
     * @return string|null
     */
    public function getPossibleNonDDAAcct()
    {
        return $this->PossibleNonDDAAcct;
    }
    /**
     * Set PossibleNonDDAAcct value
     * @param string $_possibleNonDDAAcct the PossibleNonDDAAcct
     * @return string
     */
    public function setPossibleNonDDAAcct($_possibleNonDDAAcct)
    {
        return ($this->PossibleNonDDAAcct = $_possibleNonDDAAcct);
    }
    /**
     * Get BankPerformanceScore value
     * @return string|null
     */
    public function getBankPerformanceScore()
    {
        return $this->BankPerformanceScore;
    }
    /**
     * Set BankPerformanceScore value
     * @param string $_bankPerformanceScore the BankPerformanceScore
     * @return string
     */
    public function setBankPerformanceScore($_bankPerformanceScore)
    {
        return ($this->BankPerformanceScore = $_bankPerformanceScore);
    }
    /**
     * Get LRI value
     * @return string|null
     */
    public function getLRI()
    {
        return $this->LRI;
    }
    /**
     * Set LRI value
     * @param string $_lRI the LRI
     * @return string
     */
    public function setLRI($_lRI)
    {
        return ($this->LRI = $_lRI);
    }
    /**
     * Get LDD value
     * @return string|null
     */
    public function getLDD()
    {
        return $this->LDD;
    }
    /**
     * Set LDD value
     * @param string $_lDD the LDD
     * @return string
     */
    public function setLDD($_lDD)
    {
        return ($this->LDD = $_lDD);
    }
    /**
     * Get AdditionalABAs value
     * @return MicrobiltCriminalReportStructAdditionalABAs_Type|null
     */
    public function getAdditionalABAs()
    {
        return $this->AdditionalABAs;
    }
    /**
     * Set AdditionalABAs value
     * @param MicrobiltCriminalReportStructAdditionalABAs_Type $_additionalABAs the AdditionalABAs
     * @return MicrobiltCriminalReportStructAdditionalABAs_Type
     */
    public function setAdditionalABAs($_additionalABAs)
    {
        return ($this->AdditionalABAs = $_additionalABAs);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructBankVerification_Type
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
