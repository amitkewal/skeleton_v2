<?php
class ProfileService
{
	public function __construct()
	{

	}
	public function getprofileDetails($embelogin,$aggQueries)
	{
		$es_query=formQuery();
		$connector=new EsConnector();// singleton
		// $fire=new QueryController();
		$member_info=$connector->fireEsQuery($es_query);
		return $member_info;

	}
	public function formQuery()
	{
		//construct the elastic query
		return $es_query;
	}

	

}
?>
