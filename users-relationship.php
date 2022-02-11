<?php

use BlueCity\UrSdk\UserRelationship;

include_once(__DIR__ . '/vendor/autoload.php');

// Host 根据qconf地址获取，区分国内、国际
// /blued/service/users/service/relationship_tc
// /blued/service/users/service/relationship_sg
$host = "10.9.84.4:9998";
// Token 业务流量
$token = "token";
// Timeout 接口超时时间，单位秒
$timeout = 4;
// 国内请传递 Users-Relationships;
// 国际请传递 Users-Relationships-Oversea;
$service = "Users-Relationships";

// 实例化
$ursdk = new UserRelationship([
  "host" => $host,
  "token" => $token,
  "timeout" => $timeout,
  "service" => $service,
]);

$ursdk->GetUsersCount(133);
$ursdk->GetUsersFans(133, 1, 20);

$ursdk->GetFollowed(133, 1, 20);
$ursdk->AddFollowed(9337210, 113);
$ursdk->AddFollowedBatch(9337210, [113, 133]);
$ursdk->DelFollowed(9337210, 113);

$ursdk->GetBlacklist(67, 1, 20);
$ursdk->AddBlacklist(9337210, 113, 50, 0);
$ursdk->DelBlacklist(9337210, 113);
$ursdk->DelBlacklistBatch(9337210, [113, 114]);

$ursdk->Getfriends(27, 1, 20);
$ursdk->SearchFriends(158, "1", 1, 20);

$ursdk->AddSecretlyFollowed(9337210, 113);

$ursdk->AddVisited(9337210, 113, 0, 0, 1621666156.01);

$ursdk->GetRelationship(9337210, 113);
$ursdk->GetRelationshipBatch(9337210, [113, 114, 115]);

$ursdk->GetRelationshipBatchZScore(9337210, [0, 1], [114, 115]);
$ursdk->GetRelationshipBatchZCard(9337210, [0, 1]);
$ursdk->GetRelationshipBatchZRevRange(9337210, [0, 1], 0, -1);
$ursdk->GetRelationshipBatchZRevRangeWithscores(9337210, [0, 1], 0, -1);

$ursdk->GetRelationshipKeyZCount(9337210, "followed", 0, 1627474676);
$ursdk->GetRelationshipKeyZScore(9337210, "followed", 114);
$ursdk->GetRelationshipKeyZRange(9337210, "followed", 0, -1);
$ursdk->GetRelationshipKeyZRangeWithscores("9337210", "followed", 0, -1);
$ursdk->GetRelationshipKeyZCard(9337210, "followed");
$ursdk->GetRelationshipKeyZRevRange(9337210, "followed", 0, -1);
$ursdk->GetRelationshipKeyZRevRangeWithscores(9337210, "followed", 0, -1);
$ursdk->GetRelationshipKeyZRank(9337210, "followed", 114);
$ursdk->GetRelationshipKeyZRangeByScore(9337210, "followed", 0, -1);
$ursdk->GetRelationshipKeyZRangeByScoreWithscores(9337210, "followed", 0, -1);

$ursdk->PostRelationshipBatchZAdd(9337210, "visited", ["113:1621848889.03", "114:1621848889.01"], false);
$ursdk->PostRelationshipBatchZRem(9337210, "visited", [127, 122], false);

$ursdk->PostRelationshipKeyZAdd(9337210, "visited", "1621844987.01,115,1621844987,116");

$ursdk->GetSetting(9337210);
$ursdk->GetSettingBatch(9337210, [9337210, 114], ["is_open_private_photos", "is_access_groups", "is_access_push"]);
$ursdk->SetSetting(9337210, array("is_open_private_photos" => 1, "is_access_groups" => 1));
$ursdk->DelSetting(9337210, ["is_open_private_photos", "is_access_groups"]);

$ursdk->GetNotes(9337210, 113);
$ursdk->GetNotesTarget(158);
$ursdk->GetNotesBatch(9337210, [113, 114, 115, 116, 117, 118, 119]);
$ursdk->SetNotes(9337210, 113, "想添加个备注");
