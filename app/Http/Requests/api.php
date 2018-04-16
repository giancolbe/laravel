<?php 

$replyapi = new GuzzleClient([
	'base_uri' => 'https://api.reply.io/v1/',
	'http_errors' => false,
	]);

$resTotalSend = $replyapi->get('https://api.reply.io/v1/Stats/GetPeopleSentPerCampaign?campaignId='.$campaign->campaign_id.'&apiKey='.$company_reply_key);
if ($resTotalSend->getStatusCode() == 200 ) 
	{
	$totalSend = json_decode($resTotalSend->getBody());
	$total_send = $totalSend->deliveredProspectsCount;
	$total_send_exist = ReplyTotalSends::where('campaign_id', '=', $campaign->campaign_id)->where('send_date', '=', $now->format('Y-m-d'))->get();
	$total_send_exist = count($total_send_exist);
	if($total_send_exist == 0)
		{  
		$db_replyTotalSend = new ReplyTotalSends();
		$db_replyTotalSend->create([
			'campaign_id'   => $campaign->campaign_id,
			'send_date'     => $now->format('Y-m-d'),
			'total_send'    => $total_send
			]);
		}
	else
		{
		$db_replyTotalSend = new ReplyTotalSends();
		$db_replyTotalSend->update(
			['campaign_id'      => $campaign->campaign_id],
			[
				'send_date'     => $now->format('Y-m-d'),
				'total_send'    => $total_send
			]
			);
		}
	$bar->advance();
	}
else
	{
	$log_code_200 .= "(".$resTotalSend->getStatusCode()."".$campaign->campaign_id.", ".$company_reply_key.")";
	$bar->advance();
	}
?>





