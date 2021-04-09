<?php
/**
 * File for class MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type originally named IntlCourtDetailsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The CaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CaseId;
    /**
     * The CourtName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtName;
    /**
     * The JudgmentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $JudgmentAmt;
    /**
     * The JudgmentDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $JudgmentDt;
    /**
     * The CourtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtType;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for IntlCourtDetailsInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_caseId
     * @param string $_courtName
     * @param MicrobiltCriminalReportStructCurrencyAmount $_judgmentAmt
     * @param string $_judgmentDt
     * @param string $_courtType
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type
     */
    public function __construct($_msgClass = NULL,$_caseId = NULL,$_courtName = NULL,$_judgmentAmt = NULL,$_judgmentDt = NULL,$_courtType = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'CaseId'=>$_caseId,'CourtName'=>$_courtName,'JudgmentAmt'=>$_judgmentAmt,'JudgmentDt'=>$_judgmentDt,'CourtType'=>$_courtType,'Message'=>$_message),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get CaseId value
     * @return string|null
     */
    public function getCaseId()
    {
        return $this->CaseId;
    }
    /**
     * Set CaseId value
     * @param string $_caseId the CaseId
     * @return string
     */
    public function setCaseId($_caseId)
    {
        return ($this->CaseId = $_caseId);
    }
    /**
     * Get CourtName value
     * @return string|null
     */
    public function getCourtName()
    {
        return $this->CourtName;
    }
    /**
     * Set CourtName value
     * @param string $_courtName the CourtName
     * @return string
     */
    public function setCourtName($_courtName)
    {
        return ($this->CourtName = $_courtName);
    }
    /**
     * Get JudgmentAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getJudgmentAmt()
    {
        return $this->JudgmentAmt;
    }
    /**
     * Set JudgmentAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_judgmentAmt the JudgmentAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setJudgmentAmt($_judgmentAmt)
    {
        return ($this->JudgmentAmt = $_judgmentAmt);
    }
    /**
     * Get JudgmentDt value
     * @return string|null
     */
    public function getJudgmentDt()
    {
        return $this->JudgmentDt;
    }
    /**
     * Set JudgmentDt value
     * @param string $_judgmentDt the JudgmentDt
     * @return string
     */
    public function setJudgmentDt($_judgmentDt)
    {
        return ($this->JudgmentDt = $_judgmentDt);
    }
    /**
     * Get CourtType value
     * @return string|null
     */
    public function getCourtType()
    {
        return $this->CourtType;
    }
    /**
     * Set CourtType value
     * @param string $_courtType the CourtType
     * @return string
     */
    public function setCourtType($_courtType)
    {
        return ($this->CourtType = $_courtType);
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
     * @return MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type
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
