<?php
/**
 * File for class MicrobiltCriminalReportStructReport_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructReport_Type originally named Report_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructReport_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Bureau
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Bureau;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Product;
    /**
     * The ARStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ARStatus;
    /**
     * The GUID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GUID;
    /**
     * Constructor method for Report_Type
     * @see parent::__construct()
     * @param string $_bureau
     * @param string $_product
     * @param string $_aRStatus
     * @param string $_gUID
     * @return MicrobiltCriminalReportStructReport_Type
     */
    public function __construct($_bureau = NULL,$_product = NULL,$_aRStatus = NULL,$_gUID = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Bureau'=>$_bureau,'Product'=>$_product,'ARStatus'=>$_aRStatus,'GUID'=>$_gUID),false);
    }
    /**
     * Get Bureau value
     * @return string|null
     */
    public function getBureau()
    {
        return $this->Bureau;
    }
    /**
     * Set Bureau value
     * @param string $_bureau the Bureau
     * @return string
     */
    public function setBureau($_bureau)
    {
        return ($this->Bureau = $_bureau);
    }
    /**
     * Get Product value
     * @return string|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param string $_product the Product
     * @return string
     */
    public function setProduct($_product)
    {
        return ($this->Product = $_product);
    }
    /**
     * Get ARStatus value
     * @return string|null
     */
    public function getARStatus()
    {
        return $this->ARStatus;
    }
    /**
     * Set ARStatus value
     * @param string $_aRStatus the ARStatus
     * @return string
     */
    public function setARStatus($_aRStatus)
    {
        return ($this->ARStatus = $_aRStatus);
    }
    /**
     * Get GUID value
     * @return string|null
     */
    public function getGUID()
    {
        return $this->GUID;
    }
    /**
     * Set GUID value
     * @param string $_gUID the GUID
     * @return string
     */
    public function setGUID($_gUID)
    {
        return ($this->GUID = $_gUID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructReport_Type
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
