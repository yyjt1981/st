
<!--左侧导航区-->
  <div class="menu-left">
    <div class="global_nav">
        <div class="kj_tit">快捷</div>
        <div class="mc" style="display:none">
          <div class="tall" style="display:none">
            <span class="tit_bt">
              <h3><a class="title_bt" href="#">产品</a></h3>
            </span>
            <div class="gl_nav_con" style="display:none">
              <div class="subitem">
<dl>
                <dt>热门景区</dt>
                  <dd>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-tab-a leftnav">
        <?php
          $menu = Common::getConfig('menu_sub.'.$parentkey);
          foreach($menu as $row)
          {
              $class = $row['itemid'] == $itemid ? " class='active' " : '';
              echo '<a href="javascript:;"'.$class.' data-url="'.$row['url'].'">'.$row['name'].'</a>';
          }
        ?>
      </div>
    </div>
<script>
         $(document).ready(function(e) {
             /*$(".global_nav").mouseover(function(){
                $(this).children(".mc").show()
                    $(this).children().children(".tall").show()
                    })
                   $(".global_nav").mouseout(function(){
                       $(this).children(".mc").hide()
                    $(this).children().children(".tall").hide()
                    })
                });
                $(".global_nav div .tall").hover(function(e){
                        $(this).siblings().removeClass("hover").find(".gl_nav_con").hide();
                        $(this).addClass("hover");
                        $(this).find(".gl_nav_con").show();
                    },
                    function(e){
                        $(this).removeClass("hover");
                        $(this).find(".gl_nav_con").hide();
                    }
                );*/
                //导航点击
                $(".leftnav").find('a').click(function(){
                    var url= $(this).attr('data-url');
                    var title = $(this).html();
                    ST.Util.addTab(title,url);
                })
         })
       </script>