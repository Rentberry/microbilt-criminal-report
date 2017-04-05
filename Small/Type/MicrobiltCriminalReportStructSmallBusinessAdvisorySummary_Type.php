<?php
/**
 * File for class MicrobiltCriminalReportStructSmallBusinessAdvisorySummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSmallBusinessAdvisorySummary_Type originally named SmallBusinessAdvisorySummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSmallBusinessAdvisorySummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The BirthDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthDt;
    /**
     * The DwellingStructureType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DwellingStructureType;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructScore_Type
     */
    public $Score;
    /**
     * Constructor method for SmallBusinessAdvisorySummary_Type
     * @see parent::__construct()
     * @param string $_birthDt
     * @param string $_dwellingStructureType
     * @param MicrobiltCriminalReportStructScore_Type $_score
     * @return MicrobiltCriminalReportStructSmallBusinessAdvisorySummary_Type
     */
    public function __construct($_birthDt = NULL,$_dwellingStructureType = NULL,$_score = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('BirthDt'=>$_birthDt,'DwellingStructureType'=>$_dwellingStructureType,'Score'=>$_score),false);
    }
    /**
     * Get BirthDt value
     * @return string|null
     */
    public function getBirthDt()
    {
        return $this->BirthDt;
    }
    /**
     * Set BirthDt value
     * @param string $_birthDt the BirthDt
     * @return string
     */
    public function setBirthDt($_birthDt)
    {
        return ($this->BirthDt = $_birthDt);
    }
    /**
     * Get DwellingStructureType value
     * @return string|null
     */
    public function getDwellingStructureType()
    {
        return $this->DwellingStructureType;
    }
    /**
     * Set DwellingStructureType value
     * @param string $_dwellingStructureType the DwellingStructureType
     * @return string
     */
    public function setDwellingStructureType($_dwellingStructureType)
    {
        return ($this->DwellingStructureType = $_dwellingStructureType);
    }
    /**
     * Get Score value
     * @return MicrobiltCriminalReportStructScore_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param MicrobiltCriminalReportStructScore_Type $_score the Score
     * @return MicrobiltCriminalReportStructScore_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructSmallBusinessAdvisorySummary_Type
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
