<?php
class ProfileService
{
	public function getprofileDetails()
	{
		$es_query=formQuery();
		$connector=new EsConnector();// singleton
		// $fire=new QueryController();
		$result=$connect->fireEsQuery($elastic_query);
		return processResult($result);

	}
	public function formQuery()
	{
		//construct the elastic query
		return $es_query;
	}

	

}
?>