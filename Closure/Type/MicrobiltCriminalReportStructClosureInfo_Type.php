<?php
/**
 * File for class MicrobiltCriminalReportStructClosureInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructClosureInfo_Type originally named ClosureInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructClosureInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ClosureStats
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $ClosureStats;
    /**
     * The CollectionAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CollectionAmt;
    /**
     * The ChargeOffAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ChargeOffAmt;
    /**
     * The ClosureReason
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $ClosureReason;
    /**
     * The ClosureData
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $ClosureData;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructEvent_Type
     */
    public $Event;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The ReportedOrg
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $ReportedOrg;
    /**
     * The ReportingOrg
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $ReportingOrg;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ClosureInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructMessage_Type $_closureStats
     * @param MicrobiltCriminalReportStructCurrencyAmount $_collectionAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_chargeOffAmt
     * @param MicrobiltCriminalReportStructMessage_Type $_closureReason
     * @param MicrobiltCriminalReportStructMessage_Type $_closureData
     * @param MicrobiltCriminalReportStructEvent_Type $_event
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_reportedOrg
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_reportingOrg
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructClosureInfo_Type
     */
    public function __construct($_closureStats = NULL,$_collectionAmt = NULL,$_chargeOffAmt = NULL,$_closureReason = NULL,$_closureData = NULL,$_event = NULL,$_personInfo = NULL,$_reportedOrg = NULL,$_reportingOrg = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ClosureStats'=>$_closureStats,'CollectionAmt'=>$_collectionAmt,'ChargeOffAmt'=>$_chargeOffAmt,'ClosureReason'=>$_closureReason,'ClosureData'=>$_closureData,'Event'=>$_event,'PersonInfo'=>$_personInfo,'ReportedOrg'=>$_reportedOrg,'ReportingOrg'=>$_reportingOrg,'Message'=>$_message),false);
    }
    /**
     * Get ClosureStats value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getClosureStats()
    {
        return $this->ClosureStats;
    }
    /**
     * Set ClosureStats value
     * @param MicrobiltCriminalReportStructMessage_Type $_closureStats the ClosureStats
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setClosureStats($_closureStats)
    {
        return ($this->ClosureStats = $_closureStats);
    }
    /**
     * Get CollectionAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCollectionAmt()
    {
        return $this->CollectionAmt;
    }
    /**
     * Set CollectionAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_collectionAmt the CollectionAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCollectionAmt($_collectionAmt)
    {
        return ($this->CollectionAmt = $_collectionAmt);
    }
    /**
     * Get ChargeOffAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getChargeOffAmt()
    {
        return $this->ChargeOffAmt;
    }
    /**
     * Set ChargeOffAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_chargeOffAmt the ChargeOffAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setChargeOffAmt($_chargeOffAmt)
    {
        return ($this->ChargeOffAmt = $_chargeOffAmt);
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
     * Get ClosureData value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getClosureData()
    {
        return $this->ClosureData;
    }
    /**
     * Set ClosureData value
     * @param MicrobiltCriminalReportStructMessage_Type $_closureData the ClosureData
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setClosureData($_closureData)
    {
        return ($this->ClosureData = $_closureData);
    }
    /**
     * Get Event value
     * @return MicrobiltCriminalReportStructEvent_Type|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param MicrobiltCriminalReportStructEvent_Type $_event the Event
     * @return MicrobiltCriminalReportStructEvent_Type
     */
    public function setEvent($_event)
    {
        return ($this->Event = $_event);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltCriminalReportStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Get ReportedOrg value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getReportedOrg()
    {
        return $this->ReportedOrg;
    }
    /**
     * Set ReportedOrg value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_reportedOrg the ReportedOrg
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setReportedOrg($_reportedOrg)
    {
        return ($this->ReportedOrg = $_reportedOrg);
    }
    /**
     * Get ReportingOrg value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getReportingOrg()
    {
        return $this->ReportingOrg;
    }
    /**
     * Set ReportingOrg value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_reportingOrg the ReportingOrg
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setReportingOrg($_reportingOrg)
    {
        return ($this->ReportingOrg = $_reportingOrg);
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
     * @return MicrobiltCriminalReportStructClosureInfo_Type
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
