<?php
/**
 * File for class MicrobiltCriminalReportStructTransactions_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructTransactions_Type originally named Transactions_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructTransactions_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructTransaction_Type
     */
    public $Transaction;
    /**
     * Constructor method for Transactions_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructTransaction_Type $_transaction
     * @return MicrobiltCriminalReportStructTransactions_Type
     */
    public function __construct($_transaction = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Transaction'=>$_transaction),false);
    }
    /**
     * Get Transaction value
     * @return MicrobiltCriminalReportStructTransaction_Type|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param MicrobiltCriminalReportStructTransaction_Type $_transaction the Transaction
     * @return MicrobiltCriminalReportStructTransaction_Type
     */
    public function setTransaction($_transaction)
    {
        return ($this->Transaction = $_transaction);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructTransactions_Type
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
