<?php
class CampaignService
{
	private $campaign;
	public function __construct()
	{
		$this->campaign=new campaignMetadata();
	}
	public function addCampaigns()
	{
		$add->addData();

	}
	public function getCampaigns()
	{
		$add->fetchData();
	}
	public function updateCampaigns()
	{
		$add->updateData();
	}
	public function deleteCampaigns()
	{
		$add->deleteData();
	}

}
?>