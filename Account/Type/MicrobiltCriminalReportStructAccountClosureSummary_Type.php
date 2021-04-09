<?php
/**
 * File for class MicrobiltCriminalReportStructAccountClosureSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAccountClosureSummary_Type originally named AccountClosureSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAccountClosureSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The NumClosuresPast30Days
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast30Days;
    /**
     * The NumClosuresPast60Days
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast60Days;
    /**
     * The NumClosuresPast90Days
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast90Days;
    /**
     * The NumClosuresPast180Days
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast180Days;
    /**
     * The NumClosuresPast1Yr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast1Yr;
    /**
     * The NumClosuresPast2Yrs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast2Yrs;
    /**
     * The NumClosuresPast3Yrs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast3Yrs;
    /**
     * The NumClosuresPast5Yrs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumClosuresPast5Yrs;
    /**
     * The FraudClosureQty
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FraudClosureQty;
    /**
     * The DaysSinceMostRecentClosure
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DaysSinceMostRecentClosure;
    /**
     * The DaysSinceFirstClosure
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DaysSinceFirstClosure;
    /**
     * The AvgDaysBetweenClosures
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AvgDaysBetweenClosures;
    /**
     * The CountClosureRptsDisputed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CountClosureRptsDisputed;
    /**
     * The CountClosureRptsDisputedButResolved
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CountClosureRptsDisputedButResolved;
    /**
     * Constructor method for AccountClosureSummary_Type
     * @see parent::__construct()
     * @param string $_numClosuresPast30Days
     * @param string $_numClosuresPast60Days
     * @param string $_numClosuresPast90Days
     * @param string $_numClosuresPast180Days
     * @param string $_numClosuresPast1Yr
     * @param string $_numClosuresPast2Yrs
     * @param string $_numClosuresPast3Yrs
     * @param string $_numClosuresPast5Yrs
     * @param string $_fraudClosureQty
     * @param string $_daysSinceMostRecentClosure
     * @param string $_daysSinceFirstClosure
     * @param string $_avgDaysBetweenClosures
     * @param string $_countClosureRptsDisputed
     * @param string $_countClosureRptsDisputedButResolved
     * @return MicrobiltCriminalReportStructAccountClosureSummary_Type
     */
    public function __construct($_numClosuresPast30Days = NULL,$_numClosuresPast60Days = NULL,$_numClosuresPast90Days = NULL,$_numClosuresPast180Days = NULL,$_numClosuresPast1Yr = NULL,$_numClosuresPast2Yrs = NULL,$_numClosuresPast3Yrs = NULL,$_numClosuresPast5Yrs = NULL,$_fraudClosureQty = NULL,$_daysSinceMostRecentClosure = NULL,$_daysSinceFirstClosure = NULL,$_avgDaysBetweenClosures = NULL,$_countClosureRptsDisputed = NULL,$_countClosureRptsDisputedButResolved = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('NumClosuresPast30Days'=>$_numClosuresPast30Days,'NumClosuresPast60Days'=>$_numClosuresPast60Days,'NumClosuresPast90Days'=>$_numClosuresPast90Days,'NumClosuresPast180Days'=>$_numClosuresPast180Days,'NumClosuresPast1Yr'=>$_numClosuresPast1Yr,'NumClosuresPast2Yrs'=>$_numClosuresPast2Yrs,'NumClosuresPast3Yrs'=>$_numClosuresPast3Yrs,'NumClosuresPast5Yrs'=>$_numClosuresPast5Yrs,'FraudClosureQty'=>$_fraudClosureQty,'DaysSinceMostRecentClosure'=>$_daysSinceMostRecentClosure,'DaysSinceFirstClosure'=>$_daysSinceFirstClosure,'AvgDaysBetweenClosures'=>$_avgDaysBetweenClosures,'CountClosureRptsDisputed'=>$_countClosureRptsDisputed,'CountClosureRptsDisputedButResolved'=>$_countClosureRptsDisputedButResolved),false);
    }
    /**
     * Get NumClosuresPast30Days value
     * @return string|null
     */
    public function getNumClosuresPast30Days()
    {
        return $this->NumClosuresPast30Days;
    }
    /**
     * Set NumClosuresPast30Days value
     * @param string $_numClosuresPast30Days the NumClosuresPast30Days
     * @return string
     */
    public function setNumClosuresPast30Days($_numClosuresPast30Days)
    {
        return ($this->NumClosuresPast30Days = $_numClosuresPast30Days);
    }
    /**
     * Get NumClosuresPast60Days value
     * @return string|null
     */
    public function getNumClosuresPast60Days()
    {
        return $this->NumClosuresPast60Days;
    }
    /**
     * Set NumClosuresPast60Days value
     * @param string $_numClosuresPast60Days the NumClosuresPast60Days
     * @return string
     */
    public function setNumClosuresPast60Days($_numClosuresPast60Days)
    {
        return ($this->NumClosuresPast60Days = $_numClosuresPast60Days);
    }
    /**
     * Get NumClosuresPast90Days value
     * @return string|null
     */
    public function getNumClosuresPast90Days()
    {
        return $this->NumClosuresPast90Days;
    }
    /**
     * Set NumClosuresPast90Days value
     * @param string $_numClosuresPast90Days the NumClosuresPast90Days
     * @return string
     */
    public function setNumClosuresPast90Days($_numClosuresPast90Days)
    {
        return ($this->NumClosuresPast90Days = $_numClosuresPast90Days);
    }
    /**
     * Get NumClosuresPast180Days value
     * @return string|null
     */
    public function getNumClosuresPast180Days()
    {
        return $this->NumClosuresPast180Days;
    }
    /**
     * Set NumClosuresPast180Days value
     * @param string $_numClosuresPast180Days the NumClosuresPast180Days
     * @return string
     */
    public function setNumClosuresPast180Days($_numClosuresPast180Days)
    {
        return ($this->NumClosuresPast180Days = $_numClosuresPast180Days);
    }
    /**
     * Get NumClosuresPast1Yr value
     * @return string|null
     */
    public function getNumClosuresPast1Yr()
    {
        return $this->NumClosuresPast1Yr;
    }
    /**
     * Set NumClosuresPast1Yr value
     * @param string $_numClosuresPast1Yr the NumClosuresPast1Yr
     * @return string
     */
    public function setNumClosuresPast1Yr($_numClosuresPast1Yr)
    {
        return ($this->NumClosuresPast1Yr = $_numClosuresPast1Yr);
    }
    /**
     * Get NumClosuresPast2Yrs value
     * @return string|null
     */
    public function getNumClosuresPast2Yrs()
    {
        return $this->NumClosuresPast2Yrs;
    }
    /**
     * Set NumClosuresPast2Yrs value
     * @param string $_numClosuresPast2Yrs the NumClosuresPast2Yrs
     * @return string
     */
    public function setNumClosuresPast2Yrs($_numClosuresPast2Yrs)
    {
        return ($this->NumClosuresPast2Yrs = $_numClosuresPast2Yrs);
    }
    /**
     * Get NumClosuresPast3Yrs value
     * @return string|null
     */
    public function getNumClosuresPast3Yrs()
    {
        return $this->NumClosuresPast3Yrs;
    }
    /**
     * Set NumClosuresPast3Yrs value
     * @param string $_numClosuresPast3Yrs the NumClosuresPast3Yrs
     * @return string
     */
    public function setNumClosuresPast3Yrs($_numClosuresPast3Yrs)
    {
        return ($this->NumClosuresPast3Yrs = $_numClosuresPast3Yrs);
    }
    /**
     * Get NumClosuresPast5Yrs value
     * @return string|null
     */
    public function getNumClosuresPast5Yrs()
    {
        return $this->NumClosuresPast5Yrs;
    }
    /**
     * Set NumClosuresPast5Yrs value
     * @param string $_numClosuresPast5Yrs the NumClosuresPast5Yrs
     * @return string
     */
    public function setNumClosuresPast5Yrs($_numClosuresPast5Yrs)
    {
        return ($this->NumClosuresPast5Yrs = $_numClosuresPast5Yrs);
    }
    /**
     * Get FraudClosureQty value
     * @return string|null
     */
    public function getFraudClosureQty()
    {
        return $this->FraudClosureQty;
    }
    /**
     * Set FraudClosureQty value
     * @param string $_fraudClosureQty the FraudClosureQty
     * @return string
     */
    public function setFraudClosureQty($_fraudClosureQty)
    {
        return ($this->FraudClosureQty = $_fraudClosureQty);
    }
    /**
     * Get DaysSinceMostRecentClosure value
     * @return string|null
     */
    public function getDaysSinceMostRecentClosure()
    {
        return $this->DaysSinceMostRecentClosure;
    }
    /**
     * Set DaysSinceMostRecentClosure value
     * @param string $_daysSinceMostRecentClosure the DaysSinceMostRecentClosure
     * @return string
     */
    public function setDaysSinceMostRecentClosure($_daysSinceMostRecentClosure)
    {
        return ($this->DaysSinceMostRecentClosure = $_daysSinceMostRecentClosure);
    }
    /**
     * Get DaysSinceFirstClosure value
     * @return string|null
     */
    public function getDaysSinceFirstClosure()
    {
        return $this->DaysSinceFirstClosure;
    }
    /**
     * Set DaysSinceFirstClosure value
     * @param string $_daysSinceFirstClosure the DaysSinceFirstClosure
     * @return string
     */
    public function setDaysSinceFirstClosure($_daysSinceFirstClosure)
    {
        return ($this->DaysSinceFirstClosure = $_daysSinceFirstClosure);
    }
    /**
     * Get AvgDaysBetweenClosures value
     * @return string|null
     */
    public function getAvgDaysBetweenClosures()
    {
        return $this->AvgDaysBetweenClosures;
    }
    /**
     * Set AvgDaysBetweenClosures value
     * @param string $_avgDaysBetweenClosures the AvgDaysBetweenClosures
     * @return string
     */
    public function setAvgDaysBetweenClosures($_avgDaysBetweenClosures)
    {
        return ($this->AvgDaysBetweenClosures = $_avgDaysBetweenClosures);
    }
    /**
     * Get CountClosureRptsDisputed value
     * @return string|null
     */
    public function getCountClosureRptsDisputed()
    {
        return $this->CountClosureRptsDisputed;
    }
    /**
     * Set CountClosureRptsDisputed value
     * @param string $_countClosureRptsDisputed the CountClosureRptsDisputed
     * @return string
     */
    public function setCountClosureRptsDisputed($_countClosureRptsDisputed)
    {
        return ($this->CountClosureRptsDisputed = $_countClosureRptsDisputed);
    }
    /**
     * Get CountClosureRptsDisputedButResolved value
     * @return string|null
     */
    public function getCountClosureRptsDisputedButResolved()
    {
        return $this->CountClosureRptsDisputedButResolved;
    }
    /**
     * Set CountClosureRptsDisputedButResolved value
     * @param string $_countClosureRptsDisputedButResolved the CountClosureRptsDisputedButResolved
     * @return string
     */
    public function setCountClosureRptsDisputedButResolved($_countClosureRptsDisputedButResolved)
    {
        return ($this->CountClosureRptsDisputedButResolved = $_countClosureRptsDisputedButResolved);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAccountClosureSummary_Type
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
