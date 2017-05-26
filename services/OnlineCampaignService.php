<?php
class OnlineCampaignService
{
	public function __construct()
	{

	}
	public function geteligibleCampaigns()
	{
		$info=new ProfileService();
		$member_info=$info->getprofileDetails();//fetch member info
		
		$criteria_matching_query=formQuery($member_info);//forming query
		
		$connector=new {Es/Mongo}Connector();// singleton
		$result=$connector->fire{Es/Mongo}Query($criteria_matching_query);
		$response=processResult($result)
		return $response;
	}
	
	public function formQuery($member_info)
	{
		//construct the query for fetching campaigns
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