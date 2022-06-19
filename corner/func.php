<?php
function truncate ($text, $length) {
    if (strlen($text) > $length) return substr($text, 0, $length) . '...';
    else return $text;
}

function status ($status) {
    switch ($status) {
        case 'online':
            return 'Online';
        case 'dnd':
            return 'DND';
        case 'idle':
            return 'Idle';
        default:
            return 'Unknown';
    }
}

$bots = array(
    "NotSoBalls",
    "NotSoDingus",
    "NotSoIRC-Relay",
    "NotSoLogger",
    "NotSoMatrixRelay",
    "NotSoNetMC",
    "NotSoNetRunner",
    "NotSoNickelodeon",
    "NotSoNotSoBot",
    "NotSoNQN",
    "NotSoPythonBot",
    "NotSoRythm",
    "NotSoStatbot",
    "NotSoTweetShift"
);
?>