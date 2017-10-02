# captcha
Simple PHP Captcha
# Parameters
<b>mode</b>: <i>"raw"/"b64"</i><br>
<b>length</b>: <i>The length of the generated random number. Accepted values 1-20.</i><br>
<b>type</b>: <i>"png", "jpeg", "gif"</i><br>
<b>tColor</b>: <i>Text colour in hex format without #.</i><br>
<b>bColor</b>: <i>Background colour in hex format without #.</i><br>
<b>lColor</b>: <i>Line colour in hex format without #.</i><br>
# Usage
<p><b>1. Raw Mode</b><br>
  <br>
  Just insert the PHP file as the image source: 'src=GellaiCaptcha.php?mode=raw' <i>('?mode=raw' is required)</i>.<br>
  <br>
  To pass any parameters use '?mode=raw&length=8lColor=646464' after the file name.</p>
<p><b>2. Base 64 Mode</b><br>
  <br>
  Include the class file and echo out the following '$gCaptcha->getCaptcha($param)'.<br>
  <br>
  To set any parameters use the '$param' as an array. E.g. '$param = array("length" => 8, "type" => "gif", "tColor" => "d40");'</p> 
