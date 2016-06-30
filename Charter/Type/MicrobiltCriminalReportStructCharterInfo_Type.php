<?php
/**
 * File for class MicrobiltCriminalReportStructCharterInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCharterInfo_Type originally named CharterInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCharterInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The CharterNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CharterNum;
    /**
     * The CharterTermYears
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $CharterTermYears;
    /**
     * The CharterTermDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $CharterTermDt;
    /**
     * Constructor method for CharterInfo_Type
     * @see parent::__construct()
     * @param string $_charterNum
     * @param long $_charterTermYears
     * @param date $_charterTermDt
     * @return MicrobiltCriminalReportStructCharterInfo_Type
     */
    public function __construct($_charterNum = NULL,$_charterTermYears = NULL,$_charterTermDt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('CharterNum'=>$_charterNum,'CharterTermYears'=>$_charterTermYears,'CharterTermDt'=>$_charterTermDt),false);
    }
    /**
     * Get CharterNum value
     * @return string|null
     */
    public function getCharterNum()
    {
        return $this->CharterNum;
    }
    /**
     * Set CharterNum value
     * @param string $_charterNum the CharterNum
     * @return string
     */
    public function setCharterNum($_charterNum)
    {
        return ($this->CharterNum = $_charterNum);
    }
    /**
     * Get CharterTermYears value
     * @return long|null
     */
    public function getCharterTermYears()
    {
        return $this->CharterTermYears;
    }
    /**
     * Set CharterTermYears value
     * @param long $_charterTermYears the CharterTermYears
     * @return long
     */
    public function setCharterTermYears($_charterTermYears)
    {
        return ($this->CharterTermYears = $_charterTermYears);
    }
    /**
     * Get CharterTermDt value
     * @return date|null
     */
    public function getCharterTermDt()
    {
        return $this->CharterTermDt;
    }
    /**
     * Set CharterTermDt value
     * @param date $_charterTermDt the CharterTermDt
     * @return date
     */
    public function setCharterTermDt($_charterTermDt)
    {
        return ($this->CharterTermDt = $_charterTermDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCharterInfo_Type
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
