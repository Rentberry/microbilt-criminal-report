<?php
/**
 * File for class MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type originally named LNNationalComprehensiveCriminalReportRq_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd1}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The MsgRqHdr
     * @var MicrobiltCriminalReportStructMsgRqHdr_Type
     */
    public $MsgRqHdr;
    /**
     * The OffenderID
     * @var string
     */
    public $OffenderID;
    /**
     * The PersonInfo
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * Constructor method for LNNationalComprehensiveCriminalReportRq_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructMsgRqHdr_Type $_msgRqHdr
     * @param string $_offenderID
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type
     */
    public function __construct($_msgRqHdr = NULL,$_offenderID = NULL,$_personInfo = NULL)
    {
        parent::__construct(array('MsgRqHdr'=>$_msgRqHdr,'OffenderID'=>$_offenderID,'PersonInfo'=>$_personInfo),false);
    }
    /**
     * Get MsgRqHdr value
     * @return MicrobiltCriminalReportStructMsgRqHdr_Type|null
     */
    public function getMsgRqHdr()
    {
        return $this->MsgRqHdr;
    }
    /**
     * Set MsgRqHdr value
     * @param MicrobiltCriminalReportStructMsgRqHdr_Type $_msgRqHdr the MsgRqHdr
     * @return MicrobiltCriminalReportStructMsgRqHdr_Type
     */
    public function setMsgRqHdr($_msgRqHdr)
    {
        return ($this->MsgRqHdr = $_msgRqHdr);
    }
    /**
     * Get OffenderID value
     * @return string|null
     */
    public function getOffenderID()
    {
        return $this->OffenderID;
    }
    /**
     * Set OffenderID value
     * @param string $_offenderID the OffenderID
     * @return string
     */
    public function setOffenderID($_offenderID)
    {
        return ($this->OffenderID = $_offenderID);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltCriminalReportStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRq_Type
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
