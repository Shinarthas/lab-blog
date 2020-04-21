	gamespeed=4;
	lives = 0;
	stop_stage = false;
	stage = 1;
	switchstagepause = false;
 window.onload = function() {
 
	setTimeout(function(){
	
	
	if($(document).width()<800)
		return;
	
		$("body").append("<script src='/scripts/jquery-ui.min.js'></script>")
		initelements();
		startDecorations();
	

	jump_sound = new Audio('/sounds/smb_jump-small.wav');
	super_jump_sound = new Audio('/sounds/smb_jump-super.wav');
	gameover_sound = new Audio('/sounds/smb_gameover.wav');
	coin_sound = new Audio('/sounds/smb_coin.wav');
	maintheme_sound = new Audio('/sounds/maintheme2.mp3');
	maintheme_sound.loop = true;
	maintheme_sound.volume = 0.8;
	enemy_dead = new Audio('/sounds/smb_bump.wav');
	mario_dead = new Audio('/sounds/smb_pipe.wav');
	live_up = new Audio('/sounds/smb_1-up.wav');
	stage_clear = new Audio('/sounds/smb_stage_clear.wav');
	power_up = new Audio('/sounds/smb_powerup.wav');

	$("#start-button").click(function(){
		$(this).hide();
		gamestart();
	})
	
	$(document).keydown(function(e)
	{
	if(e.target.className  == "highscore" )
		return;
	
		if(e.keyCode==32)
		{
			e.preventDefault();
			heroJump();
		}
	})
	$("#jump-button").click(function(){
		heroJump();
	})
	
	},2000);
	

}
function initelements()
{
	$(".head .background .overlay").html('<div id="main"></div><div id="ground"></div>');
	$(".head .background .overlay").css({'overflow-x':'hidden'});
	$("#main").append('<div id="score">Score: <b class="score">0</b>'+
	'<br>Lives: <img src="/images/mario/heart.png" style="height:14px;">x<b class="lives">3</b>'+
	'<br>Stage: <b class="stage">1</b></div>');
	$("#main").append('<div id="start-button"><p>SuperMario Run</p><small>press space to jump</small></div>');
	$("#main").append('<div id="hero"></div>');
	$("#main").append('<div id="highscore"></div>');
//	$("#main").append('<img src="/images/mario/angry-sun.png" class="sun">');
	$("#main").append('<div id="jump-button">Space = jump</div>');
	$("#main").fadeIn(500);
	$("#ground").fadeIn(500);
}
function gamestart()
{
	gamespeed=4;
	gamestarted = true;
	lives = 3;
	moveGround();
	heroAnimate();
	heroJump();
	scorecalc();
	$("#score").fadeIn(400);
	addEnemys();
	$("#jump-button").show();
	$("#highscore").hide();
	
	maintheme_sound.currentTime = 0;
	maintheme_sound.play();
	timer = 0;
	$(".head .background .overlay").removeClass("night");
	$("#score b.lives").html(lives);
	stage = 1;
	$("#score b.stage").html(stage);
}
function gameOver()
{
	maintheme_sound.pause();
	clearInterval(groundanimate);
	clearInterval(heroanimate);
	clearInterval(enemyspawn);
	clearInterval(coinspawn);
	clearInterval(scoreinterval);
	$(".head .background .overlay").removeClass("stage"+stage);
	
	gameover_sound.play();
	gamestarted = false;
	console.log("gameover");
	gameover = true;
	stop_stage = false;
	
	setTimeout(function(){
		$.ajax({
			url: '/site/high-score?user_result='+score+'&v='+Math.random(),
			dataType: 'json',
			success: function(res){
				$("#highscore").show();
				$("#highscore").html("");
				$("#highscore").append("<h3>Highscore:</h3>");
				
				if(res.position<10)
				{
					for(var i in res.list)
					{
						if(i==res.position)
							$("#highscore").append("<p class='your_score'><b>"+res.list[i].score+"</b><font><input class='highscore' placeholder='Anonym' maxlength=10><input type='submit' value='save' class='highscore_submit'></font></p>");
						else
							$("#highscore").append("<p><b>"+res.list[i].score+"</b><font>"+res.list[i].name+":</font></p>");
					}
					$("#highscore input.highscore").focus();
					
					$(".highscore_submit").click(function(){
						$.ajax({url:'/site/high-score-mark?action=change&name='+encodeURIComponent($("#highscore input.highscore").val())+'&score='+score})
						gameover = false;score = 0;$("#highscore").append("<small>press space to jump</small>");
						if($("#highscore input.highscore").val()=="")
							$(".your_score font").html("Anonym");
						else
							$(".your_score font").html($("#highscore input.highscore").val());
						})
				}
				else
				{
				gameover = false;
				score = 0;
					for(var i in res.list)
						$("#highscore").append("<p><b>"+res.list[i].score+"</b><font>"+res.list[i].name+":</font></p>");
						
				$("#highscore").append("<small>press space to jump</small>");
				}
			}
		})
		//$("#start-button").fadeIn(400);
		//$("#start-button p").html("Game over");

		$(".enemy").remove();
		$(".coin").remove();
		$(".endflag").remove();
	},2000)
}
ground_position = 0;
hero_position = 0;
count_decorations = 0;
score = 0;
gamestarted = false;
herojumped = false;
count_enemys = 0;
count_coins = 0;
var groundanimate;
var heroanimate;
var enemyspawn;
var scoreinterval;
var coinspawn;
gameover = false;
timer = 0;
function moveGround()
{

	groundanimate = setInterval(function(){
		ground_position--;
		if(ground_position==-40)
			ground_position = 0;
			
		$("#ground").css({'left':ground_position*2+'px'});
	}, 40/gamespeed);
}
function speedIntervalsReInit()
{
	temp = groundanimate;
	clearInterval(groundanimate);
	setInterval(temp,40/gamespeed);
	
	clearInterval(heroanimate);
	clearInterval(enemyspawn);
	clearInterval(scoreinterval);
}
function heroAnimate()
{
	heroanimate = setInterval(function(){
	
		hero_position++;
		if(hero_position==1)
			$("#hero").css({'background-position':'-63px -80px'});
		if(hero_position==2)
			$("#hero").css({'background-position':'-129px -80px'});
		if(hero_position==3)
			$("#hero").css({'background-position':'-199px -80px'});

		if(hero_position==3)
			hero_position =1;
	}, 600/gamespeed);
}
function startDecorations()
{
	count_decorations++;
	cloud_id = count_decorations;
	$("#main").append("<div class='cloud1' id='cloud1_"+cloud_id+"'></div>");
	top_position = Math.floor(20+(Math.random()*200));
		$("#cloud1_"+cloud_id).css({"top" : top_position+"px","left":"66%"});
	$("#cloud1_"+cloud_id).animate({"left":"-300"},(200000/gamespeed)/1.4, "linear");
	
	count_decorations++;
	cloud_id = count_decorations;
	$("#main").append("<div class='cloud2' id='cloud1_"+cloud_id+"'></div>");
	top_position = Math.floor(20+(Math.random()*200));
		$("#cloud1_"+cloud_id).css({"top" : top_position+"px","left":"33%"});
	$("#cloud1_"+cloud_id).animate({"left":"-300"},(200000/gamespeed)/1.7, "linear");
	
		setInterval(function(){
		i = Math.random();
		if(i<0.5)
			addCloud1();
		if(i>0.5)
			addCloud2();
		//if(i>0.6)
		//	addSecret();
	
	}, 25000/gamespeed);
}
function addCloud1()
{
	count_decorations++;
	var cloud_id = count_decorations;
	$("#main").append("<div class='cloud1' id='cloud1_"+cloud_id+"'></div>");
	top_position = Math.floor(20+(Math.random()*200));
		$("#cloud1_"+cloud_id).css({"top" : top_position+"px","left":"110%"});
		setTimeout(function(){$("#cloud1_"+cloud_id).addClass("cloud_animate");},100);
	//$("#cloud1_"+cloud_id).animate({"left":"-300"},200000/gamespeed, "linear");
	
	setTimeout(function(){
		$("#cloud1_"+cloud_id).remove();
	}, 50000)
	
}
function addCloud2()
{	
	count_decorations++;
	var cloud_id = count_decorations;
	$("#main").append("<div class='cloud2' id='cloud2_"+cloud_id+"'></div>");
	top_position = Math.floor(20+(Math.random()*200));
	$("#cloud2_"+cloud_id).css({"top" : top_position+"px","left":"110%"});
	//$("#cloud2_"+cloud_id).animate({"left":"-300"},200000/gamespeed, "linear");
	setTimeout(function(){$("#cloud2_"+cloud_id).addClass("cloud_animate");},100);
	
	setTimeout(function(){
		$("#cloud2_"+cloud_id).remove();
	}, 50000)

}
function addSecret()
{
	count_decorations++;
	cloud_id = count_decorations;
	$("#main").append("<div class='secret' id='secret_"+cloud_id+"'></div>");
	top_position = Math.floor(60+(Math.random()*100));
		$("#secret_"+cloud_id).css({"top": top_position+"px"});
	$("#secret_"+cloud_id).animate({"left":"-300"},200000/gamespeed, "linear");
}

