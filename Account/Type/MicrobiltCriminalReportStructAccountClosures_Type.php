<?php
/**
 * File for class MicrobiltCriminalReportStructAccountClosures_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAccountClosures_Type originally named AccountClosures_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAccountClosures_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AccountClosureSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAccountClosureSummary_Type
     */
    public $AccountClosureSummary;
    /**
     * The AccountClosureDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAccountClosureDetail_Type
     */
    public $AccountClosureDetail;
    /**
     * Constructor method for AccountClosures_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructAccountClosureSummary_Type $_accountClosureSummary
     * @param MicrobiltCriminalReportStructAccountClosureDetail_Type $_accountClosureDetail
     * @return MicrobiltCriminalReportStructAccountClosures_Type
     */
    public function __construct($_accountClosureSummary = NULL,$_accountClosureDetail = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AccountClosureSummary'=>$_accountClosureSummary,'AccountClosureDetail'=>$_accountClosureDetail),false);
    }
    /**
     * Get AccountClosureSummary value
     * @return MicrobiltCriminalReportStructAccountClosureSummary_Type|null
     */
    public function getAccountClosureSummary()
    {
        return $this->AccountClosureSummary;
    }
    /**
     * Set AccountClosureSummary value
     * @param MicrobiltCriminalReportStructAccountClosureSummary_Type $_accountClosureSummary the AccountClosureSummary
     * @return MicrobiltCriminalReportStructAccountClosureSummary_Type
     */
    public function setAccountClosureSummary($_accountClosureSummary)
    {
        return ($this->AccountClosureSummary = $_accountClosureSummary);
    }
    /**
     * Get AccountClosureDetail value
     * @return MicrobiltCriminalReportStructAccountClosureDetail_Type|null
     */
    public function getAccountClosureDetail()
    {
        return $this->AccountClosureDetail;
    }
    /**
     * Set AccountClosureDetail value
     * @param MicrobiltCriminalReportStructAccountClosureDetail_Type $_accountClosureDetail the AccountClosureDetail
     * @return MicrobiltCriminalReportStructAccountClosureDetail_Type
     */
    public function setAccountClosureDetail($_accountClosureDetail)
    {
        return ($this->AccountClosureDetail = $_accountClosureDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAccountClosures_Type
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
