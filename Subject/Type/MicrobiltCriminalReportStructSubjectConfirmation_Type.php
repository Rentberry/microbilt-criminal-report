<?php
/**
 * File for class MicrobiltCriminalReportStructSubjectConfirmation_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSubjectConfirmation_Type originally named SubjectConfirmation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSubjectConfirmation_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ByName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByName;
    /**
     * The ByFamilyName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByFamilyName;
    /**
     * The ByGivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByGivenName;
    /**
     * The ByPrefGivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByPrefGivenName;
    /**
     * The ByMiddleName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByMiddleName;
    /**
     * The ByDOB
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByDOB;
    /**
     * The ByGovernmentId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByGovernmentId;
    /**
     * The ByOtherId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ByOtherId;
    /**
     * The BySex
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $BySex;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for SubjectConfirmation_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportEnumBoolean $_byName
     * @param MicrobiltCriminalReportEnumBoolean $_byFamilyName
     * @param MicrobiltCriminalReportEnumBoolean $_byGivenName
     * @param MicrobiltCriminalReportEnumBoolean $_byPrefGivenName
     * @param MicrobiltCriminalReportEnumBoolean $_byMiddleName
     * @param MicrobiltCriminalReportEnumBoolean $_byDOB
     * @param MicrobiltCriminalReportEnumBoolean $_byGovernmentId
     * @param MicrobiltCriminalReportEnumBoolean $_byOtherId
     * @param MicrobiltCriminalReportEnumBoolean $_bySex
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructSubjectConfirmation_Type
     */
    public function __construct($_byName = NULL,$_byFamilyName = NULL,$_byGivenName = NULL,$_byPrefGivenName = NULL,$_byMiddleName = NULL,$_byDOB = NULL,$_byGovernmentId = NULL,$_byOtherId = NULL,$_bySex = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ByName'=>$_byName,'ByFamilyName'=>$_byFamilyName,'ByGivenName'=>$_byGivenName,'ByPrefGivenName'=>$_byPrefGivenName,'ByMiddleName'=>$_byMiddleName,'ByDOB'=>$_byDOB,'ByGovernmentId'=>$_byGovernmentId,'ByOtherId'=>$_byOtherId,'BySex'=>$_bySex,'Message'=>$_message),false);
    }
    /**
     * Get ByName value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByName()
    {
        return $this->ByName;
    }
    /**
     * Set ByName value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byName the ByName
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByName($_byName)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byName))
        {
            return false;
        }
        return ($this->ByName = $_byName);
    }
    /**
     * Get ByFamilyName value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByFamilyName()
    {
        return $this->ByFamilyName;
    }
    /**
     * Set ByFamilyName value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byFamilyName the ByFamilyName
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByFamilyName($_byFamilyName)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byFamilyName))
        {
            return false;
        }
        return ($this->ByFamilyName = $_byFamilyName);
    }
    /**
     * Get ByGivenName value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByGivenName()
    {
        return $this->ByGivenName;
    }
    /**
     * Set ByGivenName value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byGivenName the ByGivenName
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByGivenName($_byGivenName)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byGivenName))
        {
            return false;
        }
        return ($this->ByGivenName = $_byGivenName);
    }
    /**
     * Get ByPrefGivenName value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByPrefGivenName()
    {
        return $this->ByPrefGivenName;
    }
    /**
     * Set ByPrefGivenName value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byPrefGivenName the ByPrefGivenName
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByPrefGivenName($_byPrefGivenName)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byPrefGivenName))
        {
            return false;
        }
        return ($this->ByPrefGivenName = $_byPrefGivenName);
    }
    /**
     * Get ByMiddleName value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByMiddleName()
    {
        return $this->ByMiddleName;
    }
    /**
     * Set ByMiddleName value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byMiddleName the ByMiddleName
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByMiddleName($_byMiddleName)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byMiddleName))
        {
            return false;
        }
        return ($this->ByMiddleName = $_byMiddleName);
    }
    /**
     * Get ByDOB value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByDOB()
    {
        return $this->ByDOB;
    }
    /**
     * Set ByDOB value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byDOB the ByDOB
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByDOB($_byDOB)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byDOB))
        {
            return false;
        }
        return ($this->ByDOB = $_byDOB);
    }
    /**
     * Get ByGovernmentId value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByGovernmentId()
    {
        return $this->ByGovernmentId;
    }
    /**
     * Set ByGovernmentId value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byGovernmentId the ByGovernmentId
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByGovernmentId($_byGovernmentId)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byGovernmentId))
        {
            return false;
        }
        return ($this->ByGovernmentId = $_byGovernmentId);
    }
    /**
     * Get ByOtherId value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getByOtherId()
    {
        return $this->ByOtherId;
    }
    /**
     * Set ByOtherId value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_byOtherId the ByOtherId
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setByOtherId($_byOtherId)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_byOtherId))
        {
            return false;
        }
        return ($this->ByOtherId = $_byOtherId);
    }
    /**
     * Get BySex value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getBySex()
    {
        return $this->BySex;
    }
    /**
     * Set BySex value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_bySex the BySex
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setBySex($_bySex)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_bySex))
        {
            return false;
        }
        return ($this->BySex = $_bySex);
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
     * @return MicrobiltCriminalReportStructSubjectConfirmation_Type
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
