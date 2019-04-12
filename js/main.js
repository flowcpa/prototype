//to move forward to next question (hide the current question and show next question)
$("#next1").click(function(){
			if($('#industry').val() != "Select from the drop-down list"){
				$("#question1").hide();
				$("#question2").show();
			}
		});


		$("#next2").click(function(){
			if($('input[name=que2]:checked').val() != null){
				$("#question2").hide();
				$("#question3").show();
			}

		});
		$("#last2").click(function(){
			if($('input[name=que2]:checked').val() != null){
				$("#question2").hide();
				$("#question1").show();
			}
		});
		$("#next3").click(function(){
			if($('input[name=que3]:checked').val() != null){
				$("#question3").hide();
				$("#question4").show();
			}

		});
		$("#last3").click(function(){
			if($('input[name=que3]:checked').val() != null){
				$("#question3").hide();
				$("#question2").show();
			}


		});
		$("#next4").click(function(){
			if($('input[name=que4]:checked').val() != null){
				$("#question4").hide();
				$("#question5").show();
			}


		});
		$("#last4").click(function(){
			if($('input[name=que4]:checked').val() != null){
				$("#question4").hide();
				$("#question3").show();
			}


		});
		$("#next5").click(function(){
			if($('input[name=que5]:checked').val() != null){
				$("#question5").hide();
				$("#question6").show();
			}


		});
		$("#last5").click(function(){
			if($('input[name=que5]:checked').val() != null){
				$("#question5").hide();
				$("#question4").show();
			}


		});
		$("#next6").click(function(){
			if($('input[name=que6]:checked').val() != null){
				$("#question6").hide();
				$("#question7").show();
			}


		});
		$("#last6").click(function(){
			if($('input[name=que6]:checked').val() != null){
				$("#question6").hide();
				$("#question5").show();
			}


		});
		$("#next7").click(function(){
			if($('input[name=que7]:checked').val() != null){
				$("#question7").hide();
				$("#question8").show();
			}


		});
		$("#last7").click(function(){
			if($('input[name=que7]:checked').val() != null){
				$("#question7").hide();
				$("#question6").show();
			}


		});
		$("#next8").click(function(){
			if($('input[name=que8]:checked').val() != null){
				$("#question8").hide();
				$("#question9").show();
			}


		});
		$("#last8").click(function(){
			if($('input[name=que8]:checked').val() != null){
				$("#question8").hide();
				$("#question7").show();
			}


		});
		$("#next9").click(function(){
			if($('input[name=que9]:checked').val() != null){
				$("#question9").hide();
				$("#question10").show();
			}


		});
		$("#last9").click(function(){
			if($('input[name=que9]:checked').val() != null){
				$("#question9").hide();
				$("#question8").show();
			}


		});

		$("#last10").click(function(){
			$("#question10").hide();
			$("#question9").show();

		});
		//hide all question except the first
		$("#question2").hide();
		$("#question3").hide();
		$("#question4").hide();
		$("#question5").hide();
		$("#question6").hide();
		$("#question7").hide();
		$("#question8").hide();
		$("#question9").hide();
		$("#question10").hide();
		$("#bttn").hide();
		$("#que41").hide();
		$("#que61").hide();
		$("#que71").hide();
		$("#que91").hide();

		//hide chat button when chatbot is activated
		$("#chat-button").click(function(){
			$("#chat-button").hide();

		});
		$("#cancel").click(function(){
			$("#chat-button").show();

		});

		//to show/hide sub questions
		$("#que4no").click(function(){
			$("#que41").hide();
		});
		$("#que4yes").click(function(){
			$("#que41").show();

		});
		$("#que6no").click(function(){
			$("#que61").hide();

		});
		$("#que6yes").click(function(){
			$("#que61").show();

		});
		$("#que7no").click(function(){
			$("#que71").show();

		});
		$("#que7yes").click(function(){
			$("#que71").hide();

		});
		$("#que9no").click(function(){
			$("#que91").hide();

		});
		$("#que9yes").click(function(){
			$("#que91").show();

		});
