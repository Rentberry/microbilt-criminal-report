<?php
/**
 * File for class MicrobiltCriminalReportStructTransaction_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructTransaction_Type originally named Transaction_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructTransaction_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The TransNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransNum;
    /**
     * The TransEntityName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransEntityName;
    /**
     * The TransType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransType;
    /**
     * The TransAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TransAmt;
    /**
     * The TransDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The TransTime
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var time
     */
    public $TransTime;
    /**
     * The TransDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransDetails;
    /**
     * Constructor method for Transaction_Type
     * @see parent::__construct()
     * @param string $_transNum
     * @param string $_transEntityName
     * @param string $_transType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_transAmt
     * @param string $_transDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param time $_transTime
     * @param string $_transDetails
     * @return MicrobiltCriminalReportStructTransaction_Type
     */
    public function __construct($_transNum = NULL,$_transEntityName = NULL,$_transType = NULL,$_transAmt = NULL,$_transDt = NULL,$_message = NULL,$_transTime = NULL,$_transDetails = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('TransNum'=>$_transNum,'TransEntityName'=>$_transEntityName,'TransType'=>$_transType,'TransAmt'=>$_transAmt,'TransDt'=>$_transDt,'Message'=>$_message,'TransTime'=>$_transTime,'TransDetails'=>$_transDetails),false);
    }
    /**
     * Get TransNum value
     * @return string|null
     */
    public function getTransNum()
    {
        return $this->TransNum;
    }
    /**
     * Set TransNum value
     * @param string $_transNum the TransNum
     * @return string
     */
    public function setTransNum($_transNum)
    {
        return ($this->TransNum = $_transNum);
    }
    /**
     * Get TransEntityName value
     * @return string|null
     */
    public function getTransEntityName()
    {
        return $this->TransEntityName;
    }
    /**
     * Set TransEntityName value
     * @param string $_transEntityName the TransEntityName
     * @return string
     */
    public function setTransEntityName($_transEntityName)
    {
        return ($this->TransEntityName = $_transEntityName);
    }
    /**
     * Get TransType value
     * @return string|null
     */
    public function getTransType()
    {
        return $this->TransType;
    }
    /**
     * Set TransType value
     * @param string $_transType the TransType
     * @return string
     */
    public function setTransType($_transType)
    {
        return ($this->TransType = $_transType);
    }
    /**
     * Get TransAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTransAmt()
    {
        return $this->TransAmt;
    }
    /**
     * Set TransAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_transAmt the TransAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTransAmt($_transAmt)
    {
        return ($this->TransAmt = $_transAmt);
    }
    /**
     * Get TransDt value
     * @return string|null
     */
    public function getTransDt()
    {
        return $this->TransDt;
    }
    /**
     * Set TransDt value
     * @param string $_transDt the TransDt
     * @return string
     */
    public function setTransDt($_transDt)
    {
        return ($this->TransDt = $_transDt);
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
     * Get TransTime value
     * @return time|null
     */
    public function getTransTime()
    {
        return $this->TransTime;
    }
    /**
     * Set TransTime value
     * @param time $_transTime the TransTime
     * @return time
     */
    public function setTransTime($_transTime)
    {
        return ($this->TransTime = $_transTime);
    }
    /**
     * Get TransDetails value
     * @return string|null
     */
    public function getTransDetails()
    {
        return $this->TransDetails;
    }
    /**
     * Set TransDetails value
     * @param string $_transDetails the TransDetails
     * @return string
     */
    public function setTransDetails($_transDetails)
    {
        return ($this->TransDetails = $_transDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructTransaction_Type
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
