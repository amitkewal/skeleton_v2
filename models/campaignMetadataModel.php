<?php


class campaignMetadata
{
    /**
    * $_name - name of database table
    *
    * @var string
    */
  
    protected $_name='campaign_metadata';

 
    
    // add data to the table based on primary/unique key 
        
    public function addData()
    {
    
    }

    // fetch data from table based on primary/unique key 
    	
    public function fetchData()
    {
	
    }	

    
    // Update data on table based on primary/unique key 
    public function updateData()
    {
    }


    // this function is build to delete multiple records from table 
    public function cleanUp()
    {
    }


    // this function is build to delete single  record from table 
    	
     public function deleteData()
    {
	}	
    
   // fetches all the active Campaigns in the system

    public function fetchActiveCampaigns() {}

    //fetch all qualified campaigns for given item
    public function getQualifiedCampaignsByItem() {}
}
