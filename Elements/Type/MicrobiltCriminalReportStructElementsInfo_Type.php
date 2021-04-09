<?php
/**
 * File for class MicrobiltCriminalReportStructElementsInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructElementsInfo_Type originally named ElementsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructElementsInfo_Type extends MicrobiltCriminalReportStructAggregate
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
     * The AccountingAmtItems
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAmtItems_Type
     */
    public $AccountingAmtItems;
    /**
     * Constructor method for ElementsInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltCriminalReportStructAmtItems_Type $_accountingAmtItems
     * @return MicrobiltCriminalReportStructElementsInfo_Type
     */
    public function __construct($_msgClass = NULL,$_accountingAmtItems = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'AccountingAmtItems'=>$_accountingAmtItems),false);
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
     * Get AccountingAmtItems value
     * @return MicrobiltCriminalReportStructAmtItems_Type|null
     */
    public function getAccountingAmtItems()
    {
        return $this->AccountingAmtItems;
    }
    /**
     * Set AccountingAmtItems value
     * @param MicrobiltCriminalReportStructAmtItems_Type $_accountingAmtItems the AccountingAmtItems
     * @return MicrobiltCriminalReportStructAmtItems_Type
     */
    public function setAccountingAmtItems($_accountingAmtItems)
    {
        return ($this->AccountingAmtItems = $_accountingAmtItems);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructElementsInfo_Type
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
