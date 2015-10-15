<dd>
            	<ul class="m_ul">
                    {sline:gethotellist type='mdd' flag='recommend' row='6'}
                            <li [field:global.autoindex runphp='yes']if(@me%3==0)@me="class='mr_0'";else @me='';[/field:global.autoindex]>
                                <a class="fl" href="[field:url/]" target="_blank"><img class="fl" src="[field:lit240/]" width="231" height="164" alt="[field:title/]" title="[field:title/]" /></a>
                              <p class="p1">[field:price4/]<label><span>[field:shownum/]</span><i>人关注</i></label></p>
                              <p class="p2"><a href="[field:url/]" target="_blank">[field:title/]</a></p>
                            </li>
                    {/sline:gethotellist}


              </ul>
              <a class="more" href="/hotels/{sline:field.pinyin/}/" target="_blank">查看更多&gt;&gt;</a>
            </dd>