function addEnemys()
{
	enemyspawn = setInterval(function(){
	if(stop_stage)
		clearInterval(enemyspawn);

		i = Math.random();
		if(i<0.02)
			addEnemy(4);
		if(i>0.02 && i<0.10 && stage > 4)
			addCustomEnemy(3);
			
		if(i > 0.1 && i < 0.25  && stage > 2 && stage <7)
			addCustomEnemy(2);
		// после 7го уровня, количество кактусов уменьшается в 2 раза
		if(i > 0.1 && i < 0.17  && stage >= 7)
			addCustomEnemy(2);
			
		if(i>0.25 && i< 0.5  && stage <6)
			addEnemy(1);
		// после 6го уровня - грибочков больше нет, вместо них, большие кактусы и черепахи
		if(stage>=6 && i>0.25 && i< 0.35)
			addCustomEnemy(3);
		if(stage>=6 && i>0.35 && i< 0.43)
			addEnemy(5);
			
		if(i>0.5 && i< 0.6)
			addEnemy(5);

			
	}, 4700/gamespeed);
	
	coinspawn = setInterval(function(){
	if(stop_stage)
		clearInterval(coinspawn);
		
		i = Math.random();
		
		coin_percent = 0.33 - (stage*0.018);
		if(coin_percent < 0.1)
			coin_percent = 0.1
		
		if(i<coin_percent)
			addCoin();
			
	}, 3000/gamespeed);
}
enemyloop = [];
coinloop = [];
function addEnemy(type)
{	
	if(stop_stage)
		return;
		
	position = $(window).width()+60;
	count_enemys++
	var enemy_id = count_enemys;
	$("#main").append("<div class='enemy enemy"+type+"' id='enemy_"+enemy_id+"' data-id='"+enemy_id+"'></div>");
	$("#enemy_"+enemy_id).css({'left':position});
	enemyloop[enemy_id] = setInterval(function(){
	
	if(!gamestarted || $("#enemy_"+enemy_id).length==0)
	{
		clearInterval(enemyloop[enemy_id] );
		return;
	}

	position = $("#enemy_"+enemy_id).position().left - 2;
		$("#enemy_"+enemy_id).css({'left':position});
		
		if(position>140 && position<160)
			$("#enemy_"+enemy_id).addClass("danger");
		else
			$("#enemy_"+enemy_id).removeClass("danger");
			
		if(position>65 && position<=140)
			$("#enemy_"+enemy_id).addClass("collect");
		else
			$("#enemy_"+enemy_id).removeClass("collect");
		
		if(position<-60)
		{
			clearInterval(enemyloop[enemy_id] );
			$("#enemy_"+enemy_id).remove();
		}
	}, 40/gamespeed);
	
}
function addCustomEnemy(type)
{	
	if(stop_stage)
		return;
		
	position = $(window).width()+60;
	count_enemys++
	var enemy_id = count_enemys;
	$("#main").append("<div class='enemy enemy"+type+"' id='enemy_"+enemy_id+"' data-id='"+enemy_id+"'></div>");
	$("#enemy_"+enemy_id).css({'left':position});
	enemyloop[enemy_id] = setInterval(function(){
	
	if(!gamestarted)
	{
		clearInterval(enemyloop[enemy_id] );
		return;
	}

	position = $("#enemy_"+enemy_id).position().left - 2;
		$("#enemy_"+enemy_id).css({'left':position});
		if(position<146 && position>82)
			$("#enemy_"+enemy_id).addClass("danger");
		else
			$("#enemy_"+enemy_id).removeClass("danger");
			

		if(position<-60)
		{
			clearInterval(enemyloop[enemy_id] );
			$("#enemy_"+enemy_id).remove();
		}
	}, 40/gamespeed);
	
}

