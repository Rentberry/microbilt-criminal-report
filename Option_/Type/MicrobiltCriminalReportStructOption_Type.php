<?php
/**
 * File for class MicrobiltCriminalReportStructOption_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructOption_Type originally named Option_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructOption_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OptionValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $OptionValue;
    /**
     * The OptionName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OptionName;
    /**
     * Constructor method for Option_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportEnumBoolean $_optionValue
     * @param string $_optionName
     * @return MicrobiltCriminalReportStructOption_Type
     */
    public function __construct($_optionValue,$_optionName = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OptionValue'=>$_optionValue,'OptionName'=>$_optionName),false);
    }
    /**
     * Get OptionValue value
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function getOptionValue()
    {
        return $this->OptionValue;
    }
    /**
     * Set OptionValue value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_optionValue the OptionValue
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setOptionValue($_optionValue)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_optionValue))
        {
            return false;
        }
        return ($this->OptionValue = $_optionValue);
    }
    /**
     * Get OptionName value
     * @return string|null
     */
    public function getOptionName()
    {
        return $this->OptionName;
    }
    /**
     * Set OptionName value
     * @param string $_optionName the OptionName
     * @return string
     */
    public function setOptionName($_optionName)
    {
        return ($this->OptionName = $_optionName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructOption_Type
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
