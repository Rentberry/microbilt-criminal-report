<?php
/**
 * File for class MicrobiltCriminalReportStructOFAC_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructOFAC_Type originally named OFAC_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructOFAC_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The ResponseCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $ResponseCode;
    /**
     * The ProblemCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $ProblemCode;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $MatchCode;
    /**
     * The SourceSanction
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SourceSanction;
    /**
     * The IssueId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssueId;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $Value;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileName;
    /**
     * The FileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $FileDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for OFAC_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_responseCode
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_problemCode
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_matchCode
     * @param string $_sourceSanction
     * @param string $_issueId
     * @param long $_value
     * @param string $_fileName
     * @param date $_fileDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructOFAC_Type
     */
    public function __construct($_personInfo = NULL,$_responseCode = NULL,$_problemCode = NULL,$_matchCode = NULL,$_sourceSanction = NULL,$_issueId = NULL,$_value = NULL,$_fileName = NULL,$_fileDt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'ResponseCode'=>$_responseCode,'ProblemCode'=>$_problemCode,'MatchCode'=>$_matchCode,'SourceSanction'=>$_sourceSanction,'IssueId'=>$_issueId,'Value'=>$_value,'FileName'=>$_fileName,'FileDt'=>$_fileDt,'Message'=>$_message),false);
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
     * Get ResponseCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_responseCode the ResponseCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setResponseCode($_responseCode)
    {
        return ($this->ResponseCode = $_responseCode);
    }
    /**
     * Get ProblemCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getProblemCode()
    {
        return $this->ProblemCode;
    }
    /**
     * Set ProblemCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_problemCode the ProblemCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setProblemCode($_problemCode)
    {
        return ($this->ProblemCode = $_problemCode);
    }
    /**
     * Get MatchCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getMatchCode()
    {
        return $this->MatchCode;
    }
    /**
     * Set MatchCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_matchCode the MatchCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setMatchCode($_matchCode)
    {
        return ($this->MatchCode = $_matchCode);
    }
    /**
     * Get SourceSanction value
     * @return string|null
     */
    public function getSourceSanction()
    {
        return $this->SourceSanction;
    }
    /**
     * Set SourceSanction value
     * @param string $_sourceSanction the SourceSanction
     * @return string
     */
    public function setSourceSanction($_sourceSanction)
    {
        return ($this->SourceSanction = $_sourceSanction);
    }
    /**
     * Get IssueId value
     * @return string|null
     */
    public function getIssueId()
    {
        return $this->IssueId;
    }
    /**
     * Set IssueId value
     * @param string $_issueId the IssueId
     * @return string
     */
    public function setIssueId($_issueId)
    {
        return ($this->IssueId = $_issueId);
    }
    /**
     * Get Value value
     * @return long|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param long $_value the Value
     * @return long
     */
    public function setValue($_value)
    {
        return ($this->Value = $_value);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $_fileName the FileName
     * @return string
     */
    public function setFileName($_fileName)
    {
        return ($this->FileName = $_fileName);
    }
    /**
     * Get FileDt value
     * @return date|null
     */
    public function getFileDt()
    {
        return $this->FileDt;
    }
    /**
     * Set FileDt value
     * @param date $_fileDt the FileDt
     * @return date
     */
    public function setFileDt($_fileDt)
    {
        return ($this->FileDt = $_fileDt);
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
     * @return MicrobiltCriminalReportStructOFAC_Type
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
