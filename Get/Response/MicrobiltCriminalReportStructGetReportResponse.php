<?php
/**
 * File for class MicrobiltCriminalReportStructGetReportResponse
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGetReportResponse originally named GetReportResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGetReportResponse extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The GetReportResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public $GetReportResult;
    /**
     * Constructor method for GetReportResponse
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type $_getReportResult
     * @return MicrobiltCriminalReportStructGetReportResponse
     */
    public function __construct($_getReportResult = NULL)
    {
        parent::__construct(array('GetReportResult'=>$_getReportResult),false);
    }
    /**
     * Get GetReportResult value
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type|null
     */
    public function getGetReportResult()
    {
        return $this->GetReportResult;
    }
    /**
     * Set GetReportResult value
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type $_getReportResult the GetReportResult
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public function setGetReportResult($_getReportResult)
    {
        return ($this->GetReportResult = $_getReportResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGetReportResponse
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
