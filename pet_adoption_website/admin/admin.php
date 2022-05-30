
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backstage</title>
    <link rel="stylesheet" href="../../node_modules/layui/dist/css/layui.css">
</head>
    
</head>
<body class="layui-layout-body">
	<!--判断是否已经登录，如果没有，跳转到登录页-->
      <?php
  ?>
  <!--正式页面开始-->
        <div class="layui-layout layui-layout-admin">
          <!--1.头部区域-->
          <div class="layui-header">
            <div class="layui-logo">行政服务小程序</div>
            <!-- 头部区域（可配合layui已有的水平导航） -->
            <ul class="layui-nav layui-layout-left">
            	<li class="layui-nav-item showtab layui-this" data-id="setting"  mytitle="小程序设置"><a>小程序设置</a></li>
            	<li class="layui-nav-item showtab" data-id="staffs"  mytitle="员工管理"><a>员工管理</a></li>
            	<li class="layui-nav-item showtab" data-id="canteen"  mytitle="餐饮管理"><a>餐饮管理</a></li>
            </ul>
            <ul class="layui-nav layui-layout-right">
           
              <li class="layui-nav-item"><a href="">退出登录</a></li>
            </ul>
          </div>
            <!--2.左侧导航-->
          <div class="layui-side layui-bg-black"  style="width:210px;">
            <div class="layui-side-scroll">
              <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
              <ul class="layui-nav layui-nav-tree"  lay-filter="test">
              	<li class="layui-nav-item layui-nav-itemed" id="setting" name="tabs">
                  <a href="javascript:;">小程序设置</a>
                  <dl class="layui-nav-child">
                	<dd class="leftdaohang "  data-url="usercenter.php"  mytitle="个人中心"><a>个人中心</a></dd>
                	<dd class="leftdaohang"  data-url="canteen.php"  mytitle="餐饮服务"><a>餐饮服务</a></dd>
                  </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed" id="staffs" name="tabs" style="display:none;">
                  <a href="javascript:;">员工管理</a>
                  <dl class="layui-nav-child">
                	<dd class="leftdaohang" data-url="userlist.php" mytitle="已登记员工清单"><a>已登记员工清单</a></dd>
                    <dd class="leftdaohang" data-url="upstaffinfo.php" mytitle="上传更新员工信息"><a>上传更新员工信息</a></dd>
                  </dl>
                </li>
                <li class="layui-nav-item  layui-nav-itemed" id="canteen" name="tabs" style="display:none;">
                  <a href="javascript:;">餐饮管理</a>
                  <dl class="layui-nav-child">
                    <dd class="leftdaohang" data-url="foodmenus.php" mytitle="菜单明细"><a>菜单明细</a></dd>
                    <dd class="leftdaohang" data-url="upfoodmenu.php" mytitle="上传食堂菜单"><a>上传食堂菜单</a></dd>
                  </dl>
                </li>
               </ul>
            </div>
          </div>
          <!--3.右侧主体内容区-->
          <div class="layui-body" style="margin-bottom:-50px;" >
              <!--tabs标签-->
              <div class="layui-tab layui-tab-card" lay-filter="demo" lay-allowclose="true">
              <ul class="layui-tab-title">
           <!-- <li class="layui-this" lay-id=""><i class="layui-icon">&#xe68e;</i> <cite>后台首页</cite></li>-->
              </ul>
              <div class="layui-tab-content">
              <!-- <div class="layui-tab-item layui-show">
						<iframe style='width: 100%;margin-top:0px;border:none;' height='550' src='setting/usercenter.php' ></iframe>
					</div>-->
              </div>
            </div> 
          </div>
          

        </div>
        <script src="../../node_modules/layui/layui.all.js"></script>
        <script>
            //添加事件执行
            layui.use('element', function(){
              var $ = layui.jquery
              ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
              //触发事件
              var active = {
                tabAdd: function(){
                  //新增一个Tab项
                  var htmlurl=$(this).attr('data-url');
                  var mytitle=$(this).attr('mytitle'); 
//                  alert("触发tab增加事件："+mytitle);
                  //先判断是否已经有了tab
                  var arrayObj = new Array();　//创建一个数组  
                      $(".layui-tab-title").find('li').each(function() {
                          var y = $(this).attr("lay-id"); 
                          arrayObj.push(y);
                   });
//                    alert("遍历取到的数组："+arrayObj);
                    var have=$.inArray(mytitle, arrayObj);  //返回 3,
                    if (have>=0) {
                        //tab已有标签
//                        alert("遍历的已有标签："+mytitle);
                      element.tabChange('demo', mytitle); //切换到当前点击的页面
                    } else{
                    	var h = $(window).height()-150;
                      //没有相同tab
//                      alert("遍历的没有相同tab："+mytitle);
                      element.tabAdd('demo', {
                        title:mytitle //用于演
                        ,content: '<iframe style="width: 100%;height:'+h+'px;margin-top:0px;border:none;" scrolling="auto" src='+htmlurl+' ></iframe>'
                        ,id: mytitle //实际使用一般是规定好的id，这里以时间戳模拟下
                      })
                      element.tabChange('demo', mytitle); //切换到当前点击的页面
                    }
                }
               
              };
             //这里是实现点击竖式选项卡，执行添加
              $(".leftdaohang").click(function(){
                var type="tabAdd";
                var othis = $(this);
//                var htmlurl=$(this).attr('data-url');
//                var mytitle=$(this).attr('mytitle');
                active[type] ? active[type].call(this, othis) : '';
              });
             //这里是实现点击顶部选项卡之后，显示或隐藏对应的竖式选项卡
             $('.showtab').click(function(){
             	var dataid=$(this).attr('data-id');
                var dataids=document.getElementById(dataid);
            	var tabs=document.getElementsByName('tabs');
		        $(tabs).hide();
		        $(dataids).show();
    		})
            });
        </script>
    </body>
</html>