<!-- 循环读出数据开始 -->
                  <div class="column_int tablelist">
                    <h3 class="col_h3">[field:chinesename/][field:columnname runphp='yes']if(@me=='jieshao')@me='<a href="print_'.$GLOBALS['row']['aid'].'.html" class="print" target="_blank"></a>';else @me='';[/field:columnname]</h3>
                    <div class="col_cont">
                        [field:array function='getLineContent2(@me)'/]
                    </div>
                    
                  </div>
                  <!-- 循环读出数据结束 -->