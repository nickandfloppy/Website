
	<?php require('../head.php'); ?>
	<title>nick and floppy's website</title>
	<style>
	.dnd {
		border: 5px #f04747 solid;
	}
	.online {
		border: 5px #43b581 solid;
	}
	.idle {
		border: 5px #faa61a solid;
	}
    body {
        background-color: #3c3c84 !important;
        background-image: url('') !important;
    }
	</style>
<?php
require('func.php');
$rawJson = file_get_contents('https://discord.com/api/guilds/764493398983049246/widget.json');
if ($rawJson == "") {
    echo "<i><pre>Error retrieving data</pre></i>";
} else {
    echo '<table border="1">';
    $server = (json_decode($rawJson));
    echo '<tr><td colspan="2"><b><i>' . $server->name . '</i></b><br><a href="' . $server->instant_invite . '"><button type="button">Join Server</button></a></td></tr>';
    echo '</td></table>';

    echo '<h2><u>Voice Channels</u></h2>';
    echo '<table border="1">';
    $vcs = "";
    $emptyvcs = "";
    foreach ($server->channels as $channel) {
        $members = "";
        foreach ($server->members as $member) {
            if (isset($member->deaf)) {
                if ($member->channel_id === $channel->id) {
                    if (in_array($member->username, $bots)) $uname = '[BOT] ' . $member->username;
                    else $uname = $member->username;
                    $members = $members . '<img src="' . $member->avatar_url . '" width="32" title="' . $uname . '">&nbsp;';
                }
            }
        }
        if ($members === "") $emptyvcs = $emptyvcs .  '<tr><td>' . $channel->name . '</td><td><i>Empty</i></td></tr>';
        else $vcs = $vcs . '<tr><td>' . $channel->name . '</td><td>' . $members . '</td></tr>';
    }
    echo $vcs;
    echo $emptyvcs;
    echo '</table>';

    echo '<h2><u>Online Members (' . $server->presence_count . ' total)</u></h2>';
    echo '<table border="1"><tr><th>Avatar</th><th>Username</th><th>Game/VC</th></tr>';
    foreach ($server->members as $member) {
        $uname = $member->username;
        $uname = str_replace("<", "<~", $uname);
        $uname = str_replace(">", "~>", $uname);
        if (in_array($member->username, $bots)) {
            $uname = '[BOT] ' . $uname;
        }
        echo '<tr><td><a href="' . $member->avatar_url . '"><img src="' . $member->avatar_url . '" width="64" class="' . $member->status . '" title="' . $uname . '"></a></td><td>' . truncate($uname, 25) . '</td><td>';
        if (isset($member->game)) echo 'Playing <b>' . truncate($member->game->name, 25) . '</b><br>';
        echo ' ';
        if (isset($member->deaf)) {
            // Find which VC a user is in
            foreach ($server->channels as $voicechannel) {
                if ($voicechannel->id === $member->channel_id) {
                    echo 'In <b>' . $voicechannel->name . '</b>';
                    $vcstat = "";
                    if ($member->deaf) $vcstat = $vcstat . 'D ';
                    if ($member->mute) $vcstat = $vcstat . 'M ';
                    if ($member->self_deaf) $vcstat = $vcstat . 'SD ';
                    if ($member->self_mute) $vcstat = $vcstat . 'SM ';
                    if ($member->suppress) $vcstat = $vcstat . 'S ';
                    if ($vcstat != "") echo ' (' . substr($vcstat, 0, strlen($vcstat) - 1) . ')';
                    echo '</td></tr>';
                }
            }
        }
    }
    echo '</table>';
}
?>