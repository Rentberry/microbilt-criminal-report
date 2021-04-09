<?php
/**
 * File for class MicrobiltCriminalReportStructMinMaxRange_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructMinMaxRange_Type originally named MinMaxRange_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructMinMaxRange_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MinRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $MinRange;
    /**
     * The MaxRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $MaxRange;
    /**
     * Constructor method for MinMaxRange_Type
     * @see parent::__construct()
     * @param int $_minRange
     * @param int $_maxRange
     * @return MicrobiltCriminalReportStructMinMaxRange_Type
     */
    public function __construct($_minRange,$_maxRange)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MinRange'=>$_minRange,'MaxRange'=>$_maxRange),false);
    }
    /**
     * Get MinRange value
     * @return int
     */
    public function getMinRange()
    {
        return $this->MinRange;
    }
    /**
     * Set MinRange value
     * @param int $_minRange the MinRange
     * @return int
     */
    public function setMinRange($_minRange)
    {
        return ($this->MinRange = $_minRange);
    }
    /**
     * Get MaxRange value
     * @return int
     */
    public function getMaxRange()
    {
        return $this->MaxRange;
    }
    /**
     * Set MaxRange value
     * @param int $_maxRange the MaxRange
     * @return int
     */
    public function setMaxRange($_maxRange)
    {
        return ($this->MaxRange = $_maxRange);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructMinMaxRange_Type
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
