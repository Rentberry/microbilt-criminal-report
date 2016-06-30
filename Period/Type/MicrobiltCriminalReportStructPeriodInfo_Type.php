<?php
/**
 * File for class MicrobiltCriminalReportStructPeriodInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructPeriodInfo_Type originally named PeriodInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructPeriodInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PeriodIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $PeriodIndicator;
    /**
     * The PeriodDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $PeriodDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for PeriodInfo_Type
     * @see parent::__construct()
     * @param long $_periodIndicator
     * @param date $_periodDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructPeriodInfo_Type
     */
    public function __construct($_periodIndicator = NULL,$_periodDt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PeriodIndicator'=>$_periodIndicator,'PeriodDt'=>$_periodDt,'Message'=>$_message),false);
    }
    /**
     * Get PeriodIndicator value
     * @return long|null
     */
    public function getPeriodIndicator()
    {
        return $this->PeriodIndicator;
    }
    /**
     * Set PeriodIndicator value
     * @param long $_periodIndicator the PeriodIndicator
     * @return long
     */
    public function setPeriodIndicator($_periodIndicator)
    {
        return ($this->PeriodIndicator = $_periodIndicator);
    }
    /**
     * Get PeriodDt value
     * @return date|null
     */
    public function getPeriodDt()
    {
        return $this->PeriodDt;
    }
    /**
     * Set PeriodDt value
     * @param date $_periodDt the PeriodDt
     * @return date
     */
    public function setPeriodDt($_periodDt)
    {
        return ($this->PeriodDt = $_periodDt);
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
     * @return MicrobiltCriminalReportStructPeriodInfo_Type
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