function addCoin()
{	
	if(stop_stage)
		return;
	position = $(window).width()+60;
	count_coins++
	var coin_id = count_coins;
	
	purple = '';
	i = Math.random();
	if(i<0.1)
		purple = 'purple';
	if(i<0.027)
		purple = 'heart';
		
	$("#main").append("<div class='coin "+purple+"' id='coin_"+coin_id+"' data-id='"+coin_id+"'></div>");
	
	$("#coin_"+coin_id).css({'left':position});
	coinloop[coin_id] = setInterval(function(){
	
	if(!gamestarted)
	{
		clearInterval(coinloop[coin_id] );
		return;
	}

	position = $("#coin_"+coin_id).position().left - 2;
		$("#coin_"+coin_id).css({'left':position});
		
		if(position>64 && position<166)
		{
			$("#coin_"+coin_id).addClass("danger");
		}
		else
			$("#coin_"+coin_id).removeClass("danger");
		
		if(position<-60)
		{
			clearInterval(coinloop[coin_id]);
			$("#coin_"+coin_id).remove();
		}
	}, 40/gamespeed);
}

function heroJump()
{
	if(gameover || switchstagepause)
		return false;
	
	if(!gamestarted)
	{
		$("#start-button").click();
		return;
	}
	if(herojumped)
		return;
		
	herojumped = true;

	if(stage<3)
	{
		jump_power = 75
		jump_width = 3500;
	}
	else if(stage>=3 && stage < 6)
	{
		jump_power = 85
		jump_width = 3700;
	}
	else if(stage>=6)
	{
		jump_power = 95
		jump_width = 3900;
	}
		
	if($("#hero").hasClass("super"))
	{
		jump_power = jump_power*2.5;
		jump_width = jump_width*2.5;
		
		super_jump_sound.currentTime = 0;
		super_jump_sound.play()
	}
	else
	{
		jump_sound.currentTime = 0;
		jump_sound.play();
	}
	
	$("#hero").animate({"bottom":jump_power},(jump_width*0.57)/gamespeed, "easeOutQuad").animate({"bottom":0},(jump_width*0.43)/gamespeed, "easeInSine");
	setTimeout(function(){
		herojumped = false;
	}, jump_width*0.75/gamespeed);
}

