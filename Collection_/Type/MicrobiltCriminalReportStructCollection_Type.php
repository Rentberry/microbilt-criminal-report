<?php
/**
 * File for class MicrobiltCriminalReportStructCollection_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCollection_Type originally named Collection_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCollection_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OrigCreditor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigCreditor;
    /**
     * The OriginalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $OriginalAmt;
    /**
     * The AcctType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctType;
    /**
     * The OwnershipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipType;
    /**
     * The OrigAcctNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigAcctNumber;
    /**
     * The LastActivityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $LastActivityDt;
    /**
     * The CollectionAgency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $CollectionAgency;
    /**
     * The AssignedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $AssignedDt;
    /**
     * The CurrentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CurrentAmt;
    /**
     * The BalanceDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $BalanceDt;
    /**
     * The CollectionStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $CollectionStatus;
    /**
     * The StatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $StatusDt;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ReportedDt;
    /**
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ClosedDt;
    /**
     * The ClosureReason
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $ClosureReason;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $PaidDt;
    /**
     * The PmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $PmtType;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $VerifiedDt;
    /**
     * Constructor method for Collection_Type
     * @see parent::__construct()
     * @param string $_origCreditor
     * @param MicrobiltCriminalReportStructCurrencyAmount $_originalAmt
     * @param string $_acctType
     * @param string $_ownershipType
     * @param string $_origAcctNumber
     * @param date $_lastActivityDt
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_collectionAgency
     * @param date $_assignedDt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_currentAmt
     * @param date $_balanceDt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_collectionStatus
     * @param date $_statusDt
     * @param date $_reportedDt
     * @param date $_closedDt
     * @param MicrobiltCriminalReportStructMessage_Type $_closureReason
     * @param date $_paidDt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_pmtType
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param date $_verifiedDt
     * @return MicrobiltCriminalReportStructCollection_Type
     */
    public function __construct($_origCreditor = NULL,$_originalAmt = NULL,$_acctType = NULL,$_ownershipType = NULL,$_origAcctNumber = NULL,$_lastActivityDt = NULL,$_collectionAgency = NULL,$_assignedDt = NULL,$_currentAmt = NULL,$_balanceDt = NULL,$_collectionStatus = NULL,$_statusDt = NULL,$_reportedDt = NULL,$_closedDt = NULL,$_closureReason = NULL,$_paidDt = NULL,$_pmtType = NULL,$_message = NULL,$_verifiedDt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrigCreditor'=>$_origCreditor,'OriginalAmt'=>$_originalAmt,'AcctType'=>$_acctType,'OwnershipType'=>$_ownershipType,'OrigAcctNumber'=>$_origAcctNumber,'LastActivityDt'=>$_lastActivityDt,'CollectionAgency'=>$_collectionAgency,'AssignedDt'=>$_assignedDt,'CurrentAmt'=>$_currentAmt,'BalanceDt'=>$_balanceDt,'CollectionStatus'=>$_collectionStatus,'StatusDt'=>$_statusDt,'ReportedDt'=>$_reportedDt,'ClosedDt'=>$_closedDt,'ClosureReason'=>$_closureReason,'PaidDt'=>$_paidDt,'PmtType'=>$_pmtType,'Message'=>$_message,'VerifiedDt'=>$_verifiedDt),false);
    }
    /**
     * Get OrigCreditor value
     * @return string|null
     */
    public function getOrigCreditor()
    {
        return $this->OrigCreditor;
    }
    /**
     * Set OrigCreditor value
     * @param string $_origCreditor the OrigCreditor
     * @return string
     */
    public function setOrigCreditor($_origCreditor)
    {
        return ($this->OrigCreditor = $_origCreditor);
    }
    /**
     * Get OriginalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getOriginalAmt()
    {
        return $this->OriginalAmt;
    }
    /**
     * Set OriginalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_originalAmt the OriginalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setOriginalAmt($_originalAmt)
    {
        return ($this->OriginalAmt = $_originalAmt);
    }
    /**
     * Get AcctType value
     * @return string|null
     */
    public function getAcctType()
    {
        return $this->AcctType;
    }
    /**
     * Set AcctType value
     * @param string $_acctType the AcctType
     * @return string
     */
    public function setAcctType($_acctType)
    {
        return ($this->AcctType = $_acctType);
    }
    /**
     * Get OwnershipType value
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->OwnershipType;
    }
    /**
     * Set OwnershipType value
     * @param string $_ownershipType the OwnershipType
     * @return string
     */
    public function setOwnershipType($_ownershipType)
    {
        return ($this->OwnershipType = $_ownershipType);
    }
    /**
     * Get OrigAcctNumber value
     * @return string|null
     */
    public function getOrigAcctNumber()
    {
        return $this->OrigAcctNumber;
    }
    /**
     * Set OrigAcctNumber value
     * @param string $_origAcctNumber the OrigAcctNumber
     * @return string
     */
    public function setOrigAcctNumber($_origAcctNumber)
    {
        return ($this->OrigAcctNumber = $_origAcctNumber);
    }
    /**
     * Get LastActivityDt value
     * @return date|null
     */
    public function getLastActivityDt()
    {
        return $this->LastActivityDt;
    }
    /**
     * Set LastActivityDt value
     * @param date $_lastActivityDt the LastActivityDt
     * @return date
     */
    public function setLastActivityDt($_lastActivityDt)
    {
        return ($this->LastActivityDt = $_lastActivityDt);
    }
    /**
     * Get CollectionAgency value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getCollectionAgency()
    {
        return $this->CollectionAgency;
    }
    /**
     * Set CollectionAgency value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_collectionAgency the CollectionAgency
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setCollectionAgency($_collectionAgency)
    {
        return ($this->CollectionAgency = $_collectionAgency);
    }
    /**
     * Get AssignedDt value
     * @return date|null
     */
    public function getAssignedDt()
    {
        return $this->AssignedDt;
    }
    /**
     * Set AssignedDt value
     * @param date $_assignedDt the AssignedDt
     * @return date
     */
    public function setAssignedDt($_assignedDt)
    {
        return ($this->AssignedDt = $_assignedDt);
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
     * Get BalanceDt value
     * @return date|null
     */
    public function getBalanceDt()
    {
        return $this->BalanceDt;
    }
    /**
     * Set BalanceDt value
     * @param date $_balanceDt the BalanceDt
     * @return date
     */
    public function setBalanceDt($_balanceDt)
    {
        return ($this->BalanceDt = $_balanceDt);
    }
    /**
     * Get CollectionStatus value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getCollectionStatus()
    {
        return $this->CollectionStatus;
    }
    /**
     * Set CollectionStatus value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_collectionStatus the CollectionStatus
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setCollectionStatus($_collectionStatus)
    {
        return ($this->CollectionStatus = $_collectionStatus);
    }
    /**
     * Get StatusDt value
     * @return date|null
     */
    public function getStatusDt()
    {
        return $this->StatusDt;
    }
    /**
     * Set StatusDt value
     * @param date $_statusDt the StatusDt
     * @return date
     */
    public function setStatusDt($_statusDt)
    {
        return ($this->StatusDt = $_statusDt);
    }
    /**
     * Get ReportedDt value
     * @return date|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param date $_reportedDt the ReportedDt
     * @return date
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
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
     * Get ClosureReason value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getClosureReason()
    {
        return $this->ClosureReason;
    }
    /**
     * Set ClosureReason value
     * @param MicrobiltCriminalReportStructMessage_Type $_closureReason the ClosureReason
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setClosureReason($_closureReason)
    {
        return ($this->ClosureReason = $_closureReason);
    }
    /**
     * Get PaidDt value
     * @return date|null
     */
    public function getPaidDt()
    {
        return $this->PaidDt;
    }
    /**
     * Set PaidDt value
     * @param date $_paidDt the PaidDt
     * @return date
     */
    public function setPaidDt($_paidDt)
    {
        return ($this->PaidDt = $_paidDt);
    }
    /**
     * Get PmtType value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getPmtType()
    {
        return $this->PmtType;
    }
    /**
     * Set PmtType value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_pmtType the PmtType
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setPmtType($_pmtType)
    {
        return ($this->PmtType = $_pmtType);
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
     * Get VerifiedDt value
     * @return date|null
     */
    public function getVerifiedDt()
    {
        return $this->VerifiedDt;
    }
    /**
     * Set VerifiedDt value
     * @param date $_verifiedDt the VerifiedDt
     * @return date
     */
    public function setVerifiedDt($_verifiedDt)
    {
        return ($this->VerifiedDt = $_verifiedDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCollection_Type
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
