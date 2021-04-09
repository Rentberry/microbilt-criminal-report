<?php
/**
 * File for class MicrobiltCriminalReportStructSexualOffense_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructSexualOffense_Type originally named SexualOffense_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructSexualOffense_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The CriminalCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCriminalCase_Type
     */
    public $CriminalCase;
    /**
     * The RegistrationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructRegistrationDetails_Type
     */
    public $RegistrationDetails;
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructVehicleInfo_Type
     */
    public $VehicleInfo;
    /**
     * The OffenderRef
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOffenderRef_Type
     */
    public $OffenderRef;
    /**
     * Constructor method for SexualOffense_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructCriminalCase_Type $_criminalCase
     * @param MicrobiltCriminalReportStructRegistrationDetails_Type $_registrationDetails
     * @param MicrobiltCriminalReportStructVehicleInfo_Type $_vehicleInfo
     * @param MicrobiltCriminalReportStructOffenderRef_Type $_offenderRef
     * @return MicrobiltCriminalReportStructSexualOffense_Type
     */
    public function __construct($_personInfo = NULL,$_criminalCase = NULL,$_registrationDetails = NULL,$_vehicleInfo = NULL,$_offenderRef = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'CriminalCase'=>$_criminalCase,'RegistrationDetails'=>$_registrationDetails,'VehicleInfo'=>$_vehicleInfo,'OffenderRef'=>$_offenderRef),false);
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
     * Get RegistrationDetails value
     * @return MicrobiltCriminalReportStructRegistrationDetails_Type|null
     */
    public function getRegistrationDetails()
    {
        return $this->RegistrationDetails;
    }
    /**
     * Set RegistrationDetails value
     * @param MicrobiltCriminalReportStructRegistrationDetails_Type $_registrationDetails the RegistrationDetails
     * @return MicrobiltCriminalReportStructRegistrationDetails_Type
     */
    public function setRegistrationDetails($_registrationDetails)
    {
        return ($this->RegistrationDetails = $_registrationDetails);
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
     * Get OffenderRef value
     * @return MicrobiltCriminalReportStructOffenderRef_Type|null
     */
    public function getOffenderRef()
    {
        return $this->OffenderRef;
    }
    /**
     * Set OffenderRef value
     * @param MicrobiltCriminalReportStructOffenderRef_Type $_offenderRef the OffenderRef
     * @return MicrobiltCriminalReportStructOffenderRef_Type
     */
    public function setOffenderRef($_offenderRef)
    {
        return ($this->OffenderRef = $_offenderRef);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructSexualOffense_Type
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
