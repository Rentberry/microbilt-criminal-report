<?php
/**
 * File for class MicrobiltCriminalReportStructSubQuestions_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSubQuestions_Type originally named SubQuestions_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSubQuestions_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The QuestionText
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionText;
    /**
     * The AnswerValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AnswerValue;
    /**
     * Constructor method for SubQuestions_Type
     * @see parent::__construct()
     * @param string $_questionText
     * @param string $_answerValue
     * @return MicrobiltCriminalReportStructSubQuestions_Type
     */
    public function __construct($_questionText = NULL,$_answerValue = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('QuestionText'=>$_questionText,'AnswerValue'=>$_answerValue),false);
    }
    /**
     * Get QuestionText value
     * @return string|null
     */
    public function getQuestionText()
    {
        return $this->QuestionText;
    }
    /**
     * Set QuestionText value
     * @param string $_questionText the QuestionText
     * @return string
     */
    public function setQuestionText($_questionText)
    {
        return ($this->QuestionText = $_questionText);
    }
    /**
     * Get AnswerValue value
     * @return string|null
     */
    public function getAnswerValue()
    {
        return $this->AnswerValue;
    }
    /**
     * Set AnswerValue value
     * @param string $_answerValue the AnswerValue
     * @return string
     */
    public function setAnswerValue($_answerValue)
    {
        return ($this->AnswerValue = $_answerValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructSubQuestions_Type
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
