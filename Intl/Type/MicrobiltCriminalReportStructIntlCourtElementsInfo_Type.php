<?php
/**
 * File for class MicrobiltCriminalReportStructIntlCourtElementsInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructIntlCourtElementsInfo_Type originally named IntlCourtElementsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructIntlCourtElementsInfo_Type extends MicrobiltCriminalReportStructAggregate
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
     * The IntlCourtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $IntlCourtAmt;
    /**
     * The IntlCourtCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $IntlCourtCount;
    /**
     * The PercentageRatio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $PercentageRatio;
    /**
     * Constructor method for IntlCourtElementsInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltCriminalReportStructCurrencyAmount $_intlCourtAmt
     * @param int $_intlCourtCount
     * @param float $_percentageRatio
     * @return MicrobiltCriminalReportStructIntlCourtElementsInfo_Type
     */
    public function __construct($_msgClass = NULL,$_intlCourtAmt = NULL,$_intlCourtCount = NULL,$_percentageRatio = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'IntlCourtAmt'=>$_intlCourtAmt,'IntlCourtCount'=>$_intlCourtCount,'PercentageRatio'=>$_percentageRatio),false);
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
     * Get IntlCourtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getIntlCourtAmt()
    {
        return $this->IntlCourtAmt;
    }
    /**
     * Set IntlCourtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_intlCourtAmt the IntlCourtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setIntlCourtAmt($_intlCourtAmt)
    {
        return ($this->IntlCourtAmt = $_intlCourtAmt);
    }
    /**
     * Get IntlCourtCount value
     * @return int|null
     */
    public function getIntlCourtCount()
    {
        return $this->IntlCourtCount;
    }
    /**
     * Set IntlCourtCount value
     * @param int $_intlCourtCount the IntlCourtCount
     * @return int
     */
    public function setIntlCourtCount($_intlCourtCount)
    {
        return ($this->IntlCourtCount = $_intlCourtCount);
    }
    /**
     * Get PercentageRatio value
     * @return float|null
     */
    public function getPercentageRatio()
    {
        return $this->PercentageRatio;
    }
    /**
     * Set PercentageRatio value
     * @param float $_percentageRatio the PercentageRatio
     * @return float
     */
    public function setPercentageRatio($_percentageRatio)
    {
        return ($this->PercentageRatio = $_percentageRatio);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructIntlCourtElementsInfo_Type
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
