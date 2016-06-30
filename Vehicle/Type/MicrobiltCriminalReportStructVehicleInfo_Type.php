<?php
/**
 * File for class MicrobiltCriminalReportStructVehicleInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructVehicleInfo_Type originally named VehicleInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructVehicleInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AutomobileInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAutomobileInfo_Type
     */
    public $AutomobileInfo;
    /**
     * The VesselInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructVesselInfo_Type
     */
    public $VesselInfo;
    /**
     * The AircraftInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructAircraftInfo_Type
     */
    public $AircraftInfo;
    /**
     * Constructor method for VehicleInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructAutomobileInfo_Type $_automobileInfo
     * @param MicrobiltCriminalReportStructVesselInfo_Type $_vesselInfo
     * @param MicrobiltCriminalReportStructAircraftInfo_Type $_aircraftInfo
     * @return MicrobiltCriminalReportStructVehicleInfo_Type
     */
    public function __construct($_automobileInfo = NULL,$_vesselInfo = NULL,$_aircraftInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AutomobileInfo'=>$_automobileInfo,'VesselInfo'=>$_vesselInfo,'AircraftInfo'=>$_aircraftInfo),false);
    }
    /**
     * Get AutomobileInfo value
     * @return MicrobiltCriminalReportStructAutomobileInfo_Type|null
     */
    public function getAutomobileInfo()
    {
        return $this->AutomobileInfo;
    }
    /**
     * Set AutomobileInfo value
     * @param MicrobiltCriminalReportStructAutomobileInfo_Type $_automobileInfo the AutomobileInfo
     * @return MicrobiltCriminalReportStructAutomobileInfo_Type
     */
    public function setAutomobileInfo($_automobileInfo)
    {
        return ($this->AutomobileInfo = $_automobileInfo);
    }
    /**
     * Get VesselInfo value
     * @return MicrobiltCriminalReportStructVesselInfo_Type|null
     */
    public function getVesselInfo()
    {
        return $this->VesselInfo;
    }
    /**
     * Set VesselInfo value
     * @param MicrobiltCriminalReportStructVesselInfo_Type $_vesselInfo the VesselInfo
     * @return MicrobiltCriminalReportStructVesselInfo_Type
     */
    public function setVesselInfo($_vesselInfo)
    {
        return ($this->VesselInfo = $_vesselInfo);
    }
    /**
     * Get AircraftInfo value
     * @return MicrobiltCriminalReportStructAircraftInfo_Type|null
     */
    public function getAircraftInfo()
    {
        return $this->AircraftInfo;
    }
    /**
     * Set AircraftInfo value
     * @param MicrobiltCriminalReportStructAircraftInfo_Type $_aircraftInfo the AircraftInfo
     * @return MicrobiltCriminalReportStructAircraftInfo_Type
     */
    public function setAircraftInfo($_aircraftInfo)
    {
        return ($this->AircraftInfo = $_aircraftInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructVehicleInfo_Type
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
