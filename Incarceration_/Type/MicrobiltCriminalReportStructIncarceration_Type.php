<?php
/**
 * File for class MicrobiltCriminalReportStructIncarceration_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructIncarceration_Type originally named Incarceration_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructIncarceration_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The IncarcerationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IncarcerationDt;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $Agency;
    /**
     * The SentenceLength
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructSentenceLength_Type
     */
    public $SentenceLength;
    /**
     * The TentativeReleaseDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TentativeReleaseDate;
    /**
     * The ReleaseDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReleaseDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Incarceration_Type
     * @see parent::__construct()
     * @param string $_incarcerationDt
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency
     * @param MicrobiltCriminalReportStructSentenceLength_Type $_sentenceLength
     * @param string $_tentativeReleaseDate
     * @param string $_releaseDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructIncarceration_Type
     */
    public function __construct($_incarcerationDt = NULL,$_agency = NULL,$_sentenceLength = NULL,$_tentativeReleaseDate = NULL,$_releaseDt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('IncarcerationDt'=>$_incarcerationDt,'Agency'=>$_agency,'SentenceLength'=>$_sentenceLength,'TentativeReleaseDate'=>$_tentativeReleaseDate,'ReleaseDt'=>$_releaseDt,'Message'=>$_message),false);
    }
    /**
     * Get IncarcerationDt value
     * @return string|null
     */
    public function getIncarcerationDt()
    {
        return $this->IncarcerationDt;
    }
    /**
     * Set IncarcerationDt value
     * @param string $_incarcerationDt the IncarcerationDt
     * @return string
     */
    public function setIncarcerationDt($_incarcerationDt)
    {
        return ($this->IncarcerationDt = $_incarcerationDt);
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
     * Get SentenceLength value
     * @return MicrobiltCriminalReportStructSentenceLength_Type|null
     */
    public function getSentenceLength()
    {
        return $this->SentenceLength;
    }
    /**
     * Set SentenceLength value
     * @param MicrobiltCriminalReportStructSentenceLength_Type $_sentenceLength the SentenceLength
     * @return MicrobiltCriminalReportStructSentenceLength_Type
     */
    public function setSentenceLength($_sentenceLength)
    {
        return ($this->SentenceLength = $_sentenceLength);
    }
    /**
     * Get TentativeReleaseDate value
     * @return string|null
     */
    public function getTentativeReleaseDate()
    {
        return $this->TentativeReleaseDate;
    }
    /**
     * Set TentativeReleaseDate value
     * @param string $_tentativeReleaseDate the TentativeReleaseDate
     * @return string
     */
    public function setTentativeReleaseDate($_tentativeReleaseDate)
    {
        return ($this->TentativeReleaseDate = $_tentativeReleaseDate);
    }
    /**
     * Get ReleaseDt value
     * @return string|null
     */
    public function getReleaseDt()
    {
        return $this->ReleaseDt;
    }
    /**
     * Set ReleaseDt value
     * @param string $_releaseDt the ReleaseDt
     * @return string
     */
    public function setReleaseDt($_releaseDt)
    {
        return ($this->ReleaseDt = $_releaseDt);
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
     * @return MicrobiltCriminalReportStructIncarceration_Type
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
