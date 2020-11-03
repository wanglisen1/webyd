@include('index.top')
</header>
<style>
        img{ width:100%;}
        p{
		text-align: justify !important;
        }
</style>
<div style="width:100%;margin:0 auto;margin-top:30px;" align="center">
		<b style="font-size:18px;">{{$content['news_title']}}</b>
</div>
<div style="width:100%;margin:0 auto;margin-top:10px;" align="center">
	<p style="font-size:16px;">{{$content['add_time']}}</p>
</div>
 <div class="news_abstract" style="width:95%;margin-top:15px;margin:0 auto;" >
          {{$content['news_content']}}

        </div>
        <div style="width:100%;height:8px;background-color:#efefef;">
        	
        </div>
         <div style="width:100%;margin-top:10px;padding-bottom:10px;" >
                @if(empty($shang))
                        <div>
                <a href="/ydnewsxq?id={{$next['news_id']}}"><input type="submit" id="next" value="上一篇"></a>
                <font style="font-size:15px;">{{$next['news_title']}}</font>
                </div>
                @elseif(empty($xia))
                <div>
                <a href="/ydnewsxq?id={{$prev['news_id']}}"><input type="submit" id="prev" value="下一篇"></a>
                <font style="font-size:15px;">{{$prev['news_title']}}</font>
                </div>
                @else
                <div style="">
                <a href="/ydnewsxq?id={{$next['news_id']}}"><input type="submit" id="next" value="上一篇"></a>
                <font style="font-size:15px;">{{mb_substr($next['news_title'],0,13)}}...</font>
                </div>
                <div style="margin-top:10px;">
                <a href="/ydnewsxq?id={{$prev['news_id']}}"><input type="submit" id="prev" value="下一篇"></a>
                <font style="font-size:15px;">{{mb_substr($prev['news_title'],0,13)}}...</font>
                </div>
                
                @endif
        </div>
        <div style="width:100%;height:8px;background-color:#efefef;">
        	
        </div>
 @include('index.bottom') 
 <script type="text/javascript">
 	$(function(){
	var a = $(".news_abstract").text(); //news_abstract为p标签的class值
	$(".news_abstract").html(a);
});
 </script>
