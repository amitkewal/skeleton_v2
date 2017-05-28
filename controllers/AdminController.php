<?php
class AdminController
{
	private $campaign;
	public function __construct()
	{
		$campaign=new CampaignService();
	}
	public function addCampaign($data)
	{
		$this->campaign->addCampaign();
		
	}
	public function getCampaign()
	{
		$this->campaign->getCampaign();
		
	}
	public function updateCampaign()
	{
		$this->campaign->updateCampaign();
		
	}
	public function deleteCampaign()
	{
		$this->campaign->deleteCampaign();
		
	}
	public function formQuery()
	{
		//construct the elastic query
	}
}
?>