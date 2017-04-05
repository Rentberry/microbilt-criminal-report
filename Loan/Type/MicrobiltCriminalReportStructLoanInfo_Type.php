<?php
/**
 * File for class MicrobiltCriminalReportStructLoanInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLoanInfo_Type originally named LoanInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLoanInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The FilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingDt;
    /**
     * The SecuredAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $SecuredAmt;
    /**
     * The MaturityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MaturityDt;
    /**
     * The LoanParams
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructLoanParams_Type
     */
    public $LoanParams;
    /**
     * Constructor method for LoanInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param string $_filingDt
     * @param float $_securedAmt
     * @param string $_maturityDt
     * @param MicrobiltCriminalReportStructLoanParams_Type $_loanParams
     * @return MicrobiltCriminalReportStructLoanInfo_Type
     */
    public function __construct($_orgInfo = NULL,$_filingDt = NULL,$_securedAmt = NULL,$_maturityDt = NULL,$_loanParams = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'FilingDt'=>$_filingDt,'SecuredAmt'=>$_securedAmt,'MaturityDt'=>$_maturityDt,'LoanParams'=>$_loanParams),false);
    }
    /**
     * Get OrgInfo value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get FilingDt value
     * @return string|null
     */
    public function getFilingDt()
    {
        return $this->FilingDt;
    }
    /**
     * Set FilingDt value
     * @param string $_filingDt the FilingDt
     * @return string
     */
    public function setFilingDt($_filingDt)
    {
        return ($this->FilingDt = $_filingDt);
    }
    /**
     * Get SecuredAmt value
     * @return float|null
     */
    public function getSecuredAmt()
    {
        return $this->SecuredAmt;
    }
    /**
     * Set SecuredAmt value
     * @param float $_securedAmt the SecuredAmt
     * @return float
     */
    public function setSecuredAmt($_securedAmt)
    {
        return ($this->SecuredAmt = $_securedAmt);
    }
    /**
     * Get MaturityDt value
     * @return string|null
     */
    public function getMaturityDt()
    {
        return $this->MaturityDt;
    }
    /**
     * Set MaturityDt value
     * @param string $_maturityDt the MaturityDt
     * @return string
     */
    public function setMaturityDt($_maturityDt)
    {
        return ($this->MaturityDt = $_maturityDt);
    }
    /**
     * Get LoanParams value
     * @return MicrobiltCriminalReportStructLoanParams_Type|null
     */
    public function getLoanParams()
    {
        return $this->LoanParams;
    }
    /**
     * Set LoanParams value
     * @param MicrobiltCriminalReportStructLoanParams_Type $_loanParams the LoanParams
     * @return MicrobiltCriminalReportStructLoanParams_Type
     */
    public function setLoanParams($_loanParams)
    {
        return ($this->LoanParams = $_loanParams);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLoanInfo_Type
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
