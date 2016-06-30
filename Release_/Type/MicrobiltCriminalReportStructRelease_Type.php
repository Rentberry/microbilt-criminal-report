<?php
/**
 * File for class MicrobiltCriminalReportStructRelease_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructRelease_Type originally named Release_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructRelease_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $StartDt;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $Agency;
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
     * @var date
     */
    public $ScheduledEndDt;
    /**
     * The ActualEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ActualEndDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Release_Type
     * @see parent::__construct()
     * @param date $_startDt
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency
     * @param MicrobiltCriminalReportStructSentenceLength_Type $_sentenceLength
     * @param date $_scheduledEndDt
     * @param date $_actualEndDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructRelease_Type
     */
    public function __construct($_startDt = NULL,$_agency = NULL,$_sentenceLength = NULL,$_scheduledEndDt = NULL,$_actualEndDt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('StartDt'=>$_startDt,'Agency'=>$_agency,'SentenceLength'=>$_sentenceLength,'ScheduledEndDt'=>$_scheduledEndDt,'ActualEndDt'=>$_actualEndDt,'Message'=>$_message),false);
    }
    /**
     * Get StartDt value
     * @return date|null
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param date $_startDt the StartDt
     * @return date
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
    }
    /**
     * Get Agency value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency the Agency
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setAgency($_agency)
    {
        return ($this->Agency = $_agency);
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
     * @return date|null
     */
    public function getScheduledEndDt()
    {
        return $this->ScheduledEndDt;
    }
    /**
     * Set ScheduledEndDt value
     * @param date $_scheduledEndDt the ScheduledEndDt
     * @return date
     */
    public function setScheduledEndDt($_scheduledEndDt)
    {
        return ($this->ScheduledEndDt = $_scheduledEndDt);
    }
    /**
     * Get ActualEndDt value
     * @return date|null
     */
    public function getActualEndDt()
    {
        return $this->ActualEndDt;
    }
    /**
     * Set ActualEndDt value
     * @param date $_actualEndDt the ActualEndDt
     * @return date
     */
    public function setActualEndDt($_actualEndDt)
    {
        return ($this->ActualEndDt = $_actualEndDt);
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
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructRelease_Type
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
