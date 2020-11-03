@include('index.top')
<!-- 新加的代码 -->
<style>
        .kms_modle{
            width: 100%;
            background-color: #ef8997;
            margin-top: -5px;
        }
        .kms_conten{
            width: 90%;
           height: 420px;
            background-color: #fff;
            margin:0 auto;
            overflow: hidden;
        }
        .kmsnav{
            display:flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
        }
        .kmsnav div{
          width: 20%;
          background-color: greenyellow;
          text-align: center;
          color:#fff;
          border-radius: 5px;
          padding:5px 0;
        }
        .kms_xt{
            width: 100%;
            height: 172px;
            background: url('/kcimg/kms_xt.png') no-repeat;
            background-size: 100% 172px;
            margin-top: 20px;
             margin-bottom: 20px;
        }
        .kmsbtn{
            height:57px;
            width:90%;
            margin:0 auto;
            background-color:#fb8f37;
            text-align: center;
            color: #fff;
            line-height: 57px;
            border-radius: 10px;
            font-size: 18px;
        }
</style>
<!-- 新加了 z-index:2;-->
      <div style="    width: 100%;
    height: 61px;
    position: fixed;
    background: #fff;
    top: 50px;display: flex;align-items: center;z-index:2;" >
	<dl style="display:flex;width: 100%;
    justify-content: space-around;">
      		<dt>
      			<dd style="flex:1;margin-left: 10px;">
      				<div class="courseyw" style="width:100px;  height:30px;line-height:30px;  text-align:center;">
      				<b style="font-size:16px;" id="yw" >趣味大语文</b>
      				</div>
      			</dd>
      			<dd style="flex:1">
      				<div class="coursesx" style="width:100px;  height:30px;line-height:30px;  text-align:center;">
      				<b style="font-size:16px;" id="sx">思维培优数学</b>
      				</div>
      			</dd>
      			<dd style="flex:1">
      				<div class="courseyy" style="width:100px;  height:30px;line-height:30px;  text-align:center;">
      				<b style="font-size:16px;" id="yy">戏剧英语</b>
      				</div>
      			</dd>
      		</dt>
      	</dl>
      </div>
      <div style="margin-top:13px;">
      	<p style="width:90%;border:1px solid  #bebebe;margin:0 auto;"></p>
      </div>
      <!-- 语文的 -->
 <div id="hsyw">
   <div style="margin-top:95px;">
      <img src="/kcimg/qwyw1.jpg" alt="" style="width: 100%;height: 100%;">
      <div class="kms_modle" style=" background-color: #33a75c;">
          <div class="kms_conten" style="height:340px">
             <nav class="kmsnav">
                 <div data-id="1" class="J_menuItem" style="background-color:#fb8f37;">三年级</div>
                 <div data-id="2"  class="J_menuItem" style="background-color:#f84653;">四年级</div>
                 <div data-id="3" class="J_menuItem" style="background-color:#4dce7a;">五年级</div>
                 <div data-id="4" class="J_menuItem" style="background-color:#37b4fb;">六年级</div>
             </nav>
            <div class="kms_xt">
                <video src="http://kms.hswdjy.com/web/video/yw3qiu9.mp4"
                style="width: 81%;
                height: 153px;
                margin-left: 20%;
                margin-top: 5%;" 
                 id="video1" preload="true"
                 webkit-playsinline="true" 
                 x5-video-player-type="h5" 
                 x5-video-orientation="portraint" 
                classname="{styles.video}" controls=""></video>
            </div>
            <div class="kmsbtn">
                点击获取KMS系统体验账号
            </div>
          </div>
         
      </div>
      <img src="/kcimg/qwyw2.jpg" alt="" style="width: 100%;height: 100%;margin-top: -10px;">
    </div>
 </div>
 <!-- 数学的 -->
 <div id="hssx">
    <div style="margin-top:95px;">
        <!-- <img src="/sxjs.jpg" alt="" width="100%"> -->
        <img src="/kcimg/sxjs_01.jpg" alt="" style="width: 100%;height: 100%;">
      <div class="kms_modle">
          
          <div class="kms_conten">
            <img src="/kcimg/kmsname.jpg" alt="" width="100%">
             <nav class="kmsnav">
                 <div data-id="5" class="J_menuItem" style="background-color:#fb8f37;">三年级</div>
                 <div data-id="6"  class="J_menuItem" style="background-color:#f84653;">四年级</div>
                 <div data-id="7" class="J_menuItem" style="background-color:#4dce7a;">五年级</div>
                 <div data-id="8" class="J_menuItem" style="background-color:#37b4fb;">六年级</div>
             </nav>
            <div class="kms_xt">
                <video src="http://kms.hswdjy.com/web/video/jmt.mp4"
                style="width: 81%;
                height: 153px;
                margin-left: 20%;
                margin-top: 5%;" 
                 id="video2" preload="true"
                 webkit-playsinline="true" 
                 x5-video-player-type="h5" 
                 x5-video-orientation="portraint" 
                classname="{styles.video}" controls=""></video>
            </div>
            
            <div class="kmsbtn">
                点击获取KMS系统体验账号
            </div>
            <img src="/kcimg/kmsqx.jpg" alt=""  width="100%" style="margin-top: 20px;">
          </div>
         
      </div>
      <img src="/kcimg/sxjs_02.jpg" alt="" style="width: 100%;height: 100%;margin-top: -10px;">
    </div>
    </div> 
    <!-- 数学结束--> 
  <div id="hsyy" >
       <div style="margin-top:95px;">
        <img src="/h5kcyy.jpg" alt="" width="100%">
    </div>
 </div>
