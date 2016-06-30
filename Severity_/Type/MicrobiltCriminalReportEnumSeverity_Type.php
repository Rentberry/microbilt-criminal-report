<?php
/**
 * File for class MicrobiltCriminalReportEnumSeverity_Type
 * @package MicrobiltCriminalReport
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportEnumSeverity_Type originally named Severity_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportEnumSeverity_Type extends MicrobiltCriminalReportWsdlClass
{
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Warn'
     * @return string 'Warn'
     */
    const VALUE_WARN = 'Warn';
    /**
     * Constant for value 'Info'
     * @return string 'Info'
     */
    const VALUE_INFO = 'Info';
    /**
     * Return true if value is allowed
     * @uses MicrobiltCriminalReportEnumSeverity_Type::VALUE_ERROR
     * @uses MicrobiltCriminalReportEnumSeverity_Type::VALUE_WARN
     * @uses MicrobiltCriminalReportEnumSeverity_Type::VALUE_INFO
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(MicrobiltCriminalReportEnumSeverity_Type::VALUE_ERROR,MicrobiltCriminalReportEnumSeverity_Type::VALUE_WARN,MicrobiltCriminalReportEnumSeverity_Type::VALUE_INFO));
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
