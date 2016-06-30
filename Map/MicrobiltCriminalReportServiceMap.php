<?php
/**
 * File for class MicrobiltCriminalReportServiceMap
 * @package MicrobiltCriminalReport
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportServiceMap originally named Map
 * @package MicrobiltCriminalReport
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportServiceMap extends MicrobiltCriminalReportWsdlClass
{
    /**
     * Method to call the operation originally named Map
     * @uses MicrobiltCriminalReportWsdlClass::getSoapClient()
     * @uses MicrobiltCriminalReportWsdlClass::setResult()
     * @uses MicrobiltCriminalReportWsdlClass::saveLastError()
     * @param MicrobiltCriminalReportStructMap $_microbiltCriminalReportStructMap
     * @return MicrobiltCriminalReportStructMapResponse
     */
    public function Map(MicrobiltCriminalReportStructMap $_microbiltCriminalReportStructMap)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Map($_microbiltCriminalReportStructMap));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MicrobiltCriminalReportWsdlClass::getResult()
     * @return MicrobiltCriminalReportStructMapResponse
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
