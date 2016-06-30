<?php
/**
 * File for class MicrobiltCriminalReportStructMapResponse
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructMapResponse originally named MapResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructMapResponse extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The MapResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public $MapResult;
    /**
     * Constructor method for MapResponse
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type $_mapResult
     * @return MicrobiltCriminalReportStructMapResponse
     */
    public function __construct($_mapResult = NULL)
    {
        parent::__construct(array('MapResult'=>$_mapResult),false);
    }
    /**
     * Get MapResult value
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type|null
     */
    public function getMapResult()
    {
        return $this->MapResult;
    }
    /**
     * Set MapResult value
     * @param MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type $_mapResult the MapResult
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public function setMapResult($_mapResult)
    {
        return ($this->MapResult = $_mapResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructMapResponse
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
