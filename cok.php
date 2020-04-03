<?php
/*
List ada di list.txt
mau buat sendiri list? silahkan buat dengan nama file list.txt
Semoga sukses:)
*/
echo "
------------------------------------------------------

MD5_CRACKER(LIST)

------------------------------------------------------
";
$list=file_get_contents("list.txt");
$exp=explode("\n",$list);
echo "Enskripsi? -> ";
$ens=trim(fgets(STDIN));
if(strlen($ens)==32){
	foreach($exp as $cok){
		if(md5($cok)==$ens){
			echo "Betul -> ".$cok."\n";
			exit;
		}else{
			echo "Salah -> ".$cok."\n";
			continue;
		}
	}
}else{
	echo "Wah bukan md5 ini.";
}
?>
