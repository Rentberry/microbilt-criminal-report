<?php
/**
 * Test with MicrobiltCriminalReport for 'https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?wsdl'
 * @package MicrobiltCriminalReport
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MicrobiltCriminalReportAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a MicrobiltCriminalReportWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[MicrobiltCriminalReportWsdlClass::WSDL_URL] = 'https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?wsdl';
 * $wsdl[MicrobiltCriminalReportWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[MicrobiltCriminalReportWsdlClass::WSDL_TRACE] = true;
 * $wsdl[MicrobiltCriminalReportWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[MicrobiltCriminalReportWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new MicrobiltCriminalReportWsdlClass($wsdl);
 */
/**
 * Examples
 */


/***********************************************
 * Example for MicrobiltCriminalReportServiceGet
 */
$microbiltCriminalReportServiceGet = new MicrobiltCriminalReportServiceGet();
// sample call for MicrobiltCriminalReportServiceGet::GetReport()
if($microbiltCriminalReportServiceGet->GetReport(new MicrobiltCriminalReportStructGetReport(/*** update parameters list ***/)))
    print_r($microbiltCriminalReportServiceGet->getResult());
else
    print_r($microbiltCriminalReportServiceGet->getLastError());
// sample call for MicrobiltCriminalReportServiceGet::GetRawReport()
if($microbiltCriminalReportServiceGet->GetRawReport(new MicrobiltCriminalReportStructGetRawReport(/*** update parameters list ***/)))
    print_r($microbiltCriminalReportServiceGet->getResult());
else
    print_r($microbiltCriminalReportServiceGet->getLastError());
// sample call for MicrobiltCriminalReportServiceGet::GetArchiveReport()
if($microbiltCriminalReportServiceGet->GetArchiveReport(new MicrobiltCriminalReportStructGetArchiveReport(/*** update parameters list ***/)))
    print_r($microbiltCriminalReportServiceGet->getResult());
else
    print_r($microbiltCriminalReportServiceGet->getLastError());

/*****************************************************
 * Example for MicrobiltCriminalReportServiceTransform
 */
$microbiltCriminalReportServiceTransform = new MicrobiltCriminalReportServiceTransform();
// sample call for MicrobiltCriminalReportServiceTransform::Transform()
if($microbiltCriminalReportServiceTransform->Transform(new MicrobiltCriminalReportStructTransform(/*** update parameters list ***/)))
    print_r($microbiltCriminalReportServiceTransform->getResult());
else
    print_r($microbiltCriminalReportServiceTransform->getLastError());

/***********************************************
 * Example for MicrobiltCriminalReportServiceMap
 */
$microbiltCriminalReportServiceMap = new MicrobiltCriminalReportServiceMap();
// sample call for MicrobiltCriminalReportServiceMap::Map()
if($microbiltCriminalReportServiceMap->Map(new MicrobiltCriminalReportStructMap(/*** update parameters list ***/)))
    print_r($microbiltCriminalReportServiceMap->getResult());
else
    print_r($microbiltCriminalReportServiceMap->getLastError());
