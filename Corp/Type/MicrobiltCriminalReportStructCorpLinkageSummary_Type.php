<?php
/**
 * File for class MicrobiltCriminalReportStructCorpLinkageSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCorpLinkageSummary_Type originally named CorpLinkageSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCorpLinkageSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The BusType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusType;
    /**
     * The NumOfSubsidiaries
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfSubsidiaries;
    /**
     * The NumOfBranches
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfBranches;
    /**
     * The BranchesInMidW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BranchesInMidW;
    /**
     * The BranchesInNE
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BranchesInNE;
    /**
     * The BranchesInNW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BranchesInNW;
    /**
     * The BranchesInS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BranchesInS;
    /**
     * The BranchesInCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BranchesInCentral;
    /**
     * The BranchesInSW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BranchesInSW;
    /**
     * Constructor method for CorpLinkageSummary_Type
     * @see parent::__construct()
     * @param string $_busType
     * @param string $_numOfSubsidiaries
     * @param string $_numOfBranches
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInMidW
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInNE
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInNW
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInS
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInCentral
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInSW
     * @return MicrobiltCriminalReportStructCorpLinkageSummary_Type
     */
    public function __construct($_busType = NULL,$_numOfSubsidiaries = NULL,$_numOfBranches = NULL,$_branchesInMidW = NULL,$_branchesInNE = NULL,$_branchesInNW = NULL,$_branchesInS = NULL,$_branchesInCentral = NULL,$_branchesInSW = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('BusType'=>$_busType,'NumOfSubsidiaries'=>$_numOfSubsidiaries,'NumOfBranches'=>$_numOfBranches,'BranchesInMidW'=>$_branchesInMidW,'BranchesInNE'=>$_branchesInNE,'BranchesInNW'=>$_branchesInNW,'BranchesInS'=>$_branchesInS,'BranchesInCentral'=>$_branchesInCentral,'BranchesInSW'=>$_branchesInSW),false);
    }
    /**
     * Get BusType value
     * @return string|null
     */
    public function getBusType()
    {
        return $this->BusType;
    }
    /**
     * Set BusType value
     * @param string $_busType the BusType
     * @return string
     */
    public function setBusType($_busType)
    {
        return ($this->BusType = $_busType);
    }
    /**
     * Get NumOfSubsidiaries value
     * @return string|null
     */
    public function getNumOfSubsidiaries()
    {
        return $this->NumOfSubsidiaries;
    }
    /**
     * Set NumOfSubsidiaries value
     * @param string $_numOfSubsidiaries the NumOfSubsidiaries
     * @return string
     */
    public function setNumOfSubsidiaries($_numOfSubsidiaries)
    {
        return ($this->NumOfSubsidiaries = $_numOfSubsidiaries);
    }
    /**
     * Get NumOfBranches value
     * @return string|null
     */
    public function getNumOfBranches()
    {
        return $this->NumOfBranches;
    }
    /**
     * Set NumOfBranches value
     * @param string $_numOfBranches the NumOfBranches
     * @return string
     */
    public function setNumOfBranches($_numOfBranches)
    {
        return ($this->NumOfBranches = $_numOfBranches);
    }
    /**
     * Get BranchesInMidW value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBranchesInMidW()
    {
        return $this->BranchesInMidW;
    }
    /**
     * Set BranchesInMidW value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInMidW the BranchesInMidW
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBranchesInMidW($_branchesInMidW)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_branchesInMidW))
        {
            return false;
        }
        return ($this->BranchesInMidW = $_branchesInMidW);
    }
    /**
     * Get BranchesInNE value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBranchesInNE()
    {
        return $this->BranchesInNE;
    }
    /**
     * Set BranchesInNE value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInNE the BranchesInNE
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBranchesInNE($_branchesInNE)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_branchesInNE))
        {
            return false;
        }
        return ($this->BranchesInNE = $_branchesInNE);
    }
    /**
     * Get BranchesInNW value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBranchesInNW()
    {
        return $this->BranchesInNW;
    }
    /**
     * Set BranchesInNW value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInNW the BranchesInNW
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBranchesInNW($_branchesInNW)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_branchesInNW))
        {
            return false;
        }
        return ($this->BranchesInNW = $_branchesInNW);
    }
    /**
     * Get BranchesInS value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBranchesInS()
    {
        return $this->BranchesInS;
    }
    /**
     * Set BranchesInS value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInS the BranchesInS
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBranchesInS($_branchesInS)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_branchesInS))
        {
            return false;
        }
        return ($this->BranchesInS = $_branchesInS);
    }
    /**
     * Get BranchesInCentral value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBranchesInCentral()
    {
        return $this->BranchesInCentral;
    }
    /**
     * Set BranchesInCentral value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInCentral the BranchesInCentral
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBranchesInCentral($_branchesInCentral)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_branchesInCentral))
        {
            return false;
        }
        return ($this->BranchesInCentral = $_branchesInCentral);
    }
    /**
     * Get BranchesInSW value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBranchesInSW()
    {
        return $this->BranchesInSW;
    }
    /**
     * Set BranchesInSW value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_branchesInSW the BranchesInSW
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBranchesInSW($_branchesInSW)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_branchesInSW))
        {
            return false;
        }
        return ($this->BranchesInSW = $_branchesInSW);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCorpLinkageSummary_Type
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
