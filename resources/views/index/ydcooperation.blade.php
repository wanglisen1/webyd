@include('index.top')
	</header>
	 <div class="wlsimg" style="margin-top:52px;">
          <img src="/ydimg/ydhz1.jpg" alt=""   class="img-responsive"/>
      </div>
      <div class="wlstitle" style="margin-top:20px;">
	 <p><b style="font-size:23px;">加入朝阳行业</b></p>
	 <p><b style="font-size:23px;">前所未有的</b><b style="font-size:23px;color:#c16387;">服务保障</b></p>
      </div>
      <div  style="width:93.7%;margin:0 auto; margin-top:15px;">
          <p style="font-size:15px;text-align: justify;text-indent: 2em;">翰师问鼎致力于商业模式的不断创新,致力于教育服务体系全面推广,结合十五年加盟落地经验,有效升级,并创新出多种模式,保障加盟商享受到一切总部成功的资源,总部完美复制以保证加盟商的利润,有效的整合市场资源,迅速占领区域市场份额,&nbsp;总部&盟校着力扩大校区影响力,真正做到共享共赢!</p>
          
        </div>
        <div style="background-color:#f8f8f8;padding-bottom:30px;">
  <div class="wlswrap">
      <div class="wlstitle" style="padding-top:25px;">
       <b style="font-size:22px;">只要您符合以下条件</b></br>
       <b style="font-size:22px;">立刻</b><b style="font-size:22px;color:#2cabba;">加入我们</b>
      </div>
      <div class="wlsimg" >
          <img src="/ydimg/ydhz2.jpg" alt=""   class="img-responsive"/>
      </div>
  </div>
</div>
<div class="wlscontent" style="margin-top:20px;">
      <button class="anniu" id="hzan1">
         了解合作细节
      </button>
  </div>
<div style="border-bottom:1px solid #ccc;width:90%;margin:0 auto;padding-bottom:15px;margin-top:30px;">
                        <dl style="display:flex;">
                        <dt style="flex:1;">
                                <img src="/ydimg/ydgy4.jpg" alt="" width="65%;"/>
                                <dd style="flex:3;">
                                <p style="font-size:24px;color:#111;">咨询加盟</p>
                                <p style="font-size:15px;color:#111;">全国统一咨询加盟热线:010-60157069</p>
                                </dd>
                        </dt>
                        </dl>
                </div>
                <div style="border-bottom:1px solid #ccc;width:90%;margin:0 auto;padding-bottom:15px;margin-top:15px;">
                        <dl style="display:flex;">
                        <dt style="flex:1;">
                                <img src="/ydimg/ydgy5.jpg" alt="" width="65%;"/>
                                <dd style="flex:3;">
                                <p style="font-size:24px;color:#111;">合作加入</p>
                                <p style="font-size:15px;color:#111;">HR邮箱:rqm456456@163.com</p>
                                </dd>
                        </dt>
                        </dl>
                </div>
                <div style="border-bottom:1px solid #ccc;width:90%;margin:0 auto;padding-bottom:15px;margin-top:15px;">
                        <dl style="display:flex;">
                        <dt style="flex:1;">
                                <img src="/ydimg/ydgy6.jpg" alt="" width="65%;"/>
                                <dd style="flex:3;">
                                <p style="font-size:24px;color:#111;">北京总部</p>
                                <p style="font-size:12px;color:#111;">北京市大兴区CDD创意港嘉悦广场8号楼10层</p>
                                </dd>
                        </dt>
	</dl>
              </div>
  <div style="background-color:#f8f8f8;width:100%;height:10px;margin-top:20px;">
  	
  </div>
  <div class="wlscontent" style="margin-top:20px;">
  		<p style="font-size:22px;color:#111;font-weight:600;">在线合作申请表</p>
  </div>

  <div style="margin-left:10%;margin-top:20px;">
     <b style="font-size:20px;" >姓&nbsp;名：</b></br>
     <input type="text" name="" id="uname" class="wlsinput">
  </div>
  <div style="margin-left:10%;margin-top:20px;">
  	<b style="font-size:20px;" >性&nbsp;别：</b></br>
  	<input name="sex" type="radio"  value="男" id="sex" checked="checked" />&nbsp;<font style="font-size:18px;">男</font>       
	&nbsp;&nbsp;<input name="sex" type="radio" value="女" id="sex"/>&nbsp;<font style="font-size:18px;">女</font>
  </div>
  <div style="margin-left:10%;margin-top:10px;">
     <b style="font-size:20px;" >电&nbsp;话：</b></br>
     <input type="number" name="" id="tel" class="wlsinput">
  </div>
  <div style="margin-left:10%;margin-top:10px;">
     <b style="font-size:20px;" >邮&nbsp;箱：</b></br>
     <input type="email" name="" id="email" class="wlsinput">
  </div>
  <div style="margin-left:10%;margin-top:10px;">
     <b style="font-size:20px;" >期望加盟时间：</b></br>
     <input type="text" name="" id="time" class="wlsinput">
  </div>
  <div style="margin-left:10%;margin-top:10px;">
     <b style="font-size:20px;" >留&nbsp;言：</b></br>
    <textarea class="wlsinputtext" id="ly"> 
    </textarea>
  </div>
  <div class="wlscontent">
      <button class="anniu" id="btn">
         提&nbsp;&nbsp;交
      </button>
  </div>
@include('index.bottom') 
<script type="text/javascript">
    $(function(){
     $("#btn").click(function(){
            var uname =$("#uname").val();
            var sex =$("input[name='sex']:checked").val();
            var tel =$("#tel").val();
            var email=$("#email").val();
            var time =$("#time").val();
            var ly =$("#ly").val();
             var reg = /(1[3-9]\d{9}$)/;
              // alert(time);
              // return false;
            if(uname==''){
                alert('请填写您的姓名');
                return false;
            }
              if (!reg.test(tel))
              {
                   alert("请输入正确格式的手机号码！");
                       return false;
                    }
            if(tel==''){
                alert('请填写您的电话号码');
                return false;
            }

            $.ajax({
                url: "/usermessages",
                data:{uname:uname,sex:sex,tel:tel,email:email,time:time,ly:ly},
                dateType:'json',
                type: 'post',
                success:function(msg){
                    alert(msg.msg);
                }
            });
        })
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
<script>
	$("#hzan1").click(function(){
		   window.location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
	})
</script>
