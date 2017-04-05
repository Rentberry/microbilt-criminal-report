<?php
/**
 * File for class MicrobiltCriminalReportStructAggregate
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAggregate originally named Aggregate
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
abstract class MicrobiltCriminalReportStructAggregate extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The EffDt
     * @var string
     */
    public $EffDt;
    /**
     * Constructor method for Aggregate
     * @see parent::__construct()
     * @param string $_source
     * @param string $_effDt
     * @return MicrobiltCriminalReportStructAggregate
     */
    public function __construct($_source = NULL,$_effDt = NULL)
    {
        parent::__construct(array('Source'=>$_source,'EffDt'=>$_effDt),false);
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $_source the Source
     * @return string
     */
    public function setSource($_source)
    {
        return ($this->Source = $_source);
    }
    /**
     * Get EffDt value
     * @return string|null
     */
    public function getEffDt()
    {
        return $this->EffDt;
    }
    /**
     * Set EffDt value
     * @param string $_effDt the EffDt
     * @return string
     */
    public function setEffDt($_effDt)
    {
        return ($this->EffDt = $_effDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAggregate
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
