<?php
/**
 * File for class MicrobiltCriminalReportServiceGet
 * @package MicrobiltCriminalReport
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportServiceGet originally named Get
 * @package MicrobiltCriminalReport
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportServiceGet extends MicrobiltCriminalReportWsdlClass
{
    /**
     * Method to call the operation originally named GetReport
     * @uses MicrobiltCriminalReportWsdlClass::getSoapClient()
     * @uses MicrobiltCriminalReportWsdlClass::setResult()
     * @uses MicrobiltCriminalReportWsdlClass::saveLastError()
     * @param MicrobiltCriminalReportStructGetReport $_microbiltCriminalReportStructGetReport
     * @return MicrobiltCriminalReportStructGetReportResponse
     */
    public function GetReport(MicrobiltCriminalReportStructGetReport $_microbiltCriminalReportStructGetReport)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetReport($_microbiltCriminalReportStructGetReport));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetRawReport
     * @uses MicrobiltCriminalReportWsdlClass::getSoapClient()
     * @uses MicrobiltCriminalReportWsdlClass::setResult()
     * @uses MicrobiltCriminalReportWsdlClass::saveLastError()
     * @param MicrobiltCriminalReportStructGetRawReport $_microbiltCriminalReportStructGetRawReport
     * @return MicrobiltCriminalReportStructGetRawReportResponse
     */
    public function GetRawReport(MicrobiltCriminalReportStructGetRawReport $_microbiltCriminalReportStructGetRawReport)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetRawReport($_microbiltCriminalReportStructGetRawReport));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetArchiveReport
     * @uses MicrobiltCriminalReportWsdlClass::getSoapClient()
     * @uses MicrobiltCriminalReportWsdlClass::setResult()
     * @uses MicrobiltCriminalReportWsdlClass::saveLastError()
     * @param MicrobiltCriminalReportStructGetArchiveReport $_microbiltCriminalReportStructGetArchiveReport
     * @return MicrobiltCriminalReportStructGetArchiveReportResponse
     */
    public function GetArchiveReport(MicrobiltCriminalReportStructGetArchiveReport $_microbiltCriminalReportStructGetArchiveReport)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetArchiveReport($_microbiltCriminalReportStructGetArchiveReport));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MicrobiltCriminalReportWsdlClass::getResult()
     * @return MicrobiltCriminalReportStructGetArchiveReportResponse|MicrobiltCriminalReportStructGetRawReportResponse|MicrobiltCriminalReportStructGetReportResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
