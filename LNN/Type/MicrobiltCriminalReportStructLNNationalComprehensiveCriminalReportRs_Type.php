<?php
/**
 * File for class MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type originally named LNNationalComprehensiveCriminalReportRs_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd1}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The MsgRsHdr
     * @var MicrobiltCriminalReportStructMsgRsHdr_Type
     */
    public $MsgRsHdr;
    /**
     * The TransNum
     * @var string
     */
    public $TransNum;
    /**
     * The Subject
     * @var MicrobiltCriminalReportStructSubject
     */
    public $Subject;
    /**
     * Constructor method for LNNationalComprehensiveCriminalReportRs_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructMsgRsHdr_Type $_msgRsHdr
     * @param string $_transNum
     * @param MicrobiltCriminalReportStructSubject $_subject
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
     */
    public function __construct($_msgRsHdr = NULL,$_transNum = NULL,$_subject = NULL)
    {
        parent::__construct(array('MsgRsHdr'=>$_msgRsHdr,'TransNum'=>$_transNum,'Subject'=>$_subject),false);
    }
    /**
     * Get MsgRsHdr value
     * @return MicrobiltCriminalReportStructMsgRsHdr_Type|null
     */
    public function getMsgRsHdr()
    {
        return $this->MsgRsHdr;
    }
    /**
     * Set MsgRsHdr value
     * @param MicrobiltCriminalReportStructMsgRsHdr_Type $_msgRsHdr the MsgRsHdr
     * @return MicrobiltCriminalReportStructMsgRsHdr_Type
     */
    public function setMsgRsHdr($_msgRsHdr)
    {
        return ($this->MsgRsHdr = $_msgRsHdr);
    }
    /**
     * Get TransNum value
     * @return string|null
     */
    public function getTransNum()
    {
        return $this->TransNum;
    }
    /**
     * Set TransNum value
     * @param string $_transNum the TransNum
     * @return string
     */
    public function setTransNum($_transNum)
    {
        return ($this->TransNum = $_transNum);
    }
    /**
     * Get Subject value
     * @return MicrobiltCriminalReportStructSubject|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param MicrobiltCriminalReportStructSubject $_subject the Subject
     * @return MicrobiltCriminalReportStructSubject
     */
    public function setSubject($_subject)
    {
        return ($this->Subject = $_subject);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructLNNationalComprehensiveCriminalReportRs_Type
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
