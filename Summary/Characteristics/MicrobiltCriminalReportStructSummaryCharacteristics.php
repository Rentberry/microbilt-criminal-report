<?php
/**
 * File for class MicrobiltCriminalReportStructSummaryCharacteristics
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSummaryCharacteristics originally named SummaryCharacteristics
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSummaryCharacteristics extends MicrobiltCriminalReportStructSummaryCharacteristics_Type
{
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Quantity;
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The Characteristics
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $Characteristics;
    /**
     * Constructor method for SummaryCharacteristics
     * @see parent::__construct()
     * @param int $_quantity
     * @param string $_msgClass
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_characteristics
     * @return MicrobiltCriminalReportStructSummaryCharacteristics
     */
    public function __construct($_quantity,$_msgClass = NULL,$_characteristics = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Quantity'=>$_quantity,'MsgClass'=>$_msgClass,'Characteristics'=>$_characteristics),false);
    }
    /**
     * Get Quantity value
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $_quantity the Quantity
     * @return int
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
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
     * Get Characteristics value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getCharacteristics()
    {
        return $this->Characteristics;
    }
    /**
     * Set Characteristics value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_characteristics the Characteristics
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setCharacteristics($_characteristics)
    {
        return ($this->Characteristics = $_characteristics);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructSummaryCharacteristics
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
