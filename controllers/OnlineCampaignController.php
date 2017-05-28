<?php
class OnlineCampaignController
{
	public function __construct()
	{

	}
	public function getEligibleCampaigns($membelogin,$channels)
	{
		$info=new ProfileService();
		$member_info=$info->getprofileDetails($membelogin);//fetch member info
		
		$eligibleCampaigns= new OnlineCampaignService($membelogin,$channels);
		$result=$eligibleCampaigns->getAllChannelPayload();

		return $result;
	}
	
	
}
?>