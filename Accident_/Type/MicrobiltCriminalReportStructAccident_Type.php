<?php
/**
 * File for class MicrobiltCriminalReportStructAccident_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAccident_Type originally named Accident_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAccident_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AccidentDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $AccidentDt;
    /**
     * The AccidentLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAccidentLocation_Type
     */
    public $AccidentLocation;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPostAddr_Type
     */
    public $Location;
    /**
     * The Damage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Damage;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $Agency;
    /**
     * The FilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $FilingDt;
    /**
     * The TypeFRCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TypeFRCase;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Action;
    /**
     * The AccidentTime
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAccidentTime_Type
     */
    public $AccidentTime;
    /**
     * The RoadType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RoadType;
    /**
     * The NumOfLanes
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfLanes;
    /**
     * The SkidResistance
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SkidResistance;
    /**
     * The FrictionCoarse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FrictionCoarse;
    /**
     * The AverageDailyTraffic
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AverageDailyTraffic;
    /**
     * The AccidentSeverity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AccidentSeverity;
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructConditions_Type
     */
    public $Conditions;
    /**
     * The Investigation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructInvestigation_Type
     */
    public $Investigation;
    /**
     * The AccidentStatistics
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAccidentStatistics_Type
     */
    public $AccidentStatistics;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Accident_Type
     * @see parent::__construct()
     * @param date $_accidentDt
     * @param MicrobiltCriminalReportStructAccidentLocation_Type $_accidentLocation
     * @param MicrobiltCriminalReportStructPostAddr_Type $_location
     * @param string $_damage
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency
     * @param date $_filingDt
     * @param string $_typeFRCase
     * @param string $_action
     * @param MicrobiltCriminalReportStructAccidentTime_Type $_accidentTime
     * @param string $_roadType
     * @param string $_numOfLanes
     * @param string $_skidResistance
     * @param string $_frictionCoarse
     * @param string $_averageDailyTraffic
     * @param string $_accidentSeverity
     * @param MicrobiltCriminalReportStructConditions_Type $_conditions
     * @param MicrobiltCriminalReportStructInvestigation_Type $_investigation
     * @param MicrobiltCriminalReportStructAccidentStatistics_Type $_accidentStatistics
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructAccident_Type
     */
    public function __construct($_accidentDt = NULL,$_accidentLocation = NULL,$_location = NULL,$_damage = NULL,$_agency = NULL,$_filingDt = NULL,$_typeFRCase = NULL,$_action = NULL,$_accidentTime = NULL,$_roadType = NULL,$_numOfLanes = NULL,$_skidResistance = NULL,$_frictionCoarse = NULL,$_averageDailyTraffic = NULL,$_accidentSeverity = NULL,$_conditions = NULL,$_investigation = NULL,$_accidentStatistics = NULL,$_personInfo = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AccidentDt'=>$_accidentDt,'AccidentLocation'=>$_accidentLocation,'Location'=>$_location,'Damage'=>$_damage,'Agency'=>$_agency,'FilingDt'=>$_filingDt,'TypeFRCase'=>$_typeFRCase,'Action'=>$_action,'AccidentTime'=>$_accidentTime,'RoadType'=>$_roadType,'NumOfLanes'=>$_numOfLanes,'SkidResistance'=>$_skidResistance,'FrictionCoarse'=>$_frictionCoarse,'AverageDailyTraffic'=>$_averageDailyTraffic,'AccidentSeverity'=>$_accidentSeverity,'Conditions'=>$_conditions,'Investigation'=>$_investigation,'AccidentStatistics'=>$_accidentStatistics,'PersonInfo'=>$_personInfo,'Message'=>$_message),false);
    }
    /**
     * Get AccidentDt value
     * @return date|null
     */
    public function getAccidentDt()
    {
        return $this->AccidentDt;
    }
    /**
     * Set AccidentDt value
     * @param date $_accidentDt the AccidentDt
     * @return date
     */
    public function setAccidentDt($_accidentDt)
    {
        return ($this->AccidentDt = $_accidentDt);
    }
    /**
     * Get AccidentLocation value
     * @return MicrobiltCriminalReportStructAccidentLocation_Type|null
     */
    public function getAccidentLocation()
    {
        return $this->AccidentLocation;
    }
    /**
     * Set AccidentLocation value
     * @param MicrobiltCriminalReportStructAccidentLocation_Type $_accidentLocation the AccidentLocation
     * @return MicrobiltCriminalReportStructAccidentLocation_Type
     */
    public function setAccidentLocation($_accidentLocation)
    {
        return ($this->AccidentLocation = $_accidentLocation);
    }
    /**
     * Get Location value
     * @return MicrobiltCriminalReportStructPostAddr_Type|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param MicrobiltCriminalReportStructPostAddr_Type $_location the Location
     * @return MicrobiltCriminalReportStructPostAddr_Type
     */
    public function setLocation($_location)
    {
        return ($this->Location = $_location);
    }
    /**
     * Get Damage value
     * @return string|null
     */
    public function getDamage()
    {
        return $this->Damage;
    }
    /**
     * Set Damage value
     * @param string $_damage the Damage
     * @return string
     */
    public function setDamage($_damage)
    {
        return ($this->Damage = $_damage);
    }
    /**
     * Get Agency value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency the Agency
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setAgency($_agency)
    {
        return ($this->Agency = $_agency);
    }
    /**
     * Get FilingDt value
     * @return date|null
     */
    public function getFilingDt()
    {
        return $this->FilingDt;
    }
    /**
     * Set FilingDt value
     * @param date $_filingDt the FilingDt
     * @return date
     */
    public function setFilingDt($_filingDt)
    {
        return ($this->FilingDt = $_filingDt);
    }
    /**
     * Get TypeFRCase value
     * @return string|null
     */
    public function getTypeFRCase()
    {
        return $this->TypeFRCase;
    }
    /**
     * Set TypeFRCase value
     * @param string $_typeFRCase the TypeFRCase
     * @return string
     */
    public function setTypeFRCase($_typeFRCase)
    {
        return ($this->TypeFRCase = $_typeFRCase);
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
     * Get AccidentTime value
     * @return MicrobiltCriminalReportStructAccidentTime_Type|null
     */
    public function getAccidentTime()
    {
        return $this->AccidentTime;
    }
    /**
     * Set AccidentTime value
     * @param MicrobiltCriminalReportStructAccidentTime_Type $_accidentTime the AccidentTime
     * @return MicrobiltCriminalReportStructAccidentTime_Type
     */
    public function setAccidentTime($_accidentTime)
    {
        return ($this->AccidentTime = $_accidentTime);
    }
    /**
     * Get RoadType value
     * @return string|null
     */
    public function getRoadType()
    {
        return $this->RoadType;
    }
    /**
     * Set RoadType value
     * @param string $_roadType the RoadType
     * @return string
     */
    public function setRoadType($_roadType)
    {
        return ($this->RoadType = $_roadType);
    }
    /**
     * Get NumOfLanes value
     * @return string|null
     */
    public function getNumOfLanes()
    {
        return $this->NumOfLanes;
    }
    /**
     * Set NumOfLanes value
     * @param string $_numOfLanes the NumOfLanes
     * @return string
     */
    public function setNumOfLanes($_numOfLanes)
    {
        return ($this->NumOfLanes = $_numOfLanes);
    }
    /**
     * Get SkidResistance value
     * @return string|null
     */
    public function getSkidResistance()
    {
        return $this->SkidResistance;
    }
    /**
     * Set SkidResistance value
     * @param string $_skidResistance the SkidResistance
     * @return string
     */
    public function setSkidResistance($_skidResistance)
    {
        return ($this->SkidResistance = $_skidResistance);
    }
    /**
     * Get FrictionCoarse value
     * @return string|null
     */
    public function getFrictionCoarse()
    {
        return $this->FrictionCoarse;
    }
    /**
     * Set FrictionCoarse value
     * @param string $_frictionCoarse the FrictionCoarse
     * @return string
     */
    public function setFrictionCoarse($_frictionCoarse)
    {
        return ($this->FrictionCoarse = $_frictionCoarse);
    }
    /**
     * Get AverageDailyTraffic value
     * @return string|null
     */
    public function getAverageDailyTraffic()
    {
        return $this->AverageDailyTraffic;
    }
    /**
     * Set AverageDailyTraffic value
     * @param string $_averageDailyTraffic the AverageDailyTraffic
     * @return string
     */
    public function setAverageDailyTraffic($_averageDailyTraffic)
    {
        return ($this->AverageDailyTraffic = $_averageDailyTraffic);
    }
    /**
     * Get AccidentSeverity value
     * @return string|null
     */
    public function getAccidentSeverity()
    {
        return $this->AccidentSeverity;
    }
    /**
     * Set AccidentSeverity value
     * @param string $_accidentSeverity the AccidentSeverity
     * @return string
     */
    public function setAccidentSeverity($_accidentSeverity)
    {
        return ($this->AccidentSeverity = $_accidentSeverity);
    }
    /**
     * Get Conditions value
     * @return MicrobiltCriminalReportStructConditions_Type|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }
    /**
     * Set Conditions value
     * @param MicrobiltCriminalReportStructConditions_Type $_conditions the Conditions
     * @return MicrobiltCriminalReportStructConditions_Type
     */
    public function setConditions($_conditions)
    {
        return ($this->Conditions = $_conditions);
    }
    /**
     * Get Investigation value
     * @return MicrobiltCriminalReportStructInvestigation_Type|null
     */
    public function getInvestigation()
    {
        return $this->Investigation;
    }
    /**
     * Set Investigation value
     * @param MicrobiltCriminalReportStructInvestigation_Type $_investigation the Investigation
     * @return MicrobiltCriminalReportStructInvestigation_Type
     */
    public function setInvestigation($_investigation)
    {
        return ($this->Investigation = $_investigation);
    }
    /**
     * Get AccidentStatistics value
     * @return MicrobiltCriminalReportStructAccidentStatistics_Type|null
     */
    public function getAccidentStatistics()
    {
        return $this->AccidentStatistics;
    }
    /**
     * Set AccidentStatistics value
     * @param MicrobiltCriminalReportStructAccidentStatistics_Type $_accidentStatistics the AccidentStatistics
     * @return MicrobiltCriminalReportStructAccidentStatistics_Type
     */
    public function setAccidentStatistics($_accidentStatistics)
    {
        return ($this->AccidentStatistics = $_accidentStatistics);
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
     * @return MicrobiltCriminalReportStructAccident_Type
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
