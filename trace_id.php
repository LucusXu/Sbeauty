<?php
$arr = gettimeofday();
$t = $arr['sec'] * 100000 + $arr['usec'] / 10;
$traceId = $t & 0x7FFFFFFF;
$traceId = $traceId | 0x80000000;
