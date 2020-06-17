<?php
$db=new PDO("mysql:host=localhost;dbname=ormvatf;charset=utf8","root","");

$sth =$db->query("SELECT * FROM documentation");
$rows=$sth->fetchAll(PDO::FETCH_ASSOC);

$stt =$db->query("SELECT * FROM amenagement_et_service_eau");
$ros=$stt->fetchAll(PDO::FETCH_ASSOC);

$stht =$db->query("SELECT * FROM news_events");
$row=$stht->fetchAll(PDO::FETCH_ASSOC);

$str =$db->query("SELECT * FROM guichet_unique");
$roe=$str->fetchAll(PDO::FETCH_ASSOC);

$sthh =$db->query("SELECT * FROM news_events ORDER BY date DESC LIMIT 4");
$rowa=$sthh->fetchAll(PDO::FETCH_ASSOC);

$stk =$db->query("SELECT * FROM ressources");
$rom=$stk->fetchAll(PDO::FETCH_ASSOC);

$sty =$db->query("SELECT * FROM projets_structurants");
$ron=$sty->fetchAll(PDO::FETCH_ASSOC);

$stv =$db->query("SELECT * FROM potentialites_investissement");
$rop=$stv->fetchAll(PDO::FETCH_ASSOC);

$sts =$db->query("SELECT * FROM plan_maroc_vert");
$rok=$sts->fetchAll(PDO::FETCH_ASSOC);

$stz =$db->query("SELECT * FROM office");
$rov=$stz->fetchAll(PDO::FETCH_ASSOC);

$stm =$db->query("SELECT * FROM developpement_agricole");
$roo=$stm->fetchAll(PDO::FETCH_ASSOC);

$stg =$db->query("SELECT * FROM site_organisme");
$roq=$stg->fetchAll(PDO::FETCH_ASSOC);
?>