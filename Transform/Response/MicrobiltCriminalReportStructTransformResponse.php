<?php
/**
 * File for class MicrobiltCriminalReportStructTransformResponse
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructTransformResponse originally named TransformResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructTransformResponse extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The TransformResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransformResult;
    /**
     * Constructor method for TransformResponse
     * @see parent::__construct()
     * @param string $_transformResult
     * @return MicrobiltCriminalReportStructTransformResponse
     */
    public function __construct($_transformResult = NULL)
    {
        parent::__construct(array('TransformResult'=>$_transformResult),false);
    }
    /**
     * Get TransformResult value
     * @return string|null
     */
    public function getTransformResult()
    {
        return $this->TransformResult;
    }
    /**
     * Set TransformResult value
     * @param string $_transformResult the TransformResult
     * @return string
     */
    public function setTransformResult($_transformResult)
    {
        return ($this->TransformResult = $_transformResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructTransformResponse
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
