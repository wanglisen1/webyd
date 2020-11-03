@include('index.top')
</header>
<div class="wlsimg" style="margin-top:52px;">
          <img src="/ydimg/ydzx1.jpg" alt=""   class="img-responsive"/>
      </div>
      <div class="moreload">
      <div class="hidden">
      @foreach($data as $k=>$v)
      <li><div style="border-bottom:1px solid #ccc;width:90%;margin:0 auto;padding-bottom:15px;margin-top:15px;" class="news">
      			<dl style="display:flex;">
      				<dt style=" flex:3">
      					<p style="font-size:16px;color:#111;"><a href="/ydnewsxq?id={{$v['news_id']}}" style="color:#111;">{{mb_substr($v['news_title'],0,13)}}...</a></p>
      					<p style="width:40%;border:1px  solid  #3aacc6;margin-top:5px;"></p>
      					<p style="margin-top:5px;">{{$v['add_time']}}</p>
      					<dd style="flex:1;">
      						<img src="{{$v['image']}}"  class="img-responsive">
      					</dd>
      				</dt>
      			</dl>
      		</div></li>
      		@endforeach
            </div>
            <ul class="list">暂无最新消息</ul>
      <div class="wlscontent">
      <button class="more anniu" id="jz">
         <a href="javascript:;" onClick="moreload.loadMore();" style="color:#fff;text-decoration:none;">
         加载更多资讯	
         </a>
      </button>
  </div>
</div>
 @include('index.bottom') 
 <script>
      var _content = []; //临时存储li循环内容
      var moreload = {
         _default:8, //默认显示图片个数
         _loading:5,  //每次点击按钮后加载的个数
         init:function(){
            var lis = $(".moreload .hidden li");
            $(".moreload ul.list").html("");
            for(var n=0;n<moreload._default;n++){
               lis.eq(n).appendTo(".moreload ul.list");
            }
            $(".moreload ul.list div").each(function(){
               $(this).attr('src',$(this).attr('realSrc'));
            })
            for(var i=moreload._default;i<lis.length;i++){
               _content.push(lis.eq(i));
            }
            $(".moreload .hidden").html("");
         },
         loadMore:function(){
            var mLis = $(".moreload ul.list div").length;
            for(var i =0;i<moreload._loading;i++){
               var target = _content.shift();
               if(!target){
                  $('.moreload .more').html("<p>全部加载完毕...</p>");
                  break;
               }
               $(".moreload ul.list").append(target);
               $(".moreload ul.list div").eq(mLis+i).each(function(){
                  $(this).attr('src',$(this).attr('realSrc'));
               });
            }
         }
      }
      moreload.init();
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
