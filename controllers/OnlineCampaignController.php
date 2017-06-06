<?php
class OnlineCampaignController
{
	public $memberlogin;
	public $channel;
	public function __construct()
	{

	}
	public function getCampaignPayload($memberlogin,$channel)
	{
		$campaignService= new OnlineCampaignService($membelogin,$channel);
		$aggQueries=$campaignsService->getAllAggregationESCampaignQueries();
		
		//For profile ES query with memberlogin and aggQueires
		$info=new ProfileService();
		$member_agg_info=$info->getprofileDetails($membelogin, $aggQueries);//fetch member info
		//expected result
		/*
		{
			ml:uSH897asd
			agg:
			{
				c1:1,
				c2:0,
				c3:0
			}
		}
		*/
		//get information for eligible campaign e.g. c1
		$campaign_result = $campaignService->getEligibleCampaign($member_agg_info);

		$final_result=createPayload($campaign_result,$channel);

		//post processing will done here
		return $final_result;
	}
	
	
}
?>