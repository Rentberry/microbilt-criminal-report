<?php
/**
 * File for class MicrobiltCriminalReportStructCivilCourt_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCivilCourt_Type originally named CivilCourt_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCivilCourt_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Parties
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructParties_Type
     */
    public $Parties;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructEvent_Type
     */
    public $Event;
    /**
     * The CriminalCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCriminalCase_Type
     */
    public $CriminalCase;
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructVehicleInfo_Type
     */
    public $VehicleInfo;
    /**
     * Constructor method for CivilCourt_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructParties_Type $_parties
     * @param MicrobiltCriminalReportStructEvent_Type $_event
     * @param MicrobiltCriminalReportStructCriminalCase_Type $_criminalCase
     * @param MicrobiltCriminalReportStructVehicleInfo_Type $_vehicleInfo
     * @return MicrobiltCriminalReportStructCivilCourt_Type
     */
    public function __construct($_parties = NULL,$_event = NULL,$_criminalCase = NULL,$_vehicleInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Parties'=>$_parties,'Event'=>$_event,'CriminalCase'=>$_criminalCase,'VehicleInfo'=>$_vehicleInfo),false);
    }
    /**
     * Get Parties value
     * @return MicrobiltCriminalReportStructParties_Type|null
     */
    public function getParties()
    {
        return $this->Parties;
    }
    /**
     * Set Parties value
     * @param MicrobiltCriminalReportStructParties_Type $_parties the Parties
     * @return MicrobiltCriminalReportStructParties_Type
     */
    public function setParties($_parties)
    {
        return ($this->Parties = $_parties);
    }
    /**
     * Get Event value
     * @return MicrobiltCriminalReportStructEvent_Type|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param MicrobiltCriminalReportStructEvent_Type $_event the Event
     * @return MicrobiltCriminalReportStructEvent_Type
     */
    public function setEvent($_event)
    {
        return ($this->Event = $_event);
    }
    /**
     * Get CriminalCase value
     * @return MicrobiltCriminalReportStructCriminalCase_Type|null
     */
    public function getCriminalCase()
    {
        return $this->CriminalCase;
    }
    /**
     * Set CriminalCase value
     * @param MicrobiltCriminalReportStructCriminalCase_Type $_criminalCase the CriminalCase
     * @return MicrobiltCriminalReportStructCriminalCase_Type
     */
    public function setCriminalCase($_criminalCase)
    {
        return ($this->CriminalCase = $_criminalCase);
    }
    /**
     * Get VehicleInfo value
     * @return MicrobiltCriminalReportStructVehicleInfo_Type|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @param MicrobiltCriminalReportStructVehicleInfo_Type $_vehicleInfo the VehicleInfo
     * @return MicrobiltCriminalReportStructVehicleInfo_Type
     */
    public function setVehicleInfo($_vehicleInfo)
    {
        return ($this->VehicleInfo = $_vehicleInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCivilCourt_Type
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
