<?php
/**
 * File for class MicrobiltCriminalReportStructQuestionsAnswers_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructQuestionsAnswers_Type originally named QuestionsAnswers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructQuestionsAnswers_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The QuestionID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionID;
    /**
     * The MultipleCorrectAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $MultipleCorrectAnswers;
    /**
     * The QuestionText
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionText;
    /**
     * The QuestionInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionInfo;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAnswers_Type
     */
    public $Answers;
    /**
     * The SubQuestions
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructSubQuestions_Type
     */
    public $SubQuestions;
    /**
     * The InvalidAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructInvalidAnswers_Type
     */
    public $InvalidAnswers;
    /**
     * Constructor method for QuestionsAnswers_Type
     * @see parent::__construct()
     * @param string $_questionID
     * @param MicrobiltCriminalReportEnumBoolean $_multipleCorrectAnswers
     * @param string $_questionText
     * @param string $_questionInfo
     * @param MicrobiltCriminalReportStructAnswers_Type $_answers
     * @param MicrobiltCriminalReportStructSubQuestions_Type $_subQuestions
     * @param MicrobiltCriminalReportStructInvalidAnswers_Type $_invalidAnswers
     * @return MicrobiltCriminalReportStructQuestionsAnswers_Type
     */
    public function __construct($_questionID = NULL,$_multipleCorrectAnswers = NULL,$_questionText = NULL,$_questionInfo = NULL,$_answers = NULL,$_subQuestions = NULL,$_invalidAnswers = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('QuestionID'=>$_questionID,'MultipleCorrectAnswers'=>$_multipleCorrectAnswers,'QuestionText'=>$_questionText,'QuestionInfo'=>$_questionInfo,'Answers'=>$_answers,'SubQuestions'=>$_subQuestions,'InvalidAnswers'=>$_invalidAnswers),false);
    }
    /**
     * Get QuestionID value
     * @return string|null
     */
    public function getQuestionID()
    {
        return $this->QuestionID;
    }
    /**
     * Set QuestionID value
     * @param string $_questionID the QuestionID
     * @return string
     */
    public function setQuestionID($_questionID)
    {
        return ($this->QuestionID = $_questionID);
    }
    /**
     * Get MultipleCorrectAnswers value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getMultipleCorrectAnswers()
    {
        return $this->MultipleCorrectAnswers;
    }
    /**
     * Set MultipleCorrectAnswers value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_multipleCorrectAnswers the MultipleCorrectAnswers
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setMultipleCorrectAnswers($_multipleCorrectAnswers)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_multipleCorrectAnswers))
        {
            return false;
        }
        return ($this->MultipleCorrectAnswers = $_multipleCorrectAnswers);
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
     * Get QuestionInfo value
     * @return string|null
     */
    public function getQuestionInfo()
    {
        return $this->QuestionInfo;
    }
    /**
     * Set QuestionInfo value
     * @param string $_questionInfo the QuestionInfo
     * @return string
     */
    public function setQuestionInfo($_questionInfo)
    {
        return ($this->QuestionInfo = $_questionInfo);
    }
    /**
     * Get Answers value
     * @return MicrobiltCriminalReportStructAnswers_Type|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param MicrobiltCriminalReportStructAnswers_Type $_answers the Answers
     * @return MicrobiltCriminalReportStructAnswers_Type
     */
    public function setAnswers($_answers)
    {
        return ($this->Answers = $_answers);
    }
    /**
     * Get SubQuestions value
     * @return MicrobiltCriminalReportStructSubQuestions_Type|null
     */
    public function getSubQuestions()
    {
        return $this->SubQuestions;
    }
    /**
     * Set SubQuestions value
     * @param MicrobiltCriminalReportStructSubQuestions_Type $_subQuestions the SubQuestions
     * @return MicrobiltCriminalReportStructSubQuestions_Type
     */
    public function setSubQuestions($_subQuestions)
    {
        return ($this->SubQuestions = $_subQuestions);
    }
    /**
     * Get InvalidAnswers value
     * @return MicrobiltCriminalReportStructInvalidAnswers_Type|null
     */
    public function getInvalidAnswers()
    {
        return $this->InvalidAnswers;
    }
    /**
     * Set InvalidAnswers value
     * @param MicrobiltCriminalReportStructInvalidAnswers_Type $_invalidAnswers the InvalidAnswers
     * @return MicrobiltCriminalReportStructInvalidAnswers_Type
     */
    public function setInvalidAnswers($_invalidAnswers)
    {
        return ($this->InvalidAnswers = $_invalidAnswers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructQuestionsAnswers_Type
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
