//@Project: Nick Higgins' Web Site 
//@Author:  Nicholas Higgins
//@Contact: spybob888@aol.com
//@Created: 10:33 AM Sunday, January 31, 2016
//@Modified: 11:25 AM Thursday, April 09, 2020


function randInt(size) {
    return Math.ceil(Math.random()*size);
  }
      function getJoke(jNum)
      {
          var mtQuotes = new Array();
          mtQuotes[1] = "time to kill pulseaudio";
                  
          return mtQuotes[jNum];
      }
      document.write(getJoke(randInt(1)));