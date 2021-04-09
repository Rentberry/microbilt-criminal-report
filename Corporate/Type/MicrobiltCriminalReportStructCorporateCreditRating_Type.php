<?php
/**
 * File for class MicrobiltCriminalReportStructCorporateCreditRating_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCorporateCreditRating_Type originally named CorporateCreditRating_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCorporateCreditRating_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The CreditRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCreditRating_Type
     */
    public $CreditRating;
    /**
     * The HistoricalCreditRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCreditRating_Type
     */
    public $HistoricalCreditRating;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CorporateCreditRating_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCreditRating_Type $_creditRating
     * @param MicrobiltCriminalReportStructCreditRating_Type $_historicalCreditRating
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructCorporateCreditRating_Type
     */
    public function __construct($_creditRating = NULL,$_historicalCreditRating = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('CreditRating'=>$_creditRating,'HistoricalCreditRating'=>$_historicalCreditRating,'Message'=>$_message),false);
    }
    /**
     * Get CreditRating value
     * @return MicrobiltCriminalReportStructCreditRating_Type|null
     */
    public function getCreditRating()
    {
        return $this->CreditRating;
    }
    /**
     * Set CreditRating value
     * @param MicrobiltCriminalReportStructCreditRating_Type $_creditRating the CreditRating
     * @return MicrobiltCriminalReportStructCreditRating_Type
     */
    public function setCreditRating($_creditRating)
    {
        return ($this->CreditRating = $_creditRating);
    }
    /**
     * Get HistoricalCreditRating value
     * @return MicrobiltCriminalReportStructCreditRating_Type|null
     */
    public function getHistoricalCreditRating()
    {
        return $this->HistoricalCreditRating;
    }
    /**
     * Set HistoricalCreditRating value
     * @param MicrobiltCriminalReportStructCreditRating_Type $_historicalCreditRating the HistoricalCreditRating
     * @return MicrobiltCriminalReportStructCreditRating_Type
     */
    public function setHistoricalCreditRating($_historicalCreditRating)
    {
        return ($this->HistoricalCreditRating = $_historicalCreditRating);
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
     * @return MicrobiltCriminalReportStructCorporateCreditRating_Type
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
