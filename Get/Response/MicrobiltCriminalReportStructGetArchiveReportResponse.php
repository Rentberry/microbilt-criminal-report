<?php
/**
 * File for class MicrobiltCriminalReportStructGetArchiveReportResponse
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGetArchiveReportResponse originally named GetArchiveReportResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGetArchiveReportResponse extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The GetArchiveReportResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public $GetArchiveReportResult;
    /**
     * Constructor method for GetArchiveReportResponse
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type $_getArchiveReportResult
     * @return MicrobiltCriminalReportStructGetArchiveReportResponse
     */
    public function __construct($_getArchiveReportResult = NULL)
    {
        parent::__construct(array('GetArchiveReportResult'=>$_getArchiveReportResult),false);
    }
    /**
     * Get GetArchiveReportResult value
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type|null
     */
    public function getGetArchiveReportResult()
    {
        return $this->GetArchiveReportResult;
    }
    /**
     * Set GetArchiveReportResult value
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type $_getArchiveReportResult the GetArchiveReportResult
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public function setGetArchiveReportResult($_getArchiveReportResult)
    {
        return ($this->GetArchiveReportResult = $_getArchiveReportResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGetArchiveReportResponse
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
