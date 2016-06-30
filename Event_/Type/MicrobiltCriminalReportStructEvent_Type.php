<?php
/**
 * File for class MicrobiltCriminalReportStructEvent_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructEvent_Type originally named Event_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructEvent_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The EventDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $EventDt;
    /**
     * The EventType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EventType;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The PostAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPostAddr_Type
     */
    public $PostAddr;
    /**
     * Constructor method for Event_Type
     * @see parent::__construct()
     * @param date $_eventDt
     * @param string $_eventType
     * @param string $_filingType
     * @param string $_documentNumber
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr
     * @return MicrobiltCriminalReportStructEvent_Type
     */
    public function __construct($_eventDt = NULL,$_eventType = NULL,$_filingType = NULL,$_documentNumber = NULL,$_message = NULL,$_postAddr = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('EventDt'=>$_eventDt,'EventType'=>$_eventType,'FilingType'=>$_filingType,'DocumentNumber'=>$_documentNumber,'Message'=>$_message,'PostAddr'=>$_postAddr),false);
    }
    /**
     * Get EventDt value
     * @return date|null
     */
    public function getEventDt()
    {
        return $this->EventDt;
    }
    /**
     * Set EventDt value
     * @param date $_eventDt the EventDt
     * @return date
     */
    public function setEventDt($_eventDt)
    {
        return ($this->EventDt = $_eventDt);
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param string $_eventType the EventType
     * @return string
     */
    public function setEventType($_eventType)
    {
        return ($this->EventType = $_eventType);
    }
    /**
     * Get FilingType value
     * @return string|null
     */
    public function getFilingType()
    {
        return $this->FilingType;
    }
    /**
     * Set FilingType value
     * @param string $_filingType the FilingType
     * @return string
     */
    public function setFilingType($_filingType)
    {
        return ($this->FilingType = $_filingType);
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $_documentNumber the DocumentNumber
     * @return string
     */
    public function setDocumentNumber($_documentNumber)
    {
        return ($this->DocumentNumber = $_documentNumber);
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
     * Get PostAddr value
     * @return MicrobiltCriminalReportStructPostAddr_Type|null
     */
    public function getPostAddr()
    {
        return $this->PostAddr;
    }
    /**
     * Set PostAddr value
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr the PostAddr
     * @return MicrobiltCriminalReportStructPostAddr_Type
     */
    public function setPostAddr($_postAddr)
    {
        return ($this->PostAddr = $_postAddr);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructEvent_Type
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
