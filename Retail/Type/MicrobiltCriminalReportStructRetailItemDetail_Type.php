<?php
/**
 * File for class MicrobiltCriminalReportStructRetailItemDetail_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructRetailItemDetail_Type originally named RetailItemDetail_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructRetailItemDetail_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ABANum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ABANum;
    /**
     * The AccountNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AccountNum;
    /**
     * The DriversLicense
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructDriversLicense_Type
     */
    public $DriversLicense;
    /**
     * The MerchantName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MerchantName;
    /**
     * The CheckDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckDt;
    /**
     * The CheckNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckNum;
    /**
     * The CheckAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CheckAmt;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PaidDt;
    /**
     * The TransStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $TransStatus;
    /**
     * The InstitutionName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InstitutionName;
    /**
     * The PosOrNegInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PosOrNegInd;
    /**
     * Constructor method for RetailItemDetail_Type
     * @see parent::__construct()
     * @param string $_aBANum
     * @param string $_accountNum
     * @param MicrobiltCriminalReportStructDriversLicense_Type $_driversLicense
     * @param string $_merchantName
     * @param string $_checkDt
     * @param string $_checkNum
     * @param MicrobiltCriminalReportStructCurrencyAmount $_checkAmt
     * @param string $_paidDt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_transStatus
     * @param string $_institutionName
     * @param string $_posOrNegInd
     * @return MicrobiltCriminalReportStructRetailItemDetail_Type
     */
    public function __construct($_aBANum = NULL,$_accountNum = NULL,$_driversLicense = NULL,$_merchantName = NULL,$_checkDt = NULL,$_checkNum = NULL,$_checkAmt = NULL,$_paidDt = NULL,$_transStatus = NULL,$_institutionName = NULL,$_posOrNegInd = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ABANum'=>$_aBANum,'AccountNum'=>$_accountNum,'DriversLicense'=>$_driversLicense,'MerchantName'=>$_merchantName,'CheckDt'=>$_checkDt,'CheckNum'=>$_checkNum,'CheckAmt'=>$_checkAmt,'PaidDt'=>$_paidDt,'TransStatus'=>$_transStatus,'InstitutionName'=>$_institutionName,'PosOrNegInd'=>$_posOrNegInd),false);
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
     * Get AccountNum value
     * @return string|null
     */
    public function getAccountNum()
    {
        return $this->AccountNum;
    }
    /**
     * Set AccountNum value
     * @param string $_accountNum the AccountNum
     * @return string
     */
    public function setAccountNum($_accountNum)
    {
        return ($this->AccountNum = $_accountNum);
    }
    /**
     * Get DriversLicense value
     * @return MicrobiltCriminalReportStructDriversLicense_Type|null
     */
    public function getDriversLicense()
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param MicrobiltCriminalReportStructDriversLicense_Type $_driversLicense the DriversLicense
     * @return MicrobiltCriminalReportStructDriversLicense_Type
     */
    public function setDriversLicense($_driversLicense)
    {
        return ($this->DriversLicense = $_driversLicense);
    }
    /**
     * Get MerchantName value
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->MerchantName;
    }
    /**
     * Set MerchantName value
     * @param string $_merchantName the MerchantName
     * @return string
     */
    public function setMerchantName($_merchantName)
    {
        return ($this->MerchantName = $_merchantName);
    }
    /**
     * Get CheckDt value
     * @return string|null
     */
    public function getCheckDt()
    {
        return $this->CheckDt;
    }
    /**
     * Set CheckDt value
     * @param string $_checkDt the CheckDt
     * @return string
     */
    public function setCheckDt($_checkDt)
    {
        return ($this->CheckDt = $_checkDt);
    }
    /**
     * Get CheckNum value
     * @return string|null
     */
    public function getCheckNum()
    {
        return $this->CheckNum;
    }
    /**
     * Set CheckNum value
     * @param string $_checkNum the CheckNum
     * @return string
     */
    public function setCheckNum($_checkNum)
    {
        return ($this->CheckNum = $_checkNum);
    }
    /**
     * Get CheckAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCheckAmt()
    {
        return $this->CheckAmt;
    }
    /**
     * Set CheckAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_checkAmt the CheckAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCheckAmt($_checkAmt)
    {
        return ($this->CheckAmt = $_checkAmt);
    }
    /**
     * Get PaidDt value
     * @return string|null
     */
    public function getPaidDt()
    {
        return $this->PaidDt;
    }
    /**
     * Set PaidDt value
     * @param string $_paidDt the PaidDt
     * @return string
     */
    public function setPaidDt($_paidDt)
    {
        return ($this->PaidDt = $_paidDt);
    }
    /**
     * Get TransStatus value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getTransStatus()
    {
        return $this->TransStatus;
    }
    /**
     * Set TransStatus value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_transStatus the TransStatus
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setTransStatus($_transStatus)
    {
        return ($this->TransStatus = $_transStatus);
    }
    /**
     * Get InstitutionName value
     * @return string|null
     */
    public function getInstitutionName()
    {
        return $this->InstitutionName;
    }
    /**
     * Set InstitutionName value
     * @param string $_institutionName the InstitutionName
     * @return string
     */
    public function setInstitutionName($_institutionName)
    {
        return ($this->InstitutionName = $_institutionName);
    }
    /**
     * Get PosOrNegInd value
     * @return string|null
     */
    public function getPosOrNegInd()
    {
        return $this->PosOrNegInd;
    }
    /**
     * Set PosOrNegInd value
     * @param string $_posOrNegInd the PosOrNegInd
     * @return string
     */
    public function setPosOrNegInd($_posOrNegInd)
    {
        return ($this->PosOrNegInd = $_posOrNegInd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructRetailItemDetail_Type
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
