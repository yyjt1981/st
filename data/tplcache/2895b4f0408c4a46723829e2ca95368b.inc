<div class="article_list {sline:global.itemindex runphp='yes'}if(@me%4==0)@me='mr_0';else @me='';{/sline:global.itemindex}">
          <h3>{sline:field.kindname/}</h3>
          <ul>
            {sline:getarclist flag='attr' row='6'}
              <li><a href="[field:url/]" target="_blank">[field:title/]</a></li>
            {/sline:getarclist}
          
          </ul>
        </div>