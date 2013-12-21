 <div id="boxes" style="display:none;">
      <div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
         <div style="" id="dialog" class="window">
             <div align="right" style="font-weight:bold; margin:5px 3px 0 0;"><a href="javascript:void()" class="close">
                <img src="img/close1.png" width="16" style="border:none; cursor:pointer;" /></a>
             </div>
            <div align="center" style="margin:6px 0 5px 0;">
                 
              <a href="Order"><img src="img/popup.png"width="910"></a>
            </div>
            <!-- Mask to cover the whole screen -->
          </div>
    </div>


<script>

function setCookie(name,value,days)
{
var date = new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires = "; expires="+date.toGMTString();
document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name)
{
var nameEQ = name + "=";
var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1,c.length);
if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
}
return null;
}

function checkCookie()
{
var username=getCookie("username");
if (username!=null && username!="")
  {
  
  }
else 
  {
  username="maisafoods";
  if (username!=null && username!="")
    {
    document.getElementById('boxes').style.display = 'block';
    setCookie("username",username,365);
    }
  }
}

</script>