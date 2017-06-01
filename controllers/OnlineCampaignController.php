<?php
class OnlineCampaignController
{
	public function __construct()
	{

	}
	public function getEligibleCampaigns($membelogin,$channels)
	{
		$campaignsService= new OnlineCampaignService($membelogin,$channels);
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
		$result = $campaignsService->getCampaignInfo($member_agg_info);
		//post processing will done here
		return $result;
	}
	
	
}
?>