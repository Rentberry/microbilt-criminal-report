<?php
/**
 * File for class MicrobiltCriminalReportStructDecision_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDecision_Type originally named Decision_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDecision_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The DecisionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DecisionCode;
    /**
     * The ReturnValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $ReturnValue;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Text;
    /**
     * The DecisionTable
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDecisionTable_Type
     */
    public $DecisionTable;
    /**
     * The DTApplicationVariables
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDTApplicationVariables_Type
     */
    public $DTApplicationVariables;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Decision_Type
     * @see parent::__construct()
     * @param string $_decisionCode
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_returnValue
     * @param string $_text
     * @param MicrobiltCriminalReportStructDecisionTable_Type $_decisionTable
     * @param MicrobiltCriminalReportStructDTApplicationVariables_Type $_dTApplicationVariables
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructDecision_Type
     */
    public function __construct($_decisionCode = NULL,$_returnValue = NULL,$_text = NULL,$_decisionTable = NULL,$_dTApplicationVariables = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('DecisionCode'=>$_decisionCode,'ReturnValue'=>$_returnValue,'Text'=>$_text,'DecisionTable'=>$_decisionTable,'DTApplicationVariables'=>$_dTApplicationVariables,'Message'=>$_message),false);
    }
    /**
     * Get DecisionCode value
     * @return string|null
     */
    public function getDecisionCode()
    {
        return $this->DecisionCode;
    }
    /**
     * Set DecisionCode value
     * @param string $_decisionCode the DecisionCode
     * @return string
     */
    public function setDecisionCode($_decisionCode)
    {
        return ($this->DecisionCode = $_decisionCode);
    }
    /**
     * Get ReturnValue value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getReturnValue()
    {
        return $this->ReturnValue;
    }
    /**
     * Set ReturnValue value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_returnValue the ReturnValue
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setReturnValue($_returnValue)
    {
        return ($this->ReturnValue = $_returnValue);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $_text the Text
     * @return string
     */
    public function setText($_text)
    {
        return ($this->Text = $_text);
    }
    /**
     * Get DecisionTable value
     * @return MicrobiltCriminalReportStructDecisionTable_Type|null
     */
    public function getDecisionTable()
    {
        return $this->DecisionTable;
    }
    /**
     * Set DecisionTable value
     * @param MicrobiltCriminalReportStructDecisionTable_Type $_decisionTable the DecisionTable
     * @return MicrobiltCriminalReportStructDecisionTable_Type
     */
    public function setDecisionTable($_decisionTable)
    {
        return ($this->DecisionTable = $_decisionTable);
    }
    /**
     * Get DTApplicationVariables value
     * @return MicrobiltCriminalReportStructDTApplicationVariables_Type|null
     */
    public function getDTApplicationVariables()
    {
        return $this->DTApplicationVariables;
    }
    /**
     * Set DTApplicationVariables value
     * @param MicrobiltCriminalReportStructDTApplicationVariables_Type $_dTApplicationVariables the DTApplicationVariables
     * @return MicrobiltCriminalReportStructDTApplicationVariables_Type
     */
    public function setDTApplicationVariables($_dTApplicationVariables)
    {
        return ($this->DTApplicationVariables = $_dTApplicationVariables);
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
     * @return MicrobiltCriminalReportStructDecision_Type
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
