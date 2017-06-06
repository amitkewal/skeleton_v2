<?php

/**
* 
*/
class OnlineCampaignService  
{
	private $member_info;
	private $channel;

	function __construct($member_info,$channel)
	{
		# code...
	}
	public function getAllAggregationESCampaignQueries()
	{
		$criteria_matching_query=formESQuery($member_info);//forming query
		$connector=new {Es/Mongo}Connector();// singleton
		$aggregate_query=$connector->fire{Es/Mongo}Query($criteria_matching_query);
		return $aggregate_query;
		
	}
	public function getEligibleCampaign($member_agg_info)
	{
		//get the campaign info after processing		
		$response=$this->processResult($member_agg_info);
		return $response;
	}
	
	private function formESQuery($member_info)
	{
		//construct the query for fetching campaigns
		//AGGEGATION QUERY
		return $es_query;
	}
	
	private function processESResult()
	{
		//based on precedence and category
		//After this create payload
		return create<$channel>Payload();
	}
	
	private function createPayload()
	{
		//replace placeholder
		return $result;
	}
		
}

?>
