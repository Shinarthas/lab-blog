function initelements(){$(".head .background .overlay").html('<div id="main"></div><div id="ground"></div>'),$(".head .background .overlay").css({"overflow-x":"hidden"}),$("#main").append('<div id="score">Score: <b class="score">0</b><br>Lives: <img data-src="/images/mario/heart.png" style="height:14px;">x<b class="lives">3</b><br>Stage: <b class="stage">1</b></div>'),$("#main").append('<div id="start-button"><p>SuperMario Run</p><small>press space to jump</small></div>'),$("#main").append('<div id="hero"></div>'),$("#main").append('<div id="highscore"></div>'),$("#main").append('<div id="jump-button">Space = jump</div>'),$("#main").fadeIn(500),$("#ground").fadeIn(500)}function gamestart(){gamespeed=4,gamestarted=!0,lives=3,moveGround(),heroAnimate(),heroJump(),scorecalc(),$("#score").fadeIn(400),addEnemys(),$("#jump-button").show(),$("#highscore").hide(),maintheme_sound.currentTime=0,maintheme_sound.play(),timer=0,$(".head .background .overlay").removeClass("night"),$("#score b.lives").html(lives),stage=1,$("#score b.stage").html(stage)}function gameOver(){maintheme_sound.pause(),clearInterval(groundanimate),clearInterval(heroanimate),clearInterval(enemyspawn),clearInterval(coinspawn),clearInterval(scoreinterval),$(".head .background .overlay").removeClass("stage"+stage),gameover_sound.play(),gamestarted=!1,console.log("gameover"),gameover=!0,stop_stage=!1,setTimeout(function(){$.ajax({url:"/site/high-score?user_result="+score+"&v="+Math.random(),dataType:"json",success:function(e){if($("#highscore").show(),$("#highscore").html(""),$("#highscore").append("<h3>Highscore:</h3>"),e.position<10){for(var o in e.list)o==e.position?$("#highscore").append("<p class='your_score'><b>"+e.list[o].score+"</b><font><input class='highscore' placeholder='Anonym' maxlength=10><input type='submit' value='save' class='highscore_submit'></font></p>"):$("#highscore").append("<p><b>"+e.list[o].score+"</b><font>"+e.list[o].name+":</font></p>");$("#highscore input.highscore").focus(),$(".highscore_submit").click(function(){$.ajax({url:"/site/high-score-mark?action=change&name="+encodeURIComponent($("#highscore input.highscore").val())+"&score="+score}),gameover=!1,score=0,$("#highscore").append("<small>press space to jump</small>"),""==$("#highscore input.highscore").val()?$(".your_score font").html("Anonym"):$(".your_score font").html($("#highscore input.highscore").val())})}else{for(var o in gameover=!1,score=0,e.list)$("#highscore").append("<p><b>"+e.list[o].score+"</b><font>"+e.list[o].name+":</font></p>");$("#highscore").append("<small>press space to jump</small>")}}}),$(".enemy").remove(),$(".coin").remove(),$(".endflag").remove()},2e3)}var groundanimate,heroanimate,enemyspawn,scoreinterval,coinspawn;function moveGround(){groundanimate=setInterval(function(){ground_position--,-40==ground_position&&(ground_position=0),$("#ground").css({left:2*ground_position+"px"})},40/gamespeed)}function speedIntervalsReInit(){temp=groundanimate,clearInterval(groundanimate),setInterval(temp,40/gamespeed),clearInterval(heroanimate),clearInterval(enemyspawn),clearInterval(scoreinterval)}function heroAnimate(){heroanimate=setInterval(function(){hero_position++,1==hero_position&&$("#hero").css({"background-position":"-63px -80px"}),2==hero_position&&$("#hero").css({"background-position":"-129px -80px"}),3==hero_position&&$("#hero").css({"background-position":"-199px -80px"}),3==hero_position&&(hero_position=1)},600/gamespeed)}function startDecorations(){count_decorations++,cloud_id=count_decorations,$("#main").append("<div class='cloud1' id='cloud1_"+cloud_id+"'></div>"),top_position=Math.floor(20+200*Math.random()),$("#cloud1_"+cloud_id).css({top:top_position+"px",left:"66%"}),$("#cloud1_"+cloud_id).animate({left:"-300"},2e5/gamespeed/1.4,"linear"),count_decorations++,cloud_id=count_decorations,$("#main").append("<div class='cloud2' id='cloud1_"+cloud_id+"'></div>"),top_position=Math.floor(20+200*Math.random()),$("#cloud1_"+cloud_id).css({top:top_position+"px",left:"33%"}),$("#cloud1_"+cloud_id).animate({left:"-300"},2e5/gamespeed/1.7,"linear"),setInterval(function(){i=Math.random(),i<.5&&addCloud1(),i>.5&&addCloud2()},25e3/gamespeed)}function addCloud1(){count_decorations++;var e=count_decorations;$("#main").append("<div class='cloud1' id='cloud1_"+e+"'></div>"),top_position=Math.floor(20+200*Math.random()),$("#cloud1_"+e).css({top:top_position+"px",left:"110%"}),setTimeout(function(){$("#cloud1_"+e).addClass("cloud_animate")},100),setTimeout(function(){$("#cloud1_"+e).remove()},5e4)}function addCloud2(){count_decorations++;var e=count_decorations;$("#main").append("<div class='cloud2' id='cloud2_"+e+"'></div>"),top_position=Math.floor(20+200*Math.random()),$("#cloud2_"+e).css({top:top_position+"px",left:"110%"}),setTimeout(function(){$("#cloud2_"+e).addClass("cloud_animate")},100),setTimeout(function(){$("#cloud2_"+e).remove()},5e4)}function addSecret(){count_decorations++,cloud_id=count_decorations,$("#main").append("<div class='secret' id='secret_"+cloud_id+"'></div>"),top_position=Math.floor(60+100*Math.random()),$("#secret_"+cloud_id).css({top:top_position+"px"}),$("#secret_"+cloud_id).animate({left:"-300"},2e5/gamespeed,"linear")}function addEnemys(){enemyspawn=setInterval(function(){stop_stage&&clearInterval(enemyspawn),i=Math.random(),i<.02&&addEnemy(4),i>.02&&i<.1&&stage>4&&addCustomEnemy(3),i>.1&&i<.25&&stage>2&&stage<7&&addCustomEnemy(2),i>.1&&i<.17&&stage>=7&&addCustomEnemy(2),i>.25&&i<.5&&stage<6&&addEnemy(1),stage>=6&&i>.25&&i<.35&&addCustomEnemy(3),stage>=6&&i>.35&&i<.43&&addEnemy(5),i>.5&&i<.6&&addEnemy(5)},4700/gamespeed),coinspawn=setInterval(function(){stop_stage&&clearInterval(coinspawn),i=Math.random(),coin_percent=.33-.018*stage,coin_percent<.1&&(coin_percent=.1),i<coin_percent&&addCoin()},3e3/gamespeed)}function addEnemy(e){if(!stop_stage){position=$(window).width()+60,count_enemys++;var o=count_enemys;$("#main").append("<div class='enemy enemy"+e+"' id='enemy_"+o+"' data-id='"+o+"'></div>"),$("#enemy_"+o).css({left:position}),enemyloop[o]=setInterval(function(){gamestarted&&0!=$("#enemy_"+o).length?(position=$("#enemy_"+o).position().left-2,$("#enemy_"+o).css({left:position}),position>140&&position<160?$("#enemy_"+o).addClass("danger"):$("#enemy_"+o).removeClass("danger"),position>65&&position<=140?$("#enemy_"+o).addClass("collect"):$("#enemy_"+o).removeClass("collect"),position<-60&&(clearInterval(enemyloop[o]),$("#enemy_"+o).remove())):clearInterval(enemyloop[o])},40/gamespeed)}}function addCustomEnemy(e){if(!stop_stage){position=$(window).width()+60,count_enemys++;var o=count_enemys;$("#main").append("<div class='enemy enemy"+e+"' id='enemy_"+o+"' data-id='"+o+"'></div>"),$("#enemy_"+o).css({left:position}),enemyloop[o]=setInterval(function(){gamestarted?(position=$("#enemy_"+o).position().left-2,$("#enemy_"+o).css({left:position}),position<146&&position>82?$("#enemy_"+o).addClass("danger"):$("#enemy_"+o).removeClass("danger"),position<-60&&(clearInterval(enemyloop[o]),$("#enemy_"+o).remove())):clearInterval(enemyloop[o])},40/gamespeed)}}function addCoin(){if(!stop_stage){position=$(window).width()+60,count_coins++;var e=count_coins;purple="",i=Math.random(),i<.1&&(purple="purple"),i<.027&&(purple="heart"),$("#main").append("<div class='coin "+purple+"' id='coin_"+e+"' data-id='"+e+"'></div>"),$("#coin_"+e).css({left:position}),coinloop[e]=setInterval(function(){gamestarted?(position=$("#coin_"+e).position().left-2,$("#coin_"+e).css({left:position}),position>64&&position<166?$("#coin_"+e).addClass("danger"):$("#coin_"+e).removeClass("danger"),position<-60&&(clearInterval(coinloop[e]),$("#coin_"+e).remove())):clearInterval(coinloop[e])},40/gamespeed)}}function heroJump(){if(gameover||switchstagepause)return!1;gamestarted?herojumped||(herojumped=!0,stage<3?(jump_power=75,jump_width=3500):stage>=3&&stage<6?(jump_power=85,jump_width=3700):stage>=6&&(jump_power=95,jump_width=3900),$("#hero").hasClass("super")?(jump_power*=2.5,jump_width*=2.5,super_jump_sound.currentTime=0,super_jump_sound.play()):(jump_sound.currentTime=0,jump_sound.play()),$("#hero").animate({bottom:jump_power},.57*jump_width/gamespeed,"easeOutQuad").animate({bottom:0},.43*jump_width/gamespeed,"easeInSine"),setTimeout(function(){herojumped=!1},.75*jump_width/gamespeed)):$("#start-button").click()}function scorecalc(){scoreinterval=setInterval(function(){if($("#hero").position().top>417){if($(".enemy1.danger:not(.dead),.enemy2.danger:not(.dead),.enemy4.danger:not(.dead),.enemy5.danger:not(.dead)").length>0&&($(".enemy.danger").addClass("dead"),$("#hero").hasClass("super")?$("#hero").removeClass("super"):lives--,$("#score b.lives").html(lives),herodead(),lives<1))return void gameOver();if($(".enemy.collect:not(.dead)").length>0){var e=$(".enemy.collect").data("id");$(".enemy.collect").addClass("collected"),$("#enemy_"+e).hasClass("enemy4")&&($("#hero").addClass("super"),power_up.play()),$("#enemy_"+e).hasClass("enemy5")&&(score+=12+3*stage,enemy_dead.play()),$("#enemy_"+e).hasClass("enemy1")&&(score+=8+2*stage,enemy_dead.play()),setTimeout(function(){$("#enemy_"+e).remove()},600)}}$("#hero").position().top>405&&$(".enemy3.danger:not(.dead)").length>0&&($(".enemy.danger").addClass("dead"),$("#hero").hasClass("super")?$("#hero").removeClass("super"):lives--,$("#score b.lives").html(lives),herodead(),lives<1)?gameOver():($("#hero").position().top<412&&$(".coin.danger").length>0&&(coin_sound.currentTime=0,coin_id=$(".coin.danger").data("id"),$(".coin.danger").hasClass("purple")?(score+=80+20*stage,coin_sound.play()):$(".coin.danger").hasClass("heart")?(lives++,$("#score b.lives").html(lives),live_up.play()):(score+=16+4*stage,coin_sound.play()),clearInterval(coinloop[coin_id]),$("#coin_"+coin_id).remove()),timer++,timer%5==0&&(score+=parseInt((stage-1)/1.5)),$("#score b.score").html(score),tempcounter=300+85*stage,timer>tempcounter&&!stop_stage&&(timer-=tempcounter,addEndFlag()))},500/gamespeed)}function herodead(){mario_dead.play(),$("#hero").css({opacity:"0.2"}),setTimeout(function(){$("#hero").css({opacity:"1"})},180),setTimeout(function(){$("#hero").css({opacity:"0.2"})},360),setTimeout(function(){$("#hero").css({opacity:"1"})},540),setTimeout(function(){$("#hero").css({opacity:"0.2"})},720),setTimeout(function(){$("#hero").css({opacity:"1"})},900)}function addEndFlag(){stop_stage=!0,position=$(window).width()+60,count_enemys++;var e=count_enemys;$("#main").append("<div class='endflag' id='enemy_"+e+"' data-id='"+e+"'></div>"),$("#enemy_"+e).css({left:position}),enemyloop[e]=setInterval(function(){gamestarted?(position=$("#enemy_"+e).position().left-2,$("#enemy_"+e).css({left:position}),position<50&&(switchstagepause=!0,score+=100+50*stage,stage%3==0&&lives++,$("#score b.lives").html(lives),$("#score b.score").html(score),$(".head .background .overlay").removeClass("stage"+stage),$("#start-button").show(),$("#start-button p").html("Stage "+stage+" clear!"),$("#start-button small").html("stage and speed up!"),clearInterval(enemyloop[e]),$("#enemy_"+e).remove(),maintheme_sound.currentTime=0,maintheme_sound.pause(),stage_clear.play(),clearInterval(groundanimate),clearInterval(heroanimate),clearInterval(enemyspawn),clearInterval(coinspawn),clearInterval(scoreinterval),gamestarted=!1,$(".enemy").remove(),$(".coin").remove(),stage++,$(".head .background .overlay").addClass("stage"+stage),stage<4&&(gamespeed+=.5),stage>=4&&stage<7&&(gamespeed+=.4),stage>=7&&stage<10&&(gamespeed+=.3),stage>=10&&(gamespeed+=.2),$("#score b.stage").html(stage),setTimeout(function(){switchstagepause=!1,$("#start-button").hide(),stop_stage=!1,$("#score b.stage").html(stage),gamestarted=!0,moveGround(),heroAnimate(),heroJump(),addEnemys(),maintheme_sound.play(),scorecalc(),timer=0},5400))):clearInterval(enemyloop[e])},40/gamespeed)}gamespeed=4,lives=0,stop_stage=!1,stage=1,switchstagepause=!1,window.onload=function(){setTimeout(function(){$(document).width()<800||($("body").append("<script src='/scripts/jquery-ui.min.js'><\/script>"),initelements(),startDecorations(),jump_sound=new Audio("/sounds/smb_jump-small.wav"),super_jump_sound=new Audio("/sounds/smb_jump-super.wav"),gameover_sound=new Audio("/sounds/smb_gameover.wav"),coin_sound=new Audio("/sounds/smb_coin.wav"),maintheme_sound=new Audio("/sounds/maintheme2.mp3"),maintheme_sound.loop=!0,maintheme_sound.volume=.8,enemy_dead=new Audio("/sounds/smb_bump.wav"),mario_dead=new Audio("/sounds/smb_pipe.wav"),live_up=new Audio("/sounds/smb_1-up.wav"),stage_clear=new Audio("/sounds/smb_stage_clear.wav"),power_up=new Audio("/sounds/smb_powerup.wav"),$("#start-button").click(function(){$(this).hide(),gamestart()}),$(document).keydown(function(e){"highscore"!=e.target.className&&32==e.keyCode&&(e.preventDefault(),heroJump())}),$("#jump-button").click(function(){heroJump()}))},2e3)},ground_position=0,hero_position=0,count_decorations=0,score=0,gamestarted=!1,herojumped=!1,count_enemys=0,count_coins=0,gameover=!1,timer=0,enemyloop=[],coinloop=[];