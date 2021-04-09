<?php
/**
 * File for class MicrobiltCriminalReportStructStandardAndPoorsInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructStandardAndPoorsInfo_Type originally named StandardAndPoorsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructStandardAndPoorsInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for StandardAndPoorsInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param string $_text
     * @return MicrobiltCriminalReportStructStandardAndPoorsInfo_Type
     */
    public function __construct($_orgInfo = NULL,$_text = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'Text'=>$_text),false);
    }
    /**
     * Get OrgInfo value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $_text the Text
     * @return string
     */
    public function setText($_text)
    {
        return ($this->Text = $_text);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructStandardAndPoorsInfo_Type
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
