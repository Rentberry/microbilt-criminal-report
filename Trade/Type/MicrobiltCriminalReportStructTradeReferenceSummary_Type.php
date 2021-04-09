<?php
/**
 * File for class MicrobiltCriminalReportStructTradeReferenceSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructTradeReferenceSummary_Type originally named TradeReferenceSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructTradeReferenceSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The TradeReferenceDetailInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructTradeReferenceDetailInfo_Type
     */
    public $TradeReferenceDetailInfo;
    /**
     * The TradeReferenceElementInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructTradeReferenceElementInfo_Type
     */
    public $TradeReferenceElementInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for TradeReferenceSummary_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructTradeReferenceDetailInfo_Type $_tradeReferenceDetailInfo
     * @param MicrobiltCriminalReportStructTradeReferenceElementInfo_Type $_tradeReferenceElementInfo
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructTradeReferenceSummary_Type
     */
    public function __construct($_tradeReferenceDetailInfo = NULL,$_tradeReferenceElementInfo = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('TradeReferenceDetailInfo'=>$_tradeReferenceDetailInfo,'TradeReferenceElementInfo'=>$_tradeReferenceElementInfo,'Message'=>$_message),false);
    }
    /**
     * Get TradeReferenceDetailInfo value
     * @return MicrobiltCriminalReportStructTradeReferenceDetailInfo_Type|null
     */
    public function getTradeReferenceDetailInfo()
    {
        return $this->TradeReferenceDetailInfo;
    }
    /**
     * Set TradeReferenceDetailInfo value
     * @param MicrobiltCriminalReportStructTradeReferenceDetailInfo_Type $_tradeReferenceDetailInfo the TradeReferenceDetailInfo
     * @return MicrobiltCriminalReportStructTradeReferenceDetailInfo_Type
     */
    public function setTradeReferenceDetailInfo($_tradeReferenceDetailInfo)
    {
        return ($this->TradeReferenceDetailInfo = $_tradeReferenceDetailInfo);
    }
    /**
     * Get TradeReferenceElementInfo value
     * @return MicrobiltCriminalReportStructTradeReferenceElementInfo_Type|null
     */
    public function getTradeReferenceElementInfo()
    {
        return $this->TradeReferenceElementInfo;
    }
    /**
     * Set TradeReferenceElementInfo value
     * @param MicrobiltCriminalReportStructTradeReferenceElementInfo_Type $_tradeReferenceElementInfo the TradeReferenceElementInfo
     * @return MicrobiltCriminalReportStructTradeReferenceElementInfo_Type
     */
    public function setTradeReferenceElementInfo($_tradeReferenceElementInfo)
    {
        return ($this->TradeReferenceElementInfo = $_tradeReferenceElementInfo);
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
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructTradeReferenceSummary_Type
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
