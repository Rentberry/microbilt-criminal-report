<?php
/**
 * File for class MicrobiltCriminalReportStructAuthConfig_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAuthConfig_Type originally named AuthConfig_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAuthConfig_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The NumOfQuestions
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumOfQuestions;
    /**
     * The QuestionConfig
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructQuestionConfig_Type
     */
    public $QuestionConfig;
    /**
     * Constructor method for AuthConfig_Type
     * @see parent::__construct()
     * @param long $_numOfQuestions
     * @param MicrobiltCriminalReportStructQuestionConfig_Type $_questionConfig
     * @return MicrobiltCriminalReportStructAuthConfig_Type
     */
    public function __construct($_numOfQuestions = NULL,$_questionConfig = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('NumOfQuestions'=>$_numOfQuestions,'QuestionConfig'=>$_questionConfig),false);
    }
    /**
     * Get NumOfQuestions value
     * @return long|null
     */
    public function getNumOfQuestions()
    {
        return $this->NumOfQuestions;
    }
    /**
     * Set NumOfQuestions value
     * @param long $_numOfQuestions the NumOfQuestions
     * @return long
     */
    public function setNumOfQuestions($_numOfQuestions)
    {
        return ($this->NumOfQuestions = $_numOfQuestions);
    }
    /**
     * Get QuestionConfig value
     * @return MicrobiltCriminalReportStructQuestionConfig_Type|null
     */
    public function getQuestionConfig()
    {
        return $this->QuestionConfig;
    }
    /**
     * Set QuestionConfig value
     * @param MicrobiltCriminalReportStructQuestionConfig_Type $_questionConfig the QuestionConfig
     * @return MicrobiltCriminalReportStructQuestionConfig_Type
     */
    public function setQuestionConfig($_questionConfig)
    {
        return ($this->QuestionConfig = $_questionConfig);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAuthConfig_Type
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
