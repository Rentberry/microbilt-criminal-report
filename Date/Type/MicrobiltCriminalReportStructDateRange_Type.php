<?php
/**
 * File for class MicrobiltCriminalReportStructDateRange_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDateRange_Type originally named DateRange_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDateRange_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $StartDt;
    /**
     * The EndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $EndDt;
    /**
     * Constructor method for DateRange_Type
     * @see parent::__construct()
     * @param string $_startDt
     * @param string $_endDt
     * @return MicrobiltCriminalReportStructDateRange_Type
     */
    public function __construct($_startDt,$_endDt)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('StartDt'=>$_startDt,'EndDt'=>$_endDt),false);
    }
    /**
     * Get StartDt value
     * @return string
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param string $_startDt the StartDt
     * @return string
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
    }
    /**
     * Get EndDt value
     * @return string
     */
    public function getEndDt()
    {
        return $this->EndDt;
    }
    /**
     * Set EndDt value
     * @param string $_endDt the EndDt
     * @return string
     */
    public function setEndDt($_endDt)
    {
        return ($this->EndDt = $_endDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructDateRange_Type
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
