<?php
/**
 * File for class MicrobiltCriminalReportStructCommercialCollectionInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCommercialCollectionInfo_Type originally named CommercialCollectionInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCommercialCollectionInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AcctStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctStatus;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The ConsumerStatementPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ConsumerStatementPresent;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $DisputeInd;
    /**
     * Constructor method for CommercialCollectionInfo_Type
     * @see parent::__construct()
     * @param string $_acctStatus
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param MicrobiltCriminalReportEnumBoolean $_consumerStatementPresent
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd
     * @return MicrobiltCriminalReportStructCommercialCollectionInfo_Type
     */
    public function __construct($_acctStatus = NULL,$_commercialDates = NULL,$_commercialAmounts = NULL,$_orgInfo = NULL,$_consumerStatementPresent = NULL,$_message = NULL,$_disputeInd = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AcctStatus'=>$_acctStatus,'CommercialDates'=>$_commercialDates,'CommercialAmounts'=>$_commercialAmounts,'OrgInfo'=>$_orgInfo,'ConsumerStatementPresent'=>$_consumerStatementPresent,'Message'=>$_message,'DisputeInd'=>$_disputeInd),false);
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
     * Get CommercialDates value
     * @return MicrobiltCriminalReportStructCommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates the CommercialDates
     * @return MicrobiltCriminalReportStructCommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get CommercialAmounts value
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
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
     * Get ConsumerStatementPresent value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getConsumerStatementPresent()
    {
        return $this->ConsumerStatementPresent;
    }
    /**
     * Set ConsumerStatementPresent value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_consumerStatementPresent the ConsumerStatementPresent
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setConsumerStatementPresent($_consumerStatementPresent)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_consumerStatementPresent))
        {
            return false;
        }
        return ($this->ConsumerStatementPresent = $_consumerStatementPresent);
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
     * @return MicrobiltCriminalReportStructCommercialCollectionInfo_Type
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
