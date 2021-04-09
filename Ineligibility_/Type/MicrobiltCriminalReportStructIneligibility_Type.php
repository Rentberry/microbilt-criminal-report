<?php
/**
 * File for class MicrobiltCriminalReportStructIneligibility_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructIneligibility_Type originally named Ineligibility_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructIneligibility_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Grounds
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Grounds;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDateRange_Type
     */
    public $DateRange;
    /**
     * Constructor method for Ineligibility_Type
     * @see parent::__construct()
     * @param string $_grounds
     * @param MicrobiltCriminalReportStructDateRange_Type $_dateRange
     * @return MicrobiltCriminalReportStructIneligibility_Type
     */
    public function __construct($_grounds = NULL,$_dateRange = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Grounds'=>$_grounds,'DateRange'=>$_dateRange),false);
    }
    /**
     * Get Grounds value
     * @return string|null
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }
    /**
     * Set Grounds value
     * @param string $_grounds the Grounds
     * @return string
     */
    public function setGrounds($_grounds)
    {
        return ($this->Grounds = $_grounds);
    }
    /**
     * Get DateRange value
     * @return MicrobiltCriminalReportStructDateRange_Type|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param MicrobiltCriminalReportStructDateRange_Type $_dateRange the DateRange
     * @return MicrobiltCriminalReportStructDateRange_Type
     */
    public function setDateRange($_dateRange)
    {
        return ($this->DateRange = $_dateRange);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructIneligibility_Type
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
