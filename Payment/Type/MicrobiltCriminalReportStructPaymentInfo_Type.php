<?php
/**
 * File for class MicrobiltCriminalReportStructPaymentInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructPaymentInfo_Type originally named PaymentInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructPaymentInfo_Type extends MicrobiltCriminalReportStructAggregate
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
     * The CategoryInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCategoryInfo_Type
     */
    public $CategoryInfo;
    /**
     * The PaymentElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructElementsInfo_Type
     */
    public $PaymentElementsInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The PmtRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRating_Type
     */
    public $PmtRating;
    /**
     * Constructor method for PaymentInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltCriminalReportStructCategoryInfo_Type $_categoryInfo
     * @param MicrobiltCriminalReportStructElementsInfo_Type $_paymentElementsInfo
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param MicrobiltCriminalReportStructRating_Type $_pmtRating
     * @return MicrobiltCriminalReportStructPaymentInfo_Type
     */
    public function __construct($_msgClass = NULL,$_categoryInfo = NULL,$_paymentElementsInfo = NULL,$_message = NULL,$_pmtRating = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'CategoryInfo'=>$_categoryInfo,'PaymentElementsInfo'=>$_paymentElementsInfo,'Message'=>$_message,'PmtRating'=>$_pmtRating),false);
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
     * Get CategoryInfo value
     * @return MicrobiltCriminalReportStructCategoryInfo_Type|null
     */
    public function getCategoryInfo()
    {
        return $this->CategoryInfo;
    }
    /**
     * Set CategoryInfo value
     * @param MicrobiltCriminalReportStructCategoryInfo_Type $_categoryInfo the CategoryInfo
     * @return MicrobiltCriminalReportStructCategoryInfo_Type
     */
    public function setCategoryInfo($_categoryInfo)
    {
        return ($this->CategoryInfo = $_categoryInfo);
    }
    /**
     * Get PaymentElementsInfo value
     * @return MicrobiltCriminalReportStructElementsInfo_Type|null
     */
    public function getPaymentElementsInfo()
    {
        return $this->PaymentElementsInfo;
    }
    /**
     * Set PaymentElementsInfo value
     * @param MicrobiltCriminalReportStructElementsInfo_Type $_paymentElementsInfo the PaymentElementsInfo
     * @return MicrobiltCriminalReportStructElementsInfo_Type
     */
    public function setPaymentElementsInfo($_paymentElementsInfo)
    {
        return ($this->PaymentElementsInfo = $_paymentElementsInfo);
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
     * Get PmtRating value
     * @return MicrobiltCriminalReportStructRating_Type|null
     */
    public function getPmtRating()
    {
        return $this->PmtRating;
    }
    /**
     * Set PmtRating value
     * @param MicrobiltCriminalReportStructRating_Type $_pmtRating the PmtRating
     * @return MicrobiltCriminalReportStructRating_Type
     */
    public function setPmtRating($_pmtRating)
    {
        return ($this->PmtRating = $_pmtRating);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructPaymentInfo_Type
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
