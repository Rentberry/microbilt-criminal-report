<?php
/**
 * File for class MicrobiltCriminalReportStructDecisionTableDetails_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDecisionTableDetails_Type originally named DecisionTableDetails_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDecisionTableDetails_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Function
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Function;
    /**
     * The Result
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Result;
    /**
     * The Passed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $Passed;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for DecisionTableDetails_Type
     * @see parent::__construct()
     * @param string $_function
     * @param string $_result
     * @param MicrobiltCriminalReportEnumBoolean $_passed
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructDecisionTableDetails_Type
     */
    public function __construct($_function = NULL,$_result = NULL,$_passed = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Function'=>$_function,'Result'=>$_result,'Passed'=>$_passed,'Message'=>$_message),false);
    }
    /**
     * Get Function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->Function;
    }
    /**
     * Set Function value
     * @param string $_function the Function
     * @return string
     */
    public function setFunction($_function)
    {
        return ($this->Function = $_function);
    }
    /**
     * Get Result value
     * @return string|null
     */
    public function getResult()
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @param string $_result the Result
     * @return string
     */
    public function setResult($_result)
    {
        return ($this->Result = $_result);
    }
    /**
     * Get Passed value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getPassed()
    {
        return $this->Passed;
    }
    /**
     * Set Passed value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_passed the Passed
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setPassed($_passed)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_passed))
        {
            return false;
        }
        return ($this->Passed = $_passed);
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
     * @return MicrobiltCriminalReportStructDecisionTableDetails_Type
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
