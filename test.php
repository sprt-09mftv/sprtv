<?php

require 'engine/engine.php';

$URL = 'http://sgw.ott.tricolor.tv/streamingGateway/GetLivePlayList?source=Retro_FM.m3u8&serviceArea=MSK-SA-1';

Master::Setup($URL);

if(Master::GetResolution() && Master::GetFiles()) {
	Master::PrintDebug();
}

if(Master::GetResolution() && Master::GetFiles()) {
	$Target = Master::Get('files');		// 1920x1080
	if(Master::Start($Target[3])) {
		echo "Download - Completed";
	}
}


?>
