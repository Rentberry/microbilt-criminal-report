<?php
/**
 * File for class MicrobiltCriminalReportStructInternationalCourtInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructInternationalCourtInfo_Type originally named InternationalCourtInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructInternationalCourtInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The IntlCourtDetailsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type
     */
    public $IntlCourtDetailsInfo;
    /**
     * The IntlCourtPeriodInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type
     */
    public $IntlCourtPeriodInfo;
    /**
     * The IntlCourtElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructIntlCourtElementsInfo_Type
     */
    public $IntlCourtElementsInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for InternationalCourtInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type $_intlCourtDetailsInfo
     * @param MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type $_intlCourtPeriodInfo
     * @param MicrobiltCriminalReportStructIntlCourtElementsInfo_Type $_intlCourtElementsInfo
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructInternationalCourtInfo_Type
     */
    public function __construct($_intlCourtDetailsInfo = NULL,$_intlCourtPeriodInfo = NULL,$_intlCourtElementsInfo = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('IntlCourtDetailsInfo'=>$_intlCourtDetailsInfo,'IntlCourtPeriodInfo'=>$_intlCourtPeriodInfo,'IntlCourtElementsInfo'=>$_intlCourtElementsInfo,'Message'=>$_message),false);
    }
    /**
     * Get IntlCourtDetailsInfo value
     * @return MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type|null
     */
    public function getIntlCourtDetailsInfo()
    {
        return $this->IntlCourtDetailsInfo;
    }
    /**
     * Set IntlCourtDetailsInfo value
     * @param MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type $_intlCourtDetailsInfo the IntlCourtDetailsInfo
     * @return MicrobiltCriminalReportStructIntlCourtDetailsInfo_Type
     */
    public function setIntlCourtDetailsInfo($_intlCourtDetailsInfo)
    {
        return ($this->IntlCourtDetailsInfo = $_intlCourtDetailsInfo);
    }
    /**
     * Get IntlCourtPeriodInfo value
     * @return MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type|null
     */
    public function getIntlCourtPeriodInfo()
    {
        return $this->IntlCourtPeriodInfo;
    }
    /**
     * Set IntlCourtPeriodInfo value
     * @param MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type $_intlCourtPeriodInfo the IntlCourtPeriodInfo
     * @return MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type
     */
    public function setIntlCourtPeriodInfo($_intlCourtPeriodInfo)
    {
        return ($this->IntlCourtPeriodInfo = $_intlCourtPeriodInfo);
    }
    /**
     * Get IntlCourtElementsInfo value
     * @return MicrobiltCriminalReportStructIntlCourtElementsInfo_Type|null
     */
    public function getIntlCourtElementsInfo()
    {
        return $this->IntlCourtElementsInfo;
    }
    /**
     * Set IntlCourtElementsInfo value
     * @param MicrobiltCriminalReportStructIntlCourtElementsInfo_Type $_intlCourtElementsInfo the IntlCourtElementsInfo
     * @return MicrobiltCriminalReportStructIntlCourtElementsInfo_Type
     */
    public function setIntlCourtElementsInfo($_intlCourtElementsInfo)
    {
        return ($this->IntlCourtElementsInfo = $_intlCourtElementsInfo);
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
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructInternationalCourtInfo_Type
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
