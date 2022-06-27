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
    "BloatBot™",
    "covfefe",
    "Funzo",
    "IceCreamBot",
    "IRC-Relay",
    "Lagger",
    "MathBot",
    "Matrix-Relay",
    "NetMC",
    "NetRunner",
    "Nickelodeon",
    "Balls",
    "MinBot",
    "NotSoBot",
    "NotSoWinBot",
    "NQN",
    "PlexBot",
    "Polaroid",
    "PythonBot",
    "PythonBot2",
    "Statbot",
    "TweetShift"
);
?>