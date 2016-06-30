<?php
/**
 * File for class MicrobiltCriminalReportStructCommercialExecutiveSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCommercialExecutiveSummary_Type originally named CommercialExecutiveSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCommercialExecutiveSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The IndustryPmtComparison
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $IndustryPmtComparison;
    /**
     * The PmtTrendInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $PmtTrendInd;
    /**
     * The IndustryDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IndustryDescription;
    /**
     * The CommonPmtTerms
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $CommonPmtTerms;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CommercialExecutiveSummary_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_industryPmtComparison
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_pmtTrendInd
     * @param string $_industryDescription
     * @param string $_commonPmtTerms
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructCommercialExecutiveSummary_Type
     */
    public function __construct($_commercialAmounts = NULL,$_commercialDates = NULL,$_industryPmtComparison = NULL,$_pmtTrendInd = NULL,$_industryDescription = NULL,$_commonPmtTerms = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('CommercialAmounts'=>$_commercialAmounts,'CommercialDates'=>$_commercialDates,'IndustryPmtComparison'=>$_industryPmtComparison,'PmtTrendInd'=>$_pmtTrendInd,'IndustryDescription'=>$_industryDescription,'CommonPmtTerms'=>$_commonPmtTerms,'Message'=>$_message),false);
    }
    /**
     * Get CommercialAmounts value
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get CommercialDates value
     * @return MicrobiltCriminalReportStructCommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates the CommercialDates
     * @return MicrobiltCriminalReportStructCommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get IndustryPmtComparison value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getIndustryPmtComparison()
    {
        return $this->IndustryPmtComparison;
    }
    /**
     * Set IndustryPmtComparison value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_industryPmtComparison the IndustryPmtComparison
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setIndustryPmtComparison($_industryPmtComparison)
    {
        return ($this->IndustryPmtComparison = $_industryPmtComparison);
    }
    /**
     * Get PmtTrendInd value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getPmtTrendInd()
    {
        return $this->PmtTrendInd;
    }
    /**
     * Set PmtTrendInd value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_pmtTrendInd the PmtTrendInd
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setPmtTrendInd($_pmtTrendInd)
    {
        return ($this->PmtTrendInd = $_pmtTrendInd);
    }
    /**
     * Get IndustryDescription value
     * @return string|null
     */
    public function getIndustryDescription()
    {
        return $this->IndustryDescription;
    }
    /**
     * Set IndustryDescription value
     * @param string $_industryDescription the IndustryDescription
     * @return string
     */
    public function setIndustryDescription($_industryDescription)
    {
        return ($this->IndustryDescription = $_industryDescription);
    }
    /**
     * Get CommonPmtTerms value
     * @return string|null
     */
    public function getCommonPmtTerms()
    {
        return $this->CommonPmtTerms;
    }
    /**
     * Set CommonPmtTerms value
     * @param string $_commonPmtTerms the CommonPmtTerms
     * @return string
     */
    public function setCommonPmtTerms($_commonPmtTerms)
    {
        return ($this->CommonPmtTerms = $_commonPmtTerms);
    }
    /**
     * Get Message value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltCriminalReportStructMessage_Type $_message the Message
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCommercialExecutiveSummary_Type
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
