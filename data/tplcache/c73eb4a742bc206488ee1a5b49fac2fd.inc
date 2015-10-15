<li>
                	<a class="fl" href="[field:url/]" target="_blank"><img class="fl" src="[field:lit240/]" width="186" height="115" alt="[field:title/]" title="[field:title/]" /></a>
                  <h4><a href="[field:url/]" target="_blank">[field:title/]</a></h4>
                  <p class="p1"><span class="sp_1"><a href="/raiders/[field:pinyin/]" target="_blank">[[field:destname/]]</a></span>&nbsp;-&nbsp;[field:attrnamearr runphp='yes']
                      foreach(@me as $k=>$v)
                      {
                      $str.=" - [<a target=\"_blank\" href=\"/raiders/all-{$k}\">{$v}</a>]";
                      }
                      @me=$str;
                      [/field:attrnamearr]<span class="sp_2">[field:shownum/]</span></p>
                  <p class="p2">[field:content function="cutstr_html(@me,50)"/]</p>
                </li>