<?php
function hr_filesize(int $bytes, int $decimals = 2) : string {
    $f = floor((strlen($bytes) - 1) / 3);
    $sizes = 'BKMGTP';
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $f)) . @$sizes[$factor];
}
