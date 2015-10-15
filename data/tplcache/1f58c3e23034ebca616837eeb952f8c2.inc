<li class="[field:global.autoindex runphp='yes'] if(@me%2==0) @me='mr_rig_0';else @me=''; [/field:global.autoindex]">
              <h3><a href="[field:url/]" target="_blank">[field:title/]</a></h3>
              <div class="li_left">
              	<p class="p1"><span>[field:array runphp="yes"]
                    @me=floor(@me['ourprice']/@me['sellprice']*100)/10; 
                [/field:array]</span>折</p>
                <p class="p2">
                	<span class="sp1 dao" id="tick[field:global.autoindex/]"><strong class="RemainD"></strong>天<strong class="RemainH"></strong>时<strong class="RemainM"></strong>分<strong class="RemainS"></strong>秒</span>
                  <span class="sp2">原价：¥[field:sellprice/]起</span>
				  <input type="hidden" class="ticktime" rel="tick[field:global.autoindex/]" value="[field:endtime function="date('Y/m/d H:i:s',@me)"/]">
                </p>
                <p class="p3"><span>¥[field:ourprice/]起</span><a href="[field:url/]"><img class="fl" src="/templets/smore/images/buy_yd.png"></a></p>
              </div>
              <div class="li_rig"><a href="[field:url/]" target="_blank"><img class="fl" src="[field:litpic/]" width="325" height="190" alt="[field:title/]" title="[field:title/]"></a></div>
            </li>