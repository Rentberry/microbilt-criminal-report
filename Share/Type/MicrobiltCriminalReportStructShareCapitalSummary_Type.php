<?php
/**
 * File for class MicrobiltCriminalReportStructShareCapitalSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructShareCapitalSummary_Type originally named ShareCapitalSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructShareCapitalSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ShareCapital
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructShareCapital_Type
     */
    public $ShareCapital;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ShareCapitalSummary_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructShareCapital_Type $_shareCapital
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructShareCapitalSummary_Type
     */
    public function __construct($_shareCapital = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ShareCapital'=>$_shareCapital,'Message'=>$_message),false);
    }
    /**
     * Get ShareCapital value
     * @return MicrobiltCriminalReportStructShareCapital_Type|null
     */
    public function getShareCapital()
    {
        return $this->ShareCapital;
    }
    /**
     * Set ShareCapital value
     * @param MicrobiltCriminalReportStructShareCapital_Type $_shareCapital the ShareCapital
     * @return MicrobiltCriminalReportStructShareCapital_Type
     */
    public function setShareCapital($_shareCapital)
    {
        return ($this->ShareCapital = $_shareCapital);
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
     * @return MicrobiltCriminalReportStructShareCapitalSummary_Type
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
