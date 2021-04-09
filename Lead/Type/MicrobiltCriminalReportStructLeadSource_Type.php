<?php
/**
 * File for class MicrobiltCriminalReportStructLeadSource_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLeadSource_Type originally named LeadSource_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLeadSource_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Name;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $URL;
    /**
     * The IPAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IPAddress;
    /**
     * The CostPerLead
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CostPerLead;
    /**
     * Constructor method for LeadSource_Type
     * @see parent::__construct()
     * @param string $_name
     * @param string $_uRL
     * @param string $_iPAddress
     * @param MicrobiltCriminalReportStructCurrencyAmount $_costPerLead
     * @return MicrobiltCriminalReportStructLeadSource_Type
     */
    public function __construct($_name = NULL,$_uRL = NULL,$_iPAddress = NULL,$_costPerLead = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Name'=>$_name,'URL'=>$_uRL,'IPAddress'=>$_iPAddress,'CostPerLead'=>$_costPerLead),false);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $_uRL the URL
     * @return string
     */
    public function setURL($_uRL)
    {
        return ($this->URL = $_uRL);
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $_iPAddress the IPAddress
     * @return string
     */
    public function setIPAddress($_iPAddress)
    {
        return ($this->IPAddress = $_iPAddress);
    }
    /**
     * Get CostPerLead value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCostPerLead()
    {
        return $this->CostPerLead;
    }
    /**
     * Set CostPerLead value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_costPerLead the CostPerLead
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCostPerLead($_costPerLead)
    {
        return ($this->CostPerLead = $_costPerLead);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLeadSource_Type
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
