<?php
/**
 * File for class MicrobiltCriminalReportStructAccountingInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAccountingInfo_Type originally named AccountingInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAccountingInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The AccountingPeriodInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPeriodInfo_Type
     */
    public $AccountingPeriodInfo;
    /**
     * The AccountingElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructElementsInfo_Type
     */
    public $AccountingElementsInfo;
    /**
     * The FilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingDt;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * Constructor method for AccountingInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltCriminalReportStructPeriodInfo_Type $_accountingPeriodInfo
     * @param MicrobiltCriminalReportStructElementsInfo_Type $_accountingElementsInfo
     * @param string $_filingDt
     * @param string $_filingType
     * @return MicrobiltCriminalReportStructAccountingInfo_Type
     */
    public function __construct($_msgClass = NULL,$_accountingPeriodInfo = NULL,$_accountingElementsInfo = NULL,$_filingDt = NULL,$_filingType = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'AccountingPeriodInfo'=>$_accountingPeriodInfo,'AccountingElementsInfo'=>$_accountingElementsInfo,'FilingDt'=>$_filingDt,'FilingType'=>$_filingType),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get AccountingPeriodInfo value
     * @return MicrobiltCriminalReportStructPeriodInfo_Type|null
     */
    public function getAccountingPeriodInfo()
    {
        return $this->AccountingPeriodInfo;
    }
    /**
     * Set AccountingPeriodInfo value
     * @param MicrobiltCriminalReportStructPeriodInfo_Type $_accountingPeriodInfo the AccountingPeriodInfo
     * @return MicrobiltCriminalReportStructPeriodInfo_Type
     */
    public function setAccountingPeriodInfo($_accountingPeriodInfo)
    {
        return ($this->AccountingPeriodInfo = $_accountingPeriodInfo);
    }
    /**
     * Get AccountingElementsInfo value
     * @return MicrobiltCriminalReportStructElementsInfo_Type|null
     */
    public function getAccountingElementsInfo()
    {
        return $this->AccountingElementsInfo;
    }
    /**
     * Set AccountingElementsInfo value
     * @param MicrobiltCriminalReportStructElementsInfo_Type $_accountingElementsInfo the AccountingElementsInfo
     * @return MicrobiltCriminalReportStructElementsInfo_Type
     */
    public function setAccountingElementsInfo($_accountingElementsInfo)
    {
        return ($this->AccountingElementsInfo = $_accountingElementsInfo);
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
     * Get FilingType value
     * @return string|null
     */
    public function getFilingType()
    {
        return $this->FilingType;
    }
    /**
     * Set FilingType value
     * @param string $_filingType the FilingType
     * @return string
     */
    public function setFilingType($_filingType)
    {
        return ($this->FilingType = $_filingType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAccountingInfo_Type
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
