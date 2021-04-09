<?php
/**
 * File for class MicrobiltCriminalReportStructSubject
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSubject originally named Subject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd1}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSubject extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The RefNum
     * @var string
     */
    public $RefNum;
    /**
     * The DataSource
     * @var string
     */
    public $DataSource;
    /**
     * The RecordID
     * @var string
     */
    public $RecordID;
    /**
     * The RecordType
     * @var string
     */
    public $RecordType;
    /**
     * The PersonInfo
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The CriminalCase
     * @var MicrobiltCriminalReportStructCriminalCase_Type
     */
    public $CriminalCase;
    /**
     * The OffenderRef
     * @var MicrobiltCriminalReportStructOffenderRef_Type
     */
    public $OffenderRef;
    /**
     * The Alias
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $Alias;
    /**
     * The Event
     * @var MicrobiltCriminalReportStructEvent_Type
     */
    public $Event;
    /**
     * The Message
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Subject
     * @see parent::__construct()
     * @param string $_refNum
     * @param string $_dataSource
     * @param string $_recordID
     * @param string $_recordType
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructCriminalCase_Type $_criminalCase
     * @param MicrobiltCriminalReportStructOffenderRef_Type $_offenderRef
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_alias
     * @param MicrobiltCriminalReportStructEvent_Type $_event
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructSubject
     */
    public function __construct($_refNum = NULL,$_dataSource = NULL,$_recordID = NULL,$_recordType = NULL,$_personInfo = NULL,$_criminalCase = NULL,$_offenderRef = NULL,$_alias = NULL,$_event = NULL,$_message = NULL)
    {
        parent::__construct(array('RefNum'=>$_refNum,'DataSource'=>$_dataSource,'RecordID'=>$_recordID,'RecordType'=>$_recordType,'PersonInfo'=>$_personInfo,'CriminalCase'=>$_criminalCase,'OffenderRef'=>$_offenderRef,'Alias'=>$_alias,'Event'=>$_event,'Message'=>$_message),false);
    }
    /**
     * Get RefNum value
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param string $_refNum the RefNum
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get DataSource value
     * @return string|null
     */
    public function getDataSource()
    {
        return $this->DataSource;
    }
    /**
     * Set DataSource value
     * @param string $_dataSource the DataSource
     * @return string
     */
    public function setDataSource($_dataSource)
    {
        return ($this->DataSource = $_dataSource);
    }
    /**
     * Get RecordID value
     * @return string|null
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }
    /**
     * Set RecordID value
     * @param string $_recordID the RecordID
     * @return string
     */
    public function setRecordID($_recordID)
    {
        return ($this->RecordID = $_recordID);
    }
    /**
     * Get RecordType value
     * @return string|null
     */
    public function getRecordType()
    {
        return $this->RecordType;
    }
    /**
     * Set RecordType value
     * @param string $_recordType the RecordType
     * @return string
     */
    public function setRecordType($_recordType)
    {
        return ($this->RecordType = $_recordType);
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
     * Get CriminalCase value
     * @return MicrobiltCriminalReportStructCriminalCase_Type|null
     */
    public function getCriminalCase()
    {
        return $this->CriminalCase;
    }
    /**
     * Set CriminalCase value
     * @param MicrobiltCriminalReportStructCriminalCase_Type $_criminalCase the CriminalCase
     * @return MicrobiltCriminalReportStructCriminalCase_Type
     */
    public function setCriminalCase($_criminalCase)
    {
        return ($this->CriminalCase = $_criminalCase);
    }
    /**
     * Get OffenderRef value
     * @return MicrobiltCriminalReportStructOffenderRef_Type|null
     */
    public function getOffenderRef()
    {
        return $this->OffenderRef;
    }
    /**
     * Set OffenderRef value
     * @param MicrobiltCriminalReportStructOffenderRef_Type $_offenderRef the OffenderRef
     * @return MicrobiltCriminalReportStructOffenderRef_Type
     */
    public function setOffenderRef($_offenderRef)
    {
        return ($this->OffenderRef = $_offenderRef);
    }
    /**
     * Get Alias value
     * @return MicrobiltCriminalReportStructPersonInfo_Type|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_alias the Alias
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function setAlias($_alias)
    {
        return ($this->Alias = $_alias);
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
     * @return MicrobiltCriminalReportStructSubject
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
