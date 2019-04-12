//page to response chatbot questions
<?php
 	//teaching chatbot...
	$responses['what is your name'] = "My name is Flow Bot.";

	$responses['tell me about yourself'] = "I am a chatbot. I work for Flow CPA and I'm here to help you for your questions.";

	$responses["i'm fine"] = "Good. I'm happy about that.";

	$responses["i'm good"] = "Good. I'm happy about that.";
	$responses["how are you"] = "I'm as happy as a bot can be...which is pretty happy.";
	$responses["What is this website about"] = "At Flow we are more than just accountants and bookkeepers to our customers, we are partners and as such we care deeply for their success. We believe the joy is in the journey and we are focus on making your journey to success a remarkable one. We are approachable, friendly and more importantly available to you when you need us. We are here to change the way accountants are perceived and we are doing it one customer at a time.";
	$responses["how old are you?"] = "I was activated in 2019 :D";
	$responses["are you human?"] = "My species is bot.";
	$q = $_GET["q"];

	$response = "";

	if ($q != "") {
		$q = strtolower($q);
		foreach ($responses as $r => $value) {
			if (strpos($r, $q) !== false) {
				$response = $value;
			}
		}
	}
	$noresponse = "Sorry I'm still learning. Hence my responses are limited. Ask something else.";
	echo $response === "" ? $noresponse : $response;
?>
