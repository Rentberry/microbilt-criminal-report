<?php
/**
 * File for class MicrobiltCriminalReportStructAnswers_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAnswers_Type originally named Answers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAnswers_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AnswerValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AnswerValue;
    /**
     * The AnswerIsCorrect
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $AnswerIsCorrect;
    /**
     * Constructor method for Answers_Type
     * @see parent::__construct()
     * @param string $_answerValue
     * @param MicrobiltCriminalReportEnumBoolean $_answerIsCorrect
     * @return MicrobiltCriminalReportStructAnswers_Type
     */
    public function __construct($_answerValue = NULL,$_answerIsCorrect = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AnswerValue'=>$_answerValue,'AnswerIsCorrect'=>$_answerIsCorrect),false);
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
     * Get AnswerIsCorrect value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getAnswerIsCorrect()
    {
        return $this->AnswerIsCorrect;
    }
    /**
     * Set AnswerIsCorrect value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_answerIsCorrect the AnswerIsCorrect
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setAnswerIsCorrect($_answerIsCorrect)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_answerIsCorrect))
        {
            return false;
        }
        return ($this->AnswerIsCorrect = $_answerIsCorrect);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAnswers_Type
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
