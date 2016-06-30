<?php
/**
 * File for class MicrobiltCriminalReportServiceTransform
 * @package MicrobiltCriminalReport
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportServiceTransform originally named Transform
 * @package MicrobiltCriminalReport
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportServiceTransform extends MicrobiltCriminalReportWsdlClass
{
    /**
     * Method to call the operation originally named Transform
     * @uses MicrobiltCriminalReportWsdlClass::getSoapClient()
     * @uses MicrobiltCriminalReportWsdlClass::setResult()
     * @uses MicrobiltCriminalReportWsdlClass::saveLastError()
     * @param MicrobiltCriminalReportStructTransform $_microbiltCriminalReportStructTransform
     * @return MicrobiltCriminalReportStructTransformResponse
     */
    public function Transform(MicrobiltCriminalReportStructTransform $_microbiltCriminalReportStructTransform)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Transform($_microbiltCriminalReportStructTransform));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MicrobiltCriminalReportWsdlClass::getResult()
     * @return MicrobiltCriminalReportStructTransformResponse
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
