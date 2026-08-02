<?php
namespace Empye\RestrictUsers\Observer;
 
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Event\Observer;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;
class RestrictUsersObserver implements ObserverInterface
{
    /**
     * @var Json
     */
     private $json;

    /**
     * @var Curl
     */
     private $curl;

     /**
      * @var RemoteAddress
      */
     private $remoteAddress;
 
    /**
     * AddCustomerHandlesObserver constructor.
     *
     * @param Session $customerSession
     */
    public function __construct(
	Json $json,
	Curl $curl,
	RemoteAddress $remoteAddress
    )
    {
	    $this->remoteAddress = $remoteAddress;
	    $this->curl = $curl;
	    $this->json = $json;
    }
 
    /**
     * Restrict users based on country
     *
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(Observer $observer)
    {
	    $ip = $this->remoteAddress->getRemoteAddress();
	    $this->curl->get("https://api.country.is/".$ip);
	    $response = $this->curl->getBody();
	    if(!empty($response)) {
		$response = $this->json->unserialize($response);
		if(is_array($response) && isset($response['country']) && $response['country'] == 'IN' && isset($response['ip']) && $response['ip'] != "152.58.227.223") {	
			die();
		} else {
			return $this;
		}	
	    } else {
		    die();
	    }
    }
}
