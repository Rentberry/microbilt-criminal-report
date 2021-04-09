<?php
/**
 * File for class MicrobiltCriminalReportStructDataIndicators_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDataIndicators_Type originally named DataIndicators_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDataIndicators_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The IndValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $IndValue;
    /**
     * The IndName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IndName;
    /**
     * Constructor method for DataIndicators_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportEnumBoolean $_indValue
     * @param string $_indName
     * @return MicrobiltCriminalReportStructDataIndicators_Type
     */
    public function __construct($_indValue,$_indName = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('IndValue'=>$_indValue,'IndName'=>$_indName),false);
    }
    /**
     * Get IndValue value
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function getIndValue()
    {
        return $this->IndValue;
    }
    /**
     * Set IndValue value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_indValue the IndValue
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setIndValue($_indValue)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_indValue))
        {
            return false;
        }
        return ($this->IndValue = $_indValue);
    }
    /**
     * Get IndName value
     * @return string|null
     */
    public function getIndName()
    {
        return $this->IndName;
    }
    /**
     * Set IndName value
     * @param string $_indName the IndName
     * @return string
     */
    public function setIndName($_indName)
    {
        return ($this->IndName = $_indName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructDataIndicators_Type
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
