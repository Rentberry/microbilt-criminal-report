<?php
/**
 * File for class MicrobiltCriminalReportStructDecisionTable_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDecisionTable_Type originally named DecisionTable_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDecisionTable_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The DecisionTableSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDecisionTableSummary_Type
     */
    public $DecisionTableSummary;
    /**
     * The DecisionTableDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDecisionTableDetails_Type
     */
    public $DecisionTableDetails;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for DecisionTable_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructDecisionTableSummary_Type $_decisionTableSummary
     * @param MicrobiltCriminalReportStructDecisionTableDetails_Type $_decisionTableDetails
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructDecisionTable_Type
     */
    public function __construct($_decisionTableSummary = NULL,$_decisionTableDetails = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('DecisionTableSummary'=>$_decisionTableSummary,'DecisionTableDetails'=>$_decisionTableDetails,'Message'=>$_message),false);
    }
    /**
     * Get DecisionTableSummary value
     * @return MicrobiltCriminalReportStructDecisionTableSummary_Type|null
     */
    public function getDecisionTableSummary()
    {
        return $this->DecisionTableSummary;
    }
    /**
     * Set DecisionTableSummary value
     * @param MicrobiltCriminalReportStructDecisionTableSummary_Type $_decisionTableSummary the DecisionTableSummary
     * @return MicrobiltCriminalReportStructDecisionTableSummary_Type
     */
    public function setDecisionTableSummary($_decisionTableSummary)
    {
        return ($this->DecisionTableSummary = $_decisionTableSummary);
    }
    /**
     * Get DecisionTableDetails value
     * @return MicrobiltCriminalReportStructDecisionTableDetails_Type|null
     */
    public function getDecisionTableDetails()
    {
        return $this->DecisionTableDetails;
    }
    /**
     * Set DecisionTableDetails value
     * @param MicrobiltCriminalReportStructDecisionTableDetails_Type $_decisionTableDetails the DecisionTableDetails
     * @return MicrobiltCriminalReportStructDecisionTableDetails_Type
     */
    public function setDecisionTableDetails($_decisionTableDetails)
    {
        return ($this->DecisionTableDetails = $_decisionTableDetails);
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
     * @return MicrobiltCriminalReportStructDecisionTable_Type
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
