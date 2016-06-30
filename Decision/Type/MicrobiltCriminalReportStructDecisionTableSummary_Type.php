<?php
/**
 * File for class MicrobiltCriminalReportStructDecisionTableSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDecisionTableSummary_Type originally named DecisionTableSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDecisionTableSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RuleSetID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RuleSetID;
    /**
     * The DecisionDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DecisionDescription;
    /**
     * The DecisionProduct
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $DecisionProduct;
    /**
     * Constructor method for DecisionTableSummary_Type
     * @see parent::__construct()
     * @param string $_ruleSetID
     * @param string $_decisionDescription
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_decisionProduct
     * @return MicrobiltCriminalReportStructDecisionTableSummary_Type
     */
    public function __construct($_ruleSetID = NULL,$_decisionDescription = NULL,$_decisionProduct = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RuleSetID'=>$_ruleSetID,'DecisionDescription'=>$_decisionDescription,'DecisionProduct'=>$_decisionProduct),false);
    }
    /**
     * Get RuleSetID value
     * @return string|null
     */
    public function getRuleSetID()
    {
        return $this->RuleSetID;
    }
    /**
     * Set RuleSetID value
     * @param string $_ruleSetID the RuleSetID
     * @return string
     */
    public function setRuleSetID($_ruleSetID)
    {
        return ($this->RuleSetID = $_ruleSetID);
    }
    /**
     * Get DecisionDescription value
     * @return string|null
     */
    public function getDecisionDescription()
    {
        return $this->DecisionDescription;
    }
    /**
     * Set DecisionDescription value
     * @param string $_decisionDescription the DecisionDescription
     * @return string
     */
    public function setDecisionDescription($_decisionDescription)
    {
        return ($this->DecisionDescription = $_decisionDescription);
    }
    /**
     * Get DecisionProduct value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getDecisionProduct()
    {
        return $this->DecisionProduct;
    }
    /**
     * Set DecisionProduct value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_decisionProduct the DecisionProduct
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setDecisionProduct($_decisionProduct)
    {
        return ($this->DecisionProduct = $_decisionProduct);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructDecisionTableSummary_Type
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
