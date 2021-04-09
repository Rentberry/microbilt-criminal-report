<?php
/**
 * File for class MicrobiltCriminalReportStructVictimInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructVictimInfo_Type originally named VictimInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructVictimInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The VictimIsMinor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $VictimIsMinor;
    /**
     * The VictimAge
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VictimAge;
    /**
     * The VictimGender
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VictimGender;
    /**
     * The VictimRelationship
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VictimRelationship;
    /**
     * Constructor method for VictimInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportEnumBoolean $_victimIsMinor
     * @param string $_victimAge
     * @param string $_victimGender
     * @param string $_victimRelationship
     * @return MicrobiltCriminalReportStructVictimInfo_Type
     */
    public function __construct($_victimIsMinor = NULL,$_victimAge = NULL,$_victimGender = NULL,$_victimRelationship = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('VictimIsMinor'=>$_victimIsMinor,'VictimAge'=>$_victimAge,'VictimGender'=>$_victimGender,'VictimRelationship'=>$_victimRelationship),false);
    }
    /**
     * Get VictimIsMinor value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getVictimIsMinor()
    {
        return $this->VictimIsMinor;
    }
    /**
     * Set VictimIsMinor value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_victimIsMinor the VictimIsMinor
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setVictimIsMinor($_victimIsMinor)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_victimIsMinor))
        {
            return false;
        }
        return ($this->VictimIsMinor = $_victimIsMinor);
    }
    /**
     * Get VictimAge value
     * @return string|null
     */
    public function getVictimAge()
    {
        return $this->VictimAge;
    }
    /**
     * Set VictimAge value
     * @param string $_victimAge the VictimAge
     * @return string
     */
    public function setVictimAge($_victimAge)
    {
        return ($this->VictimAge = $_victimAge);
    }
    /**
     * Get VictimGender value
     * @return string|null
     */
    public function getVictimGender()
    {
        return $this->VictimGender;
    }
    /**
     * Set VictimGender value
     * @param string $_victimGender the VictimGender
     * @return string
     */
    public function setVictimGender($_victimGender)
    {
        return ($this->VictimGender = $_victimGender);
    }
    /**
     * Get VictimRelationship value
     * @return string|null
     */
    public function getVictimRelationship()
    {
        return $this->VictimRelationship;
    }
    /**
     * Set VictimRelationship value
     * @param string $_victimRelationship the VictimRelationship
     * @return string
     */
    public function setVictimRelationship($_victimRelationship)
    {
        return ($this->VictimRelationship = $_victimRelationship);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructVictimInfo_Type
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
