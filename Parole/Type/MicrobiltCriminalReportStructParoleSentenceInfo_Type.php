<?php
/**
 * File for class MicrobiltCriminalReportStructParoleSentenceInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructParoleSentenceInfo_Type originally named ParoleSentenceInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructParoleSentenceInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ActualEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ActualEndDt;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $County;
    /**
     * The ProbationStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProbationStatus;
    /**
     * The SentenceLength
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructSentenceLength_Type
     */
    public $SentenceLength;
    /**
     * The ScheduledEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ScheduledEndDt;
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StartDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ParoleSentenceInfo_Type
     * @see parent::__construct()
     * @param string $_actualEndDt
     * @param string $_county
     * @param string $_probationStatus
     * @param MicrobiltCriminalReportStructSentenceLength_Type $_sentenceLength
     * @param string $_scheduledEndDt
     * @param string $_startDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructParoleSentenceInfo_Type
     */
    public function __construct($_actualEndDt = NULL,$_county = NULL,$_probationStatus = NULL,$_sentenceLength = NULL,$_scheduledEndDt = NULL,$_startDt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ActualEndDt'=>$_actualEndDt,'County'=>$_county,'ProbationStatus'=>$_probationStatus,'SentenceLength'=>$_sentenceLength,'ScheduledEndDt'=>$_scheduledEndDt,'StartDt'=>$_startDt,'Message'=>$_message),false);
    }
    /**
     * Get ActualEndDt value
     * @return string|null
     */
    public function getActualEndDt()
    {
        return $this->ActualEndDt;
    }
    /**
     * Set ActualEndDt value
     * @param string $_actualEndDt the ActualEndDt
     * @return string
     */
    public function setActualEndDt($_actualEndDt)
    {
        return ($this->ActualEndDt = $_actualEndDt);
    }
    /**
     * Get County value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $_county the County
     * @return string
     */
    public function setCounty($_county)
    {
        return ($this->County = $_county);
    }
    /**
     * Get ProbationStatus value
     * @return string|null
     */
    public function getProbationStatus()
    {
        return $this->ProbationStatus;
    }
    /**
     * Set ProbationStatus value
     * @param string $_probationStatus the ProbationStatus
     * @return string
     */
    public function setProbationStatus($_probationStatus)
    {
        return ($this->ProbationStatus = $_probationStatus);
    }
    /**
     * Get SentenceLength value
     * @return MicrobiltCriminalReportStructSentenceLength_Type|null
     */
    public function getSentenceLength()
    {
        return $this->SentenceLength;
    }
    /**
     * Set SentenceLength value
     * @param MicrobiltCriminalReportStructSentenceLength_Type $_sentenceLength the SentenceLength
     * @return MicrobiltCriminalReportStructSentenceLength_Type
     */
    public function setSentenceLength($_sentenceLength)
    {
        return ($this->SentenceLength = $_sentenceLength);
    }
    /**
     * Get ScheduledEndDt value
     * @return string|null
     */
    public function getScheduledEndDt()
    {
        return $this->ScheduledEndDt;
    }
    /**
     * Set ScheduledEndDt value
     * @param string $_scheduledEndDt the ScheduledEndDt
     * @return string
     */
    public function setScheduledEndDt($_scheduledEndDt)
    {
        return ($this->ScheduledEndDt = $_scheduledEndDt);
    }
    /**
     * Get StartDt value
     * @return string|null
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param string $_startDt the StartDt
     * @return string
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
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
     * @return MicrobiltCriminalReportStructParoleSentenceInfo_Type
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
