<?php
/**
 * File for class MicrobiltCriminalReportStructInvalidAnswers_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructInvalidAnswers_Type originally named InvalidAnswers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructInvalidAnswers_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The InvalidAnswer
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $InvalidAnswer;
    /**
     * Constructor method for InvalidAnswers_Type
     * @see parent::__construct()
     * @param string $_invalidAnswer
     * @return MicrobiltCriminalReportStructInvalidAnswers_Type
     */
    public function __construct($_invalidAnswer = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('InvalidAnswer'=>$_invalidAnswer),false);
    }
    /**
     * Get InvalidAnswer value
     * @return string|null
     */
    public function getInvalidAnswer()
    {
        return $this->InvalidAnswer;
    }
    /**
     * Set InvalidAnswer value
     * @param string $_invalidAnswer the InvalidAnswer
     * @return string
     */
    public function setInvalidAnswer($_invalidAnswer)
    {
        return ($this->InvalidAnswer = $_invalidAnswer);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructInvalidAnswers_Type
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
