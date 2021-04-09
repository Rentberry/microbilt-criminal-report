<?php
/**
 * File for class MicrobiltCriminalReportStructAdditionalABAs_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAdditionalABAs_Type originally named AdditionalABAs_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAdditionalABAs_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ABANum
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $ABANum;
    /**
     * Constructor method for AdditionalABAs_Type
     * @see parent::__construct()
     * @param string $_aBANum
     * @return MicrobiltCriminalReportStructAdditionalABAs_Type
     */
    public function __construct($_aBANum = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ABANum'=>$_aBANum),false);
    }
    /**
     * Get ABANum value
     * @return string|null
     */
    public function getABANum()
    {
        return $this->ABANum;
    }
    /**
     * Set ABANum value
     * @param string $_aBANum the ABANum
     * @return string
     */
    public function setABANum($_aBANum)
    {
        return ($this->ABANum = $_aBANum);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAdditionalABAs_Type
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
