<?php
/**
 * File for class MicrobiltCriminalReportStructGetReport
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGetReport originally named GetReport
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGetReport extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The inquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type
     */
    public $inquiry;
    /**
     * Constructor method for GetReport
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type $_inquiry
     * @return MicrobiltCriminalReportStructGetReport
     */
    public function __construct($_inquiry = NULL)
    {
        parent::__construct(array('inquiry'=>$_inquiry),false);
    }
    /**
     * Get inquiry value
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type|null
     */
    public function getInquiry()
    {
        return $this->inquiry;
    }
    /**
     * Set inquiry value
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type $_inquiry the inquiry
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type
     */
    public function setInquiry($_inquiry)
    {
        return ($this->inquiry = $_inquiry);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGetReport
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