function scorecalc()
{
	scoreinterval = setInterval(function(){
		if($("#hero").position().top>417)
		{
			if($(".enemy1.danger:not(.dead),.enemy2.danger:not(.dead),.enemy4.danger:not(.dead),.enemy5.danger:not(.dead)").length > 0)
			{
				$(".enemy.danger").addClass("dead");
				
				if(!$("#hero").hasClass("super"))
					lives--;
				else
					$("#hero").removeClass("super");
			
				$("#score b.lives").html(lives);
				herodead();
				
				if(lives<1)
				{
					gameOver();
					return;
				}
			}
			if($(".enemy.collect:not(.dead)").length > 0)
			{
				var temp_id = $(".enemy.collect").data("id");
				$(".enemy.collect").addClass("collected");
				if($("#enemy_"+temp_id).hasClass("enemy4"))
				{
					$("#hero").addClass("super");
					power_up.play();
				//	setTimeout(function(){$("#hero").removeClass("super");},20000);
				}
				if($("#enemy_"+temp_id).hasClass("enemy5"))
				{
					score+=12+(stage*3);
					enemy_dead.play();
				}
				if($("#enemy_"+temp_id).hasClass("enemy1"))
				{
					score+=8+(stage*2);
					enemy_dead.play();
				}
				
				setTimeout(function(){$("#enemy_"+temp_id).remove()},600);
			}
		}
		if($("#hero").position().top>405)
		{
			if($(".enemy3.danger:not(.dead)").length > 0)
			{
				$(".enemy.danger").addClass("dead");
				
				if(!$("#hero").hasClass("super"))
					lives--;
				else
					$("#hero").removeClass("super");
			
				$("#score b.lives").html(lives);
				herodead();
					
				if(lives<1)
				{
					gameOver();
					return;
				}
			}
		}
		
		if($("#hero").position().top<412)
		{
			if($(".coin.danger").length > 0)
			{
				coin_sound.currentTime = 0;
				coin_id = $(".coin.danger").data("id");
				if($(".coin.danger").hasClass("purple"))
				{
					score += 80+(20*stage);
					coin_sound.play();
				}
				else if($(".coin.danger").hasClass("heart"))
				{
					lives++;
					$("#score b.lives").html(lives);
					live_up.play();
				}
				else
				{
					score+=16+(4*stage);
					coin_sound.play();
				}
				clearInterval(coinloop[coin_id]);
				$("#coin_"+coin_id).remove();
			}
		}
	
	//	score++;
		
	timer ++;
	if(timer%5 == 0)
		score+= parseInt((stage-1)/1.5);
	
	$("#score b.score").html(score);
//	if(timer % 200 == 0 && timer != 0)
//		$(".head .background .overlay").toggleClass("night");

	tempcounter = 300+(stage*85);
	if(timer>tempcounter && !stop_stage)
	{
		timer = timer-tempcounter;
		addEndFlag();
	}
	
	},500/gamespeed);
}
function herodead()
{
	mario_dead.play();
	$("#hero").css({"opacity":"0.2"});

	setTimeout(function(){
		$("#hero").css({"opacity":"1"});
	},180)
	setTimeout(function(){
		$("#hero").css({"opacity":"0.2"});
	},360)
	setTimeout(function(){
		$("#hero").css({"opacity":"1"});
	},540)
	setTimeout(function(){
		$("#hero").css({"opacity":"0.2"});
	},720)
	setTimeout(function(){
		$("#hero").css({"opacity":"1"});
	},900)
}

