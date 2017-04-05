<?php
/**
 * File for class MicrobiltCriminalReportStructChargeOff_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructChargeOff_Type originally named ChargeOff_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructChargeOff_Type extends MicrobiltCriminalReportStructAggregate
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
     * The RecoveryType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecoveryType;
    /**
     * The RecoveryDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecoveryDt;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The RefNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RefNum;
    /**
     * The PmtAgreement
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPmtAgreement_Type
     */
    public $PmtAgreement;
    /**
     * Constructor method for ChargeOff_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param string $_recoveryType
     * @param string $_recoveryDt
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param string $_refNum
     * @param MicrobiltCriminalReportStructPmtAgreement_Type $_pmtAgreement
     * @return MicrobiltCriminalReportStructChargeOff_Type
     */
    public function __construct($_orgInfo = NULL,$_recoveryType = NULL,$_recoveryDt = NULL,$_personInfo = NULL,$_refNum = NULL,$_pmtAgreement = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'RecoveryType'=>$_recoveryType,'RecoveryDt'=>$_recoveryDt,'PersonInfo'=>$_personInfo,'RefNum'=>$_refNum,'PmtAgreement'=>$_pmtAgreement),false);
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
     * Get RecoveryType value
     * @return string|null
     */
    public function getRecoveryType()
    {
        return $this->RecoveryType;
    }
    /**
     * Set RecoveryType value
     * @param string $_recoveryType the RecoveryType
     * @return string
     */
    public function setRecoveryType($_recoveryType)
    {
        return ($this->RecoveryType = $_recoveryType);
    }
    /**
     * Get RecoveryDt value
     * @return string|null
     */
    public function getRecoveryDt()
    {
        return $this->RecoveryDt;
    }
    /**
     * Set RecoveryDt value
     * @param string $_recoveryDt the RecoveryDt
     * @return string
     */
    public function setRecoveryDt($_recoveryDt)
    {
        return ($this->RecoveryDt = $_recoveryDt);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltCriminalReportStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Get RefNum value
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param string $_refNum the RefNum
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get PmtAgreement value
     * @return MicrobiltCriminalReportStructPmtAgreement_Type|null
     */
    public function getPmtAgreement()
    {
        return $this->PmtAgreement;
    }
    /**
     * Set PmtAgreement value
     * @param MicrobiltCriminalReportStructPmtAgreement_Type $_pmtAgreement the PmtAgreement
     * @return MicrobiltCriminalReportStructPmtAgreement_Type
     */
    public function setPmtAgreement($_pmtAgreement)
    {
        return ($this->PmtAgreement = $_pmtAgreement);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructChargeOff_Type
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
