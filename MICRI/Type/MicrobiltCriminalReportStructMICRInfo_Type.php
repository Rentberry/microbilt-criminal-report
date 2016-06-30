<?php
/**
 * File for class MicrobiltCriminalReportStructMICRInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructMICRInfo_Type originally named MICRInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructMICRInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MICRType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MICRType;
    /**
     * The MICRNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MICRNum;
    /**
     * The TOADValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TOADValue;
    /**
     * The RoutingNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RoutingNumber;
    /**
     * The AccountNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AccountNum;
    /**
     * The SwipedInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $SwipedInd;
    /**
     * The FullMICRLine
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FullMICRLine;
    /**
     * Constructor method for MICRInfo_Type
     * @see parent::__construct()
     * @param string $_mICRType
     * @param string $_mICRNum
     * @param string $_tOADValue
     * @param string $_routingNumber
     * @param string $_accountNum
     * @param MicrobiltCriminalReportEnumBoolean $_swipedInd
     * @param string $_fullMICRLine
     * @return MicrobiltCriminalReportStructMICRInfo_Type
     */
    public function __construct($_mICRType = NULL,$_mICRNum = NULL,$_tOADValue = NULL,$_routingNumber = NULL,$_accountNum = NULL,$_swipedInd = NULL,$_fullMICRLine = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MICRType'=>$_mICRType,'MICRNum'=>$_mICRNum,'TOADValue'=>$_tOADValue,'RoutingNumber'=>$_routingNumber,'AccountNum'=>$_accountNum,'SwipedInd'=>$_swipedInd,'FullMICRLine'=>$_fullMICRLine),false);
    }
    /**
     * Get MICRType value
     * @return string|null
     */
    public function getMICRType()
    {
        return $this->MICRType;
    }
    /**
     * Set MICRType value
     * @param string $_mICRType the MICRType
     * @return string
     */
    public function setMICRType($_mICRType)
    {
        return ($this->MICRType = $_mICRType);
    }
    /**
     * Get MICRNum value
     * @return string|null
     */
    public function getMICRNum()
    {
        return $this->MICRNum;
    }
    /**
     * Set MICRNum value
     * @param string $_mICRNum the MICRNum
     * @return string
     */
    public function setMICRNum($_mICRNum)
    {
        return ($this->MICRNum = $_mICRNum);
    }
    /**
     * Get TOADValue value
     * @return string|null
     */
    public function getTOADValue()
    {
        return $this->TOADValue;
    }
    /**
     * Set TOADValue value
     * @param string $_tOADValue the TOADValue
     * @return string
     */
    public function setTOADValue($_tOADValue)
    {
        return ($this->TOADValue = $_tOADValue);
    }
    /**
     * Get RoutingNumber value
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }
    /**
     * Set RoutingNumber value
     * @param string $_routingNumber the RoutingNumber
     * @return string
     */
    public function setRoutingNumber($_routingNumber)
    {
        return ($this->RoutingNumber = $_routingNumber);
    }
    /**
     * Get AccountNum value
     * @return string|null
     */
    public function getAccountNum()
    {
        return $this->AccountNum;
    }
    /**
     * Set AccountNum value
     * @param string $_accountNum the AccountNum
     * @return string
     */
    public function setAccountNum($_accountNum)
    {
        return ($this->AccountNum = $_accountNum);
    }
    /**
     * Get SwipedInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getSwipedInd()
    {
        return $this->SwipedInd;
    }
    /**
     * Set SwipedInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_swipedInd the SwipedInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setSwipedInd($_swipedInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_swipedInd))
        {
            return false;
        }
        return ($this->SwipedInd = $_swipedInd);
    }
    /**
     * Get FullMICRLine value
     * @return string|null
     */
    public function getFullMICRLine()
    {
        return $this->FullMICRLine;
    }
    /**
     * Set FullMICRLine value
     * @param string $_fullMICRLine the FullMICRLine
     * @return string
     */
    public function setFullMICRLine($_fullMICRLine)
    {
        return ($this->FullMICRLine = $_fullMICRLine);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructMICRInfo_Type
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
