<?php
/**
 * File for class MicrobiltCriminalReportStructGetRawReport
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGetRawReport originally named GetRawReport
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGetRawReport extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The guid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $guid;
    /**
     * Constructor method for GetRawReport
     * @see parent::__construct()
     * @param string $_guid
     * @return MicrobiltCriminalReportStructGetRawReport
     */
    public function __construct($_guid = NULL)
    {
        parent::__construct(array('guid'=>$_guid),false);
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid()
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $_guid the guid
     * @return string
     */
    public function setGuid($_guid)
    {
        return ($this->guid = $_guid);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGetRawReport
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
