<?php
namespace Heidelpay\PhpApi\ParameterGroups;
use \Heidelpay\PhpApi\ParameterGroups\AbstractParameterGroup;

/**
 * This class provides every api parameter used to identify a transaction.
 * 
 * 
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 * @link  https://dev.heidelpay.de/PhpApi
 * @author  Jens Richter
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */



class IdentificationParameterGroup extends AbstractParameterGroup {
    
    /**
     * Creditor id
     * 
     * @var string creditor id
     */
    
    public $creditor_id = NULL;
    
    /**
     * IdentificationShopperId
     * 
     * Identification number of your customer, should be given by your application.
     * You can use this for example in the HIP backend for search operations or for reporting as well.
     *   
     * @var string customer identification number (optional) 
     */
    public $shopperid = NULL;
    
    /**
     * IdentificationShortId
     * 
     * This is a human readable version of the IdentificationUniqeId. It
     * can be used for example if you have to ask for a transaction via phone.
     * 
     * @var string heidelpay short identifier
     */
    
    public $shortid = NULL;
    
    /**
     * IdentificatonTransactionId
     * 
     * This is an identifier given by your application. It can be a basket
     * or order number.
     * @var string order identification number (optional)
     */
    public $transactionid = NULL;
    
    /**
     * IdentificationrefernceId
     * 
     * In some cases like refund or capture, you have to tell the payment api that
     * this transaction is related to an other. In this case, set 
     * IdentificationReferenceId to the IndetificationUniqeId of the related
     * transaction.
     * 
     * @var string payment reference Id, for example the uniqe Id of the invoice autorisation
     */
    public $referenceid = NULL;
    
    /**
     * IdentificationUniqeId
     * 
     * This is the transaction identifier given by the payment api. This id can
     * be used for related transactions like refund or capture.
     * @var string payment long identifier also know as uniqeId
     */
    public $uniqueid = NULL;
    
    /**
     * IdentificationCreditorId getter
     * @return string creditor id
     */
    
    public function getCreditorId(){
        return $this->creditor_id;
    }
    
    /**
     * IdentificationShopperid getter
     * @return string shopperid
     */
    
    public function getShopperId(){
        return $this->shopperid;
    }
    
    /**
     * IdentificationShortid getter
     * @return string shortid
     */
    
    public function getShortId(){
        return $this->shortid;
    }
    /**
     * IdentificationTransactionId getter
     * @return string transaction id
     */
    
    public function getTransactionId(){
        return $this->transactionid;
    }   
    
    /**
     * IdentificationReferenceId getter
     * @return string reference id
     */
    
    public function getReferenceId(){
        return $this->referenceid;
    }
    
    /**
     * IdentificationUniqueId getter
     * @return string unique id
     */
    
    public function getUniqueId(){
        return $this->uniqueid;
    }
}