@include('index.bottom') 

<script type="text/javascript">
    //修改视频
    const actions = new Map([
      [1, 
  ['http://kms.hswdjy.com/web/video/yw3qiu9.mp4', ]
  ],
  [2,
   ['http://kms.hswdjy.com/web/video/yw4qiu1.mp4',]
  ],
  [3,
   ['http://kms.hswdjy.com/web/video/yw5qiu7.mp4',]
  ],

  [4, 
    ['http://kms.hswdjy.com/web/video/yw6chun14.mp4',]
  ],
    [5, 
  ['http://kms.hswdjy.com/web/video/jmt.mp4',
  ]
  ],
  [6,
   ['http://kms.hswdjy.com/web/video/gtsp.mp4',
   ]
  ],
  [7,
   ['http://kms.hswdjy.com/web/video/zdynk.mp4',
  ]
  ],

  [8, 
    ['http://kms.hswdjy.com/web/video/lsxc.mp4',
   ]
  ],



])
function buton(status){
    let action = actions.get(status) 
    if(status<5){
      $('#video1').prop('src',action[0])
    }else{
      $('#video2').prop('src',action[0])
    }
    
  
 
}
$('.J_menuItem').click(function(){
     var i=$(this).data('id')
     buton(i)
   
})




  function GetQueryString(name)
  {
         var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
              var r = window.location.search.substr(1).match(reg);
         if(r!=null)return  unescape(r[2]); return null;
  }
  var myurl=GetQueryString("kc");
  if(myurl !=null && myurl.toString().length>1)
  {
      if(myurl=='yw'){
        $(".courseyw").addClass("course");
        $("#yw").addClass("courseb");
        $(".coursesx").removeClass("course");
        $("#sx").removeClass("courseb");
        $(".courseyy").removeClass("course");
        $("#yy").removeClass("courseb");
        $("#hsyw").show();
        $("#hssx").hide();
        $("#hsyy").hide();
      }else if(myurl=='sx'){
          $(".coursesx").addClass("course");
        $("#sx").addClass("courseb");
        $(".courseyw").removeClass("course");
        $("#yw").removeClass("courseb");
        $(".courseyy").removeClass("course");
        $("#yy").removeClass("courseb");
        $("#hssx").show();
        $("#hsyw").hide();
        $("#hsyy").hide();
      }else if(myurl=='yy'){
        $(".courseyy").addClass("course");
        $("#yy").addClass("courseb");
        $(".coursesx").removeClass("course");
        $("#sx").removeClass("courseb");
        $(".courseyw").removeClass("course");
        $("#yw").removeClass("courseb");
        $("#hsyy").show();
        $("#hsyw").hide();
        $("#hssx").hide();
      }
  }else{
     $(".courseyw").addClass("course");
        $("#yw").addClass("courseb");
        $(".coursesx").removeClass("course");
        $("#sx").removeClass("courseb");
        $(".courseyy").removeClass("course");
        $("#yy").removeClass("courseb");
        $("#hsyw").show();
        $("#hssx").hide();
        $("#hsyy").hide();
  }
	  $(function(){
	  	$("#yw").click(function(){
	  		$(".courseyw").addClass("course");
	  		$("#yw").addClass("courseb");
	  		$(".coursesx").removeClass("course");
	  		$("#sx").removeClass("courseb");
	  		$(".courseyy").removeClass("course");
	  		$("#yy").removeClass("courseb");
        $("#hsyw").show();
        $("#hssx").hide();
        $("#hsyy").hide();
	  	 })
	  	$("#sx").click(function(){
	  		$(".coursesx").addClass("course");
	  		$("#sx").addClass("courseb");
	  		$(".courseyw").removeClass("course");
	  		$("#yw").removeClass("courseb");
	  		$(".courseyy").removeClass("course");
	  		$("#yy").removeClass("courseb");
        $("#hssx").show();
        $("#hsyw").hide();
        $("#hsyy").hide();
	  	 })
	  	$("#yy").click(function(){
	  		$(".courseyy").addClass("course");
	  		$("#yy").addClass("courseb");
	  		$(".coursesx").removeClass("course");
	  		$("#sx").removeClass("courseb");
	  		$(".courseyw").removeClass("course");
	  		$("#yw").removeClass("courseb");
        $("#hsyy").show();
        $("#hsyw").hide();
        $("#hssx").hide();
		})
		$(".kmsbtn").click(function(){
			            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
				             });
	 })
</script>
<script>
var _hmt = _hmt || [];
(function() {
	  var hm = document.createElement("script");
	    hm.src = "https://hm.baidu.com/hm.js?c6e8c910c4d504c61cb7fc2627097203";
	    var s = document.getElementsByTagName("script")[0]; 
	      s.parentNode.insertBefore(hm, s);
})();
</script>
