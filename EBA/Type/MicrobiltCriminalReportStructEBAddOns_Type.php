<?php
/**
 * File for class MicrobiltCriminalReportStructEBAddOns_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructEBAddOns_Type originally named EBAddOns_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructEBAddOns_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ReqAR
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqAR;
    /**
     * The ReqBOP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqBOP;
    /**
     * The ReqBP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqBP;
    /**
     * The ReqBSUM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqBSUM;
    /**
     * The ReqDS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReqDS;
    /**
     * The ReqIR
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqIR;
    /**
     * The ReqITP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqITP;
    /**
     * The ReqLOS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqLOS;
    /**
     * The ReqMC
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReqMC;
    /**
     * The ReqRLCD
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqRLCD;
    /**
     * The ReqSA
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqSA;
    /**
     * The ReqUCC
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqUCC;
    /**
     * The ReqDI
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ReqDI;
    /**
     * Constructor method for EBAddOns_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportEnumBoolean $_reqAR
     * @param MicrobiltCriminalReportEnumBoolean $_reqBOP
     * @param MicrobiltCriminalReportEnumBoolean $_reqBP
     * @param MicrobiltCriminalReportEnumBoolean $_reqBSUM
     * @param string $_reqDS
     * @param MicrobiltCriminalReportEnumBoolean $_reqIR
     * @param MicrobiltCriminalReportEnumBoolean $_reqITP
     * @param MicrobiltCriminalReportEnumBoolean $_reqLOS
     * @param string $_reqMC
     * @param MicrobiltCriminalReportEnumBoolean $_reqRLCD
     * @param MicrobiltCriminalReportEnumBoolean $_reqSA
     * @param MicrobiltCriminalReportEnumBoolean $_reqUCC
     * @param MicrobiltCriminalReportEnumBoolean $_reqDI
     * @return MicrobiltCriminalReportStructEBAddOns_Type
     */
    public function __construct($_reqAR = NULL,$_reqBOP = NULL,$_reqBP = NULL,$_reqBSUM = NULL,$_reqDS = NULL,$_reqIR = NULL,$_reqITP = NULL,$_reqLOS = NULL,$_reqMC = NULL,$_reqRLCD = NULL,$_reqSA = NULL,$_reqUCC = NULL,$_reqDI = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ReqAR'=>$_reqAR,'ReqBOP'=>$_reqBOP,'ReqBP'=>$_reqBP,'ReqBSUM'=>$_reqBSUM,'ReqDS'=>$_reqDS,'ReqIR'=>$_reqIR,'ReqITP'=>$_reqITP,'ReqLOS'=>$_reqLOS,'ReqMC'=>$_reqMC,'ReqRLCD'=>$_reqRLCD,'ReqSA'=>$_reqSA,'ReqUCC'=>$_reqUCC,'ReqDI'=>$_reqDI),false);
    }
    /**
     * Get ReqAR value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqAR()
    {
        return $this->ReqAR;
    }
    /**
     * Set ReqAR value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqAR the ReqAR
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqAR($_reqAR)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqAR))
        {
            return false;
        }
        return ($this->ReqAR = $_reqAR);
    }
    /**
     * Get ReqBOP value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqBOP()
    {
        return $this->ReqBOP;
    }
    /**
     * Set ReqBOP value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqBOP the ReqBOP
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqBOP($_reqBOP)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqBOP))
        {
            return false;
        }
        return ($this->ReqBOP = $_reqBOP);
    }
    /**
     * Get ReqBP value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqBP()
    {
        return $this->ReqBP;
    }
    /**
     * Set ReqBP value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqBP the ReqBP
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqBP($_reqBP)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqBP))
        {
            return false;
        }
        return ($this->ReqBP = $_reqBP);
    }
    /**
     * Get ReqBSUM value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqBSUM()
    {
        return $this->ReqBSUM;
    }
    /**
     * Set ReqBSUM value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqBSUM the ReqBSUM
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqBSUM($_reqBSUM)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqBSUM))
        {
            return false;
        }
        return ($this->ReqBSUM = $_reqBSUM);
    }
    /**
     * Get ReqDS value
     * @return string|null
     */
    public function getReqDS()
    {
        return $this->ReqDS;
    }
    /**
     * Set ReqDS value
     * @param string $_reqDS the ReqDS
     * @return string
     */
    public function setReqDS($_reqDS)
    {
        return ($this->ReqDS = $_reqDS);
    }
    /**
     * Get ReqIR value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqIR()
    {
        return $this->ReqIR;
    }
    /**
     * Set ReqIR value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqIR the ReqIR
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqIR($_reqIR)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqIR))
        {
            return false;
        }
        return ($this->ReqIR = $_reqIR);
    }
    /**
     * Get ReqITP value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqITP()
    {
        return $this->ReqITP;
    }
    /**
     * Set ReqITP value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqITP the ReqITP
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqITP($_reqITP)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqITP))
        {
            return false;
        }
        return ($this->ReqITP = $_reqITP);
    }
    /**
     * Get ReqLOS value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqLOS()
    {
        return $this->ReqLOS;
    }
    /**
     * Set ReqLOS value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqLOS the ReqLOS
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqLOS($_reqLOS)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqLOS))
        {
            return false;
        }
        return ($this->ReqLOS = $_reqLOS);
    }
    /**
     * Get ReqMC value
     * @return string|null
     */
    public function getReqMC()
    {
        return $this->ReqMC;
    }
    /**
     * Set ReqMC value
     * @param string $_reqMC the ReqMC
     * @return string
     */
    public function setReqMC($_reqMC)
    {
        return ($this->ReqMC = $_reqMC);
    }
    /**
     * Get ReqRLCD value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqRLCD()
    {
        return $this->ReqRLCD;
    }
    /**
     * Set ReqRLCD value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqRLCD the ReqRLCD
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqRLCD($_reqRLCD)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqRLCD))
        {
            return false;
        }
        return ($this->ReqRLCD = $_reqRLCD);
    }
    /**
     * Get ReqSA value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqSA()
    {
        return $this->ReqSA;
    }
    /**
     * Set ReqSA value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqSA the ReqSA
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqSA($_reqSA)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqSA))
        {
            return false;
        }
        return ($this->ReqSA = $_reqSA);
    }
    /**
     * Get ReqUCC value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqUCC()
    {
        return $this->ReqUCC;
    }
    /**
     * Set ReqUCC value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqUCC the ReqUCC
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqUCC($_reqUCC)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqUCC))
        {
            return false;
        }
        return ($this->ReqUCC = $_reqUCC);
    }
    /**
     * Get ReqDI value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getReqDI()
    {
        return $this->ReqDI;
    }
    /**
     * Set ReqDI value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_reqDI the ReqDI
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setReqDI($_reqDI)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_reqDI))
        {
            return false;
        }
        return ($this->ReqDI = $_reqDI);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructEBAddOns_Type
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
