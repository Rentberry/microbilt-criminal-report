<?php
/**
 * File for class MicrobiltCriminalReportStructGovtDebarredContractorInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGovtDebarredContractorInfo_Type originally named GovtDebarredContractorInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGovtDebarredContractorInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $ActionCode;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Action;
    /**
     * The CauseCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $CauseCode;
    /**
     * The AgencyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $AgencyCode;
    /**
     * The CrossRefNameAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CrossRefNameAddr;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $Comments;
    /**
     * Constructor method for GovtDebarredContractorInfo_Type
     * @see parent::__construct()
     * @param string $_reportedDt
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_actionCode
     * @param string $_action
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_causeCode
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_agencyCode
     * @param string $_crossRefNameAddr
     * @param string $_comments
     * @return MicrobiltCriminalReportStructGovtDebarredContractorInfo_Type
     */
    public function __construct($_reportedDt = NULL,$_orgInfo = NULL,$_actionCode = NULL,$_action = NULL,$_causeCode = NULL,$_agencyCode = NULL,$_crossRefNameAddr = NULL,$_comments = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ReportedDt'=>$_reportedDt,'OrgInfo'=>$_orgInfo,'ActionCode'=>$_actionCode,'Action'=>$_action,'CauseCode'=>$_causeCode,'AgencyCode'=>$_agencyCode,'CrossRefNameAddr'=>$_crossRefNameAddr,'Comments'=>$_comments),false);
    }
    /**
     * Get ReportedDt value
     * @return string|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param string $_reportedDt the ReportedDt
     * @return string
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
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
     * Get ActionCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_actionCode the ActionCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setActionCode($_actionCode)
    {
        return ($this->ActionCode = $_actionCode);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $_action the Action
     * @return string
     */
    public function setAction($_action)
    {
        return ($this->Action = $_action);
    }
    /**
     * Get CauseCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getCauseCode()
    {
        return $this->CauseCode;
    }
    /**
     * Set CauseCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_causeCode the CauseCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setCauseCode($_causeCode)
    {
        return ($this->CauseCode = $_causeCode);
    }
    /**
     * Get AgencyCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getAgencyCode()
    {
        return $this->AgencyCode;
    }
    /**
     * Set AgencyCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_agencyCode the AgencyCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setAgencyCode($_agencyCode)
    {
        return ($this->AgencyCode = $_agencyCode);
    }
    /**
     * Get CrossRefNameAddr value
     * @return string|null
     */
    public function getCrossRefNameAddr()
    {
        return $this->CrossRefNameAddr;
    }
    /**
     * Set CrossRefNameAddr value
     * @param string $_crossRefNameAddr the CrossRefNameAddr
     * @return string
     */
    public function setCrossRefNameAddr($_crossRefNameAddr)
    {
        return ($this->CrossRefNameAddr = $_crossRefNameAddr);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $_comments the Comments
     * @return string
     */
    public function setComments($_comments)
    {
        return ($this->Comments = $_comments);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGovtDebarredContractorInfo_Type
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
