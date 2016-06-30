<?php
/**
 * File for class MicrobiltCriminalReportStructExchangeRateInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructExchangeRateInfo_Type originally named ExchangeRateInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructExchangeRateInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ResearchDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ResearchDt;
    /**
     * The CurCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CurCode;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ExchangeRateInfo_Type
     * @see parent::__construct()
     * @param date $_researchDt
     * @param string $_curCode
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructExchangeRateInfo_Type
     */
    public function __construct($_researchDt = NULL,$_curCode = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ResearchDt'=>$_researchDt,'CurCode'=>$_curCode,'Message'=>$_message),false);
    }
    /**
     * Get ResearchDt value
     * @return date|null
     */
    public function getResearchDt()
    {
        return $this->ResearchDt;
    }
    /**
     * Set ResearchDt value
     * @param date $_researchDt the ResearchDt
     * @return date
     */
    public function setResearchDt($_researchDt)
    {
        return ($this->ResearchDt = $_researchDt);
    }
    /**
     * Get CurCode value
     * @return string|null
     */
    public function getCurCode()
    {
        return $this->CurCode;
    }
    /**
     * Set CurCode value
     * @param string $_curCode the CurCode
     * @return string
     */
    public function setCurCode($_curCode)
    {
        return ($this->CurCode = $_curCode);
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
     * @return MicrobiltCriminalReportStructExchangeRateInfo_Type
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
