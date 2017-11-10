<?php
function p($var)
{
	if (is_bool($var)) {
		var_dump($var);
	}else if (is_null($var)) {
		var_dump(NULL);
	}else{
		echo "<pre style='position:relative;
		z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;
		border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>".print_r($var,true)."</pre>";
	}

}

function url()
{
	print_r($_SERVER["SERVER_NAME"]."/cems/toby/application/");
}
// function get_ipv4(){
//     if (isset($_ENV["HOSTNAME"])){
//         $MachineName = $_ENV["HOSTNAME"];
//     } else if(isset($_ENV["COMPUTERNAME"])){
//         $MachineName = $_ENV["COMPUTERNAME"];
//     }else{
//         $MachineName = "";
//     }
//     echo gethostbyname($MachineName);
// }




