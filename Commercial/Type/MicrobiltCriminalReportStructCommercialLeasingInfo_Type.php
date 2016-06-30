<?php
/**
 * File for class MicrobiltCriminalReportStructCommercialLeasingInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCommercialLeasingInfo_Type originally named CommercialLeasingInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCommercialLeasingInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The LeasingCompany
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $LeasingCompany;
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
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The PmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $PmtType;
    /**
     * The ProductType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProductType;
    /**
     * The LeaseType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LeaseType;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $DisputeInd;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Comments;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CommercialLeasingInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_leasingCompany
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates
     * @param string $_terms
     * @param string $_pmtFreq
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_pmtType
     * @param string $_productType
     * @param string $_leaseType
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd
     * @param string $_comments
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructCommercialLeasingInfo_Type
     */
    public function __construct($_leasingCompany = NULL,$_commercialAmounts = NULL,$_commercialDates = NULL,$_terms = NULL,$_pmtFreq = NULL,$_pmtType = NULL,$_productType = NULL,$_leaseType = NULL,$_disputeInd = NULL,$_comments = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('LeasingCompany'=>$_leasingCompany,'CommercialAmounts'=>$_commercialAmounts,'CommercialDates'=>$_commercialDates,'Terms'=>$_terms,'PmtFreq'=>$_pmtFreq,'PmtType'=>$_pmtType,'ProductType'=>$_productType,'LeaseType'=>$_leaseType,'DisputeInd'=>$_disputeInd,'Comments'=>$_comments,'Message'=>$_message),false);
    }
    /**
     * Get LeasingCompany value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getLeasingCompany()
    {
        return $this->LeasingCompany;
    }
    /**
     * Set LeasingCompany value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_leasingCompany the LeasingCompany
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setLeasingCompany($_leasingCompany)
    {
        return ($this->LeasingCompany = $_leasingCompany);
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
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get PmtFreq value
     * @return string|null
     */
    public function getPmtFreq()
    {
        return $this->PmtFreq;
    }
    /**
     * Set PmtFreq value
     * @param string $_pmtFreq the PmtFreq
     * @return string
     */
    public function setPmtFreq($_pmtFreq)
    {
        return ($this->PmtFreq = $_pmtFreq);
    }
    /**
     * Get PmtType value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getPmtType()
    {
        return $this->PmtType;
    }
    /**
     * Set PmtType value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_pmtType the PmtType
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setPmtType($_pmtType)
    {
        return ($this->PmtType = $_pmtType);
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $_productType the ProductType
     * @return string
     */
    public function setProductType($_productType)
    {
        return ($this->ProductType = $_productType);
    }
    /**
     * Get LeaseType value
     * @return string|null
     */
    public function getLeaseType()
    {
        return $this->LeaseType;
    }
    /**
     * Set LeaseType value
     * @param string $_leaseType the LeaseType
     * @return string
     */
    public function setLeaseType($_leaseType)
    {
        return ($this->LeaseType = $_leaseType);
    }
    /**
     * Get DisputeInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $_comments the Comments
     * @return string
     */
    public function setComments($_comments)
    {
        return ($this->Comments = $_comments);
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
     * @return MicrobiltCriminalReportStructCommercialLeasingInfo_Type
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
