<?php
/**
 * File for class MicrobiltCriminalReportStructQFInformation_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructQFInformation_Type originally named QFInformation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructQFInformation_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The QFAcctAction
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $QFAcctAction;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructScore_Type
     */
    public $Score;
    /**
     * The QFProdOffer
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructQFProdOffer_Type
     */
    public $QFProdOffer;
    /**
     * The QFScore
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructScore_Type
     */
    public $QFScore;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for QFInformation_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructMessage_Type $_qFAcctAction
     * @param MicrobiltCriminalReportStructScore_Type $_score
     * @param MicrobiltCriminalReportStructQFProdOffer_Type $_qFProdOffer
     * @param MicrobiltCriminalReportStructScore_Type $_qFScore
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructQFInformation_Type
     */
    public function __construct($_qFAcctAction = NULL,$_score = NULL,$_qFProdOffer = NULL,$_qFScore = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('QFAcctAction'=>$_qFAcctAction,'Score'=>$_score,'QFProdOffer'=>$_qFProdOffer,'QFScore'=>$_qFScore,'Message'=>$_message),false);
    }
    /**
     * Get QFAcctAction value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getQFAcctAction()
    {
        return $this->QFAcctAction;
    }
    /**
     * Set QFAcctAction value
     * @param MicrobiltCriminalReportStructMessage_Type $_qFAcctAction the QFAcctAction
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setQFAcctAction($_qFAcctAction)
    {
        return ($this->QFAcctAction = $_qFAcctAction);
    }
    /**
     * Get Score value
     * @return MicrobiltCriminalReportStructScore_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param MicrobiltCriminalReportStructScore_Type $_score the Score
     * @return MicrobiltCriminalReportStructScore_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
    }
    /**
     * Get QFProdOffer value
     * @return MicrobiltCriminalReportStructQFProdOffer_Type|null
     */
    public function getQFProdOffer()
    {
        return $this->QFProdOffer;
    }
    /**
     * Set QFProdOffer value
     * @param MicrobiltCriminalReportStructQFProdOffer_Type $_qFProdOffer the QFProdOffer
     * @return MicrobiltCriminalReportStructQFProdOffer_Type
     */
    public function setQFProdOffer($_qFProdOffer)
    {
        return ($this->QFProdOffer = $_qFProdOffer);
    }
    /**
     * Get QFScore value
     * @return MicrobiltCriminalReportStructScore_Type|null
     */
    public function getQFScore()
    {
        return $this->QFScore;
    }
    /**
     * Set QFScore value
     * @param MicrobiltCriminalReportStructScore_Type $_qFScore the QFScore
     * @return MicrobiltCriminalReportStructScore_Type
     */
    public function setQFScore($_qFScore)
    {
        return ($this->QFScore = $_qFScore);
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
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructQFInformation_Type
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
