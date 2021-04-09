<?php
/**
 * File for class MicrobiltCriminalReportStructCommercialEntityInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCommercialEntityInfo_Type originally named CommercialEntityInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCommercialEntityInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The RelationshipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RelationshipType;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $DisputeInd;
    /**
     * The CommercialCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $CommercialCodes;
    /**
     * Constructor method for CommercialEntityInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_relationshipType
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd
     * @param MicrobiltCriminalReportStructMessage_Type $_commercialCodes
     * @return MicrobiltCriminalReportStructCommercialEntityInfo_Type
     */
    public function __construct($_msgClass = NULL,$_relationshipType = NULL,$_orgInfo = NULL,$_commercialAmounts = NULL,$_commercialDates = NULL,$_disputeInd = NULL,$_commercialCodes = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'RelationshipType'=>$_relationshipType,'OrgInfo'=>$_orgInfo,'CommercialAmounts'=>$_commercialAmounts,'CommercialDates'=>$_commercialDates,'DisputeInd'=>$_disputeInd,'CommercialCodes'=>$_commercialCodes),false);
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
     * Get RelationshipType value
     * @return string|null
     */
    public function getRelationshipType()
    {
        return $this->RelationshipType;
    }
    /**
     * Set RelationshipType value
     * @param string $_relationshipType the RelationshipType
     * @return string
     */
    public function setRelationshipType($_relationshipType)
    {
        return ($this->RelationshipType = $_relationshipType);
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
     * Get CommercialAmounts value
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get CommercialDates value
     * @return MicrobiltCriminalReportStructCommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param MicrobiltCriminalReportStructCommercialDates_Type $_commercialDates the CommercialDates
     * @return MicrobiltCriminalReportStructCommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get DisputeInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
    }
    /**
     * Get CommercialCodes value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getCommercialCodes()
    {
        return $this->CommercialCodes;
    }
    /**
     * Set CommercialCodes value
     * @param MicrobiltCriminalReportStructMessage_Type $_commercialCodes the CommercialCodes
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setCommercialCodes($_commercialCodes)
    {
        return ($this->CommercialCodes = $_commercialCodes);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCommercialEntityInfo_Type
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
