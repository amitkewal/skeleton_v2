<?php

/**
* 
*/
class OnlineCampaignService  
{
	private $member_info;
	private $channels;

	function __construct($member_info,$channels)
	{
		# code...
	}
	public function getAllAggregationESCampaignQueries()
	{
		$criteria_matching_query=formQuery($member_info);//forming query
		$connector=new {Es/Mongo}Connector();// singleton
		$aggregate_query=$connector->fire{Es/Mongo}Query($criteria_matching_query);
		return $aggregate_query;
		
	}
	public function getCampaignInfo($member_agg_info)
	{
		//get the campaign info after processing		
		$response=$this->processResult($member_agg_info);
		return $response;
	}
	
	public function formQuery($member_info)
	{
		//construct the query for fetching campaigns
		//AGGEGATION QUERY
		return $es_query;
	}
	
	public function processResult()
	{
		//based on precedence and category
		//After this create payload
		return createPayload();
	}
	
	public function createPayload()
	{
		//replace placeholder
		return $result;
	}
		
}

?>
