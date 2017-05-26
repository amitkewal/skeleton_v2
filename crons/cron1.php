<?php
class cron1
{
	run()
	{
		while (true)
		{

		$offline_campaign_query=formQuery(where schedule_time=current_time);//forming query
		$connector=new {Es or Mongo}Connector();// singleton
		$result=$connect->fire{Es or Mongo}Query($offline_campaign_query);//result will have the campains info which have to be started
			while(count(result))
			{
				//for each campaign fork the child process
			pcntl_fork();
			$fetch_campaign_criteria_query=formQuery();//forming query
			$connector=new {Es or Mongo}Connector();// singleton
			$result=$connect->fire{Es or Mongo}Query($offline_campaign_query);//result 

			}
		}
	}

	public function formQuery()
	{
		//construct the query for fetching campaigns where schedule_time=current_time
		return $query;
	}
}

$dummy=new cron1();
$dummy->run();

?>