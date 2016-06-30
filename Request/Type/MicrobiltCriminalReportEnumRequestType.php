<?php
/**
 * File for class MicrobiltCriminalReportEnumRequestType
 * @package MicrobiltCriminalReport
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportEnumRequestType originally named RequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportEnumRequestType extends MicrobiltCriminalReportWsdlClass
{
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'J'
     * @return string 'J'
     */
    const VALUE_J = 'J';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'W'
     * @return string 'W'
     */
    const VALUE_W = 'W';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Return true if value is allowed
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_I
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_J
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_N
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_A
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_W
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_S
     * @uses MicrobiltCriminalReportEnumRequestType::VALUE_P
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(MicrobiltCriminalReportEnumRequestType::VALUE_I,MicrobiltCriminalReportEnumRequestType::VALUE_J,MicrobiltCriminalReportEnumRequestType::VALUE_N,MicrobiltCriminalReportEnumRequestType::VALUE_A,MicrobiltCriminalReportEnumRequestType::VALUE_W,MicrobiltCriminalReportEnumRequestType::VALUE_S,MicrobiltCriminalReportEnumRequestType::VALUE_P));
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
