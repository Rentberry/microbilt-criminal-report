<?php
/**
 * File for class MicrobiltCriminalReportStructCorporateLinkageInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCorporateLinkageInfo_Type originally named CorporateLinkageInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCorporateLinkageInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The CorpLinkageSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCorpLinkageSummary_Type
     */
    public $CorpLinkageSummary;
    /**
     * The CorpLinkageListing
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $CorpLinkageListing;
    /**
     * Constructor method for CorporateLinkageInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCorpLinkageSummary_Type $_corpLinkageSummary
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_corpLinkageListing
     * @return MicrobiltCriminalReportStructCorporateLinkageInfo_Type
     */
    public function __construct($_corpLinkageSummary = NULL,$_corpLinkageListing = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('CorpLinkageSummary'=>$_corpLinkageSummary,'CorpLinkageListing'=>$_corpLinkageListing),false);
    }
    /**
     * Get CorpLinkageSummary value
     * @return MicrobiltCriminalReportStructCorpLinkageSummary_Type|null
     */
    public function getCorpLinkageSummary()
    {
        return $this->CorpLinkageSummary;
    }
    /**
     * Set CorpLinkageSummary value
     * @param MicrobiltCriminalReportStructCorpLinkageSummary_Type $_corpLinkageSummary the CorpLinkageSummary
     * @return MicrobiltCriminalReportStructCorpLinkageSummary_Type
     */
    public function setCorpLinkageSummary($_corpLinkageSummary)
    {
        return ($this->CorpLinkageSummary = $_corpLinkageSummary);
    }
    /**
     * Get CorpLinkageListing value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getCorpLinkageListing()
    {
        return $this->CorpLinkageListing;
    }
    /**
     * Set CorpLinkageListing value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_corpLinkageListing the CorpLinkageListing
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setCorpLinkageListing($_corpLinkageListing)
    {
        return ($this->CorpLinkageListing = $_corpLinkageListing);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCorporateLinkageInfo_Type
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
