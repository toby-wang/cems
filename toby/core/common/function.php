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

function upfile($category)
{
	 if (!empty($_FILES['file'])) {//判断上传内容是否为空  
        if ($_FILES['file']['error'] > 0) {//判断上传错误信息  
            echo "上传错误：";  
            switch ($_FILES['file']['error']) {  
                case 1:  
                    echo "上传文件大小超出配置文件规定值";  
                    break;  
                case 2:  
                    echo "上传文件大小超出表单中的约定值";  
                    break;  
                case 3:  
                    echo "上传文件不全";  
                    break;  
                case 4:  
                    echo "没有上传文件";  
                    break;  
            }  
        } else {
            if ($category=="teacher") {
            list($maintype, $subtype) = explode("/", $_FILES['file']['type']);  
            //print_r($maintype);echo "<br>";
            //print_r($subtype);die;
            if ($maintype != "application" || $subtype != "vnd.openxmlformats-officedocument.spreadsheetml.sheet") {  
                echo "<script>alert(\"上传文件格式不正确！！！\");history.go(-1)</script>";  
            } else {  
                $path = './upfile/'.$category.'/'. time() . strtolower(strstr($_FILES['file']['name'], "."));//定义上传文件名和存储位置  
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {//判断文件上传是否为HTTP POST上传  
                    if (!move_uploaded_file($_FILES['file']['tmp_name'],$path)) {//执行上传操作  
                        echo "<script>alert(\"上传失败！！！\");history.go(-1)</script>";  
                    } else {  
                        return "1";  
                    }  
                } else {  
                    echo "<script>alert(\"上传文件不合法！！！\");history.go(-1)</script>";  
                }  
            }
            }elseif ($category=="student") {
               $path = './upfile/'.$category.'/'. time() . strtolower(strstr($_FILES['file']['name'], "."));//定义上传文件名和存储位置  
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {//判断文件上传是否为HTTP POST上传  
                    if (!move_uploaded_file($_FILES['file']['tmp_name'],$path)) {//执行上传操作  
                        echo "<script>alert(\"上传失败！！！\");history.go(-1)</script>";  
                    } else {  
                        return "1";  
                    }  
                } else {  
                    echo "<script>alert(\"上传文件不合法！！！\");history.go(-1)</script>";  
                }  
            } 
        }  
    }  
}




