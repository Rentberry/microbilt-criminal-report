<?php
/**
 * File for class MicrobiltCriminalReportStructAccountClosureDetail_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAccountClosureDetail_Type originally named AccountClosureDetail_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAccountClosureDetail_Type extends MicrobiltCriminalReportStructAggregate
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
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClosedDt;
    /**
     * The ReasonCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReasonCode;
    /**
     * The InstitutionName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InstitutionName;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateProv;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PostalCode;
    /**
     * The ClosureAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ClosureAmt;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PaidDt;
    /**
     * The ConsumerDispute
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructConsumerStatement_Type
     */
    public $ConsumerDispute;
    /**
     * Constructor method for AccountClosureDetail_Type
     * @see parent::__construct()
     * @param string $_aBANum
     * @param string $_accountNum
     * @param string $_closedDt
     * @param string $_reasonCode
     * @param string $_institutionName
     * @param string $_stateProv
     * @param string $_postalCode
     * @param MicrobiltCriminalReportStructCurrencyAmount $_closureAmt
     * @param string $_paidDt
     * @param MicrobiltCriminalReportStructConsumerStatement_Type $_consumerDispute
     * @return MicrobiltCriminalReportStructAccountClosureDetail_Type
     */
    public function __construct($_aBANum = NULL,$_accountNum = NULL,$_closedDt = NULL,$_reasonCode = NULL,$_institutionName = NULL,$_stateProv = NULL,$_postalCode = NULL,$_closureAmt = NULL,$_paidDt = NULL,$_consumerDispute = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ABANum'=>$_aBANum,'AccountNum'=>$_accountNum,'ClosedDt'=>$_closedDt,'ReasonCode'=>$_reasonCode,'InstitutionName'=>$_institutionName,'StateProv'=>$_stateProv,'PostalCode'=>$_postalCode,'ClosureAmt'=>$_closureAmt,'PaidDt'=>$_paidDt,'ConsumerDispute'=>$_consumerDispute),false);
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
     * Get ClosedDt value
     * @return string|null
     */
    public function getClosedDt()
    {
        return $this->ClosedDt;
    }
    /**
     * Set ClosedDt value
     * @param string $_closedDt the ClosedDt
     * @return string
     */
    public function setClosedDt($_closedDt)
    {
        return ($this->ClosedDt = $_closedDt);
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $_reasonCode the ReasonCode
     * @return string
     */
    public function setReasonCode($_reasonCode)
    {
        return ($this->ReasonCode = $_reasonCode);
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
     * Get StateProv value
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param string $_stateProv the StateProv
     * @return string
     */
    public function setStateProv($_stateProv)
    {
        return ($this->StateProv = $_stateProv);
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $_postalCode the PostalCode
     * @return string
     */
    public function setPostalCode($_postalCode)
    {
        return ($this->PostalCode = $_postalCode);
    }
    /**
     * Get ClosureAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getClosureAmt()
    {
        return $this->ClosureAmt;
    }
    /**
     * Set ClosureAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_closureAmt the ClosureAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setClosureAmt($_closureAmt)
    {
        return ($this->ClosureAmt = $_closureAmt);
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
     * Get ConsumerDispute value
     * @return MicrobiltCriminalReportStructConsumerStatement_Type|null
     */
    public function getConsumerDispute()
    {
        return $this->ConsumerDispute;
    }
    /**
     * Set ConsumerDispute value
     * @param MicrobiltCriminalReportStructConsumerStatement_Type $_consumerDispute the ConsumerDispute
     * @return MicrobiltCriminalReportStructConsumerStatement_Type
     */
    public function setConsumerDispute($_consumerDispute)
    {
        return ($this->ConsumerDispute = $_consumerDispute);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAccountClosureDetail_Type
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
