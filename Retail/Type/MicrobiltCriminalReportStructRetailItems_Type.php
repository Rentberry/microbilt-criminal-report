<?php
/**
 * File for class MicrobiltCriminalReportStructRetailItems_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructRetailItems_Type originally named RetailItems_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructRetailItems_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RetailItemSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRetailItemSummary_Type
     */
    public $RetailItemSummary;
    /**
     * The RetailItemDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRetailItemDetail_Type
     */
    public $RetailItemDetail;
    /**
     * Constructor method for RetailItems_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructRetailItemSummary_Type $_retailItemSummary
     * @param MicrobiltCriminalReportStructRetailItemDetail_Type $_retailItemDetail
     * @return MicrobiltCriminalReportStructRetailItems_Type
     */
    public function __construct($_retailItemSummary = NULL,$_retailItemDetail = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RetailItemSummary'=>$_retailItemSummary,'RetailItemDetail'=>$_retailItemDetail),false);
    }
    /**
     * Get RetailItemSummary value
     * @return MicrobiltCriminalReportStructRetailItemSummary_Type|null
     */
    public function getRetailItemSummary()
    {
        return $this->RetailItemSummary;
    }
    /**
     * Set RetailItemSummary value
     * @param MicrobiltCriminalReportStructRetailItemSummary_Type $_retailItemSummary the RetailItemSummary
     * @return MicrobiltCriminalReportStructRetailItemSummary_Type
     */
    public function setRetailItemSummary($_retailItemSummary)
    {
        return ($this->RetailItemSummary = $_retailItemSummary);
    }
    /**
     * Get RetailItemDetail value
     * @return MicrobiltCriminalReportStructRetailItemDetail_Type|null
     */
    public function getRetailItemDetail()
    {
        return $this->RetailItemDetail;
    }
    /**
     * Set RetailItemDetail value
     * @param MicrobiltCriminalReportStructRetailItemDetail_Type $_retailItemDetail the RetailItemDetail
     * @return MicrobiltCriminalReportStructRetailItemDetail_Type
     */
    public function setRetailItemDetail($_retailItemDetail)
    {
        return ($this->RetailItemDetail = $_retailItemDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructRetailItems_Type
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
