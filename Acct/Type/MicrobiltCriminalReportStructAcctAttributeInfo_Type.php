<?php
/**
 * File for class MicrobiltCriminalReportStructAcctAttributeInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAcctAttributeInfo_Type originally named AcctAttributeInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAcctAttributeInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AttribName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AttribName;
    /**
     * The AttribAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AttribAmt;
    /**
     * The AttribDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AttribDt;
    /**
     * Constructor method for AcctAttributeInfo_Type
     * @see parent::__construct()
     * @param string $_attribName
     * @param MicrobiltCriminalReportStructCurrencyAmount $_attribAmt
     * @param string $_attribDt
     * @return MicrobiltCriminalReportStructAcctAttributeInfo_Type
     */
    public function __construct($_attribName = NULL,$_attribAmt = NULL,$_attribDt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AttribName'=>$_attribName,'AttribAmt'=>$_attribAmt,'AttribDt'=>$_attribDt),false);
    }
    /**
     * Get AttribName value
     * @return string|null
     */
    public function getAttribName()
    {
        return $this->AttribName;
    }
    /**
     * Set AttribName value
     * @param string $_attribName the AttribName
     * @return string
     */
    public function setAttribName($_attribName)
    {
        return ($this->AttribName = $_attribName);
    }
    /**
     * Get AttribAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAttribAmt()
    {
        return $this->AttribAmt;
    }
    /**
     * Set AttribAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_attribAmt the AttribAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAttribAmt($_attribAmt)
    {
        return ($this->AttribAmt = $_attribAmt);
    }
    /**
     * Get AttribDt value
     * @return string|null
     */
    public function getAttribDt()
    {
        return $this->AttribDt;
    }
    /**
     * Set AttribDt value
     * @param string $_attribDt the AttribDt
     * @return string
     */
    public function setAttribDt($_attribDt)
    {
        return ($this->AttribDt = $_attribDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAcctAttributeInfo_Type
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
