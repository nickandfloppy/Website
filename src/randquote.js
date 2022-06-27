//@Project: nick and floppy's website (adapted from Nick Higgins' Web Site)
//@Author:  Nicholas Higgins
//@Contact: spybob888@aol.com
//@Created: 10:33 AM Sunday, January 31, 2016
//@Modified: 6:01 PM Monday, June 27, 2022

function randInt(size) {
    return Math.ceil(Math.random()*size);
}

function getJoke(jNum) {
    var mtQuotes = new Array();
    mtQuotes[1] = '"time to kill pulseaudio"<br><i>~ nick99nack</i>';
    mtQuotes[2] = '"come on you stupid pub"<br><i>~ nick99nack</i>';
    mtQuotes[3] = '"MiB is the succ"<br><i>~ nick99nack</i>';
    mtQuotes[4] = '"boomlarmed"<br><i>~ floppydisk</i>';
    mtQuotes[5] = '"oh n"<br><i>~ nick99nack</i>';
    mtQuotes[6] = '"csuce me"<br><i>~ nick99nack</i>';
    
    return mtQuotes[jNum];
}

// Ensure you update the randInt arg when you add/del items
document.write(getJoke(randInt(6)));
