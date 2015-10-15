<div class="nr_pl_list">
              <dl class="nr_dl">
                <dt class="nr_dt"><img class="fl" src="{sline:field.litpic/}" width="45" height="45"></dt>
                <dd class="nr_dd">
                  <h4>{sline:field.nickname/}</h4>
                  <div class="nr_pl_con">{sline:field.content/}</div>
                  <div class="nr_pl_hf"><a href="javascript:;" onClick="funaddCommDiv(this,{sline:field.articleid/},{sline:field.id/},{sline:field.id/},4,0)">回复</a></div>
                  
                </dd>
              </dl>
              <div class="hf_con_div">
               {sline:getchildcomment typeid="4"}
                <dl class="hf_dl">
                  <dt class="hf_dt"><img class="fl" src="[field:litpic/]" width="45" height="45"></dt>
                  <dd class="hf_dd">
                    <h4>[field:nickname/]</h4>
                    <div class="nr_hf_con">回复<span>@[field:replynickname/]</span>：[field:content/]</div>
                    <div class="nr_hf_hf"><a href="javascript:;" onClick="funaddCommDiv(this,[field:articleid/],[field:id/],[field:dockid/],4,1)">回复</a></div>
                    
                  </dd>
                </dl>
               {/sline:getchildcomment} 
              </div>
            </div>