function addEndFlag()
{
	stop_stage = true;
	
	position = $(window).width()+60;
	count_enemys++
	var enemy_id = count_enemys;
	$("#main").append("<div class='endflag' id='enemy_"+enemy_id+"' data-id='"+enemy_id+"'></div>");
	$("#enemy_"+enemy_id).css({'left':position});
	
	enemyloop[enemy_id] = setInterval(function(){
	
	if(!gamestarted)
	{
		clearInterval(enemyloop[enemy_id] );
		return;
	}
	
	position = $("#enemy_"+enemy_id).position().left - 2;
	
	
		$("#enemy_"+enemy_id).css({'left':position});

		if(position<50)
		{
			switchstagepause = true;
			score+=100+(stage*50);
			if(stage %3 == 0 )
				lives++;
				
			$("#score b.lives").html(lives);
			$("#score b.score").html(score);
			
			$(".head .background .overlay").removeClass("stage"+stage);
			$("#start-button").show()
			$("#start-button p").html("Stage "+stage+" clear!");
			$("#start-button small").html("stage and speed up!");
			clearInterval(enemyloop[enemy_id] );
			$("#enemy_"+enemy_id).remove();
			
				maintheme_sound.currentTime = 0;
				maintheme_sound.pause();
				stage_clear.play();
				clearInterval(groundanimate);
				clearInterval(heroanimate);
				clearInterval(enemyspawn);
				clearInterval(coinspawn);
				clearInterval(scoreinterval);
				
				gamestarted = false;
				$(".enemy").remove();
				$(".coin").remove();
				stage++;
				
				$(".head .background .overlay").addClass("stage"+stage);
				
				if(stage < 4)
					gamespeed+=0.5;
				if(stage >= 4 && stage < 7)
					gamespeed+=0.4;
				if(stage >= 7 && stage < 10)
					gamespeed+=0.3;
				if(stage >= 10)
					gamespeed+=0.2;
				
				
				$("#score b.stage").html(stage);
				
				setTimeout(function(){
					switchstagepause = false;
					$("#start-button").hide()
					stop_stage = false;
					$("#score b.stage").html(stage);
						gamestarted = true;
						
						moveGround();
						heroAnimate();
						heroJump();
						addEnemys();
						maintheme_sound.play();
						scorecalc();
						timer = 0;
						
					
				},5400)
		}
	}, 40/gamespeed);
}