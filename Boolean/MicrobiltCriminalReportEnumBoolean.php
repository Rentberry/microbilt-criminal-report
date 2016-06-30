<?php
/**
 * File for class MicrobiltCriminalReportEnumBoolean
 * @package MicrobiltCriminalReport
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportEnumBoolean originally named Boolean
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportEnumBoolean extends MicrobiltCriminalReportWsdlClass
{
    /**
     * Constant for value 0
     * @return integer 0
     */
    const VALUE_0 = 0;
    /**
     * Constant for value 1
     * @return integer 1
     */
    const VALUE_1 = 1;
    /**
     * Return true if value is allowed
     * @uses MicrobiltCriminalReportEnumBoolean::VALUE_0
     * @uses MicrobiltCriminalReportEnumBoolean::VALUE_1
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(MicrobiltCriminalReportEnumBoolean::VALUE_0,MicrobiltCriminalReportEnumBoolean::VALUE_1));
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
