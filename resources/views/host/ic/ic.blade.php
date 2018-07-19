@extends('host.common.default')
@section('content')
<!--消息中心样式-->
<div class="Inside_pages">
 <div class="Message_Center"> 
  <div class="title_name">消息中心</div>
  <div class="Message_content" id="Message_content">
    <div class="hd">
     <ul>
      <li>新的消息</li>
      <li>历史消息</li>
     </ul>
    </div>
    <div class="bd">
      <ul class="system_info">
        @for($i = 0; $i < $infoCount; $i++)
       <li><i>●</i><a href="javascript:ovid(0)" class="system_btn newinfo">{{ $infoDetail[$i]->title }}</a><div style="float:right">{{ $infoDetail[$i]->created_at }}</div></li>
       @endfor
      </ul>
      <ul class="system_info">
        @for($i = 0; $i < $infoCount_old; $i++)
       <li><i>●</i><a href="javascript:ovid(0)" class="system_btn oldinfo">{{ $infoDetail_old[$i]->title }}</a><div style="float:right">{{ $infoDetail_old[$i]->created_at }}</div></li>
        @endfor
      </ul>
    </div>
  </div>
  <script type="text/javascript">jQuery("#Message_content").slide({trigger:"click",delayTime:0});</script>
 </div>
</div>
<!--系统消息内容-->
@for($i = 0; $i < $infoCount; $i++)
<div class="xx_content" id="Messagecontent_new_{{ $i }}" style="display:none; padding:15px; line-height:24px;">
  {{ $infoDetail[$i]->content }}
</div>
@endfor
@for($i = 0; $i < $infoCount_old; $i++)
<div class="xx_content" id="Messagecontent_old_{{ $i }}" style="display:none; padding:15px; line-height:24px;">
  {{ $infoDetail_old[$i]->content }}
</div>
@endfor
<script type="text/javascript">
@for($i = 0; $i < $infoCount; $i++)
 $('.newinfo').eq({{ $i }}).on('click', function(){
    $.get("{{ url('ic/edit') }}/"+"{{ $infoDetail[$i]->id }}",     
                function(data) {
               });
    layer.open({
    type: 1,
    title:'系统消息',
    area: ['600px',''],
    shadeClose: true,
    btn:'确认',
    content: $('#Messagecontent_new_{{ $i }}')
    });
});
 @endfor
 @for($i = 0; $i < $infoCount_old; $i++)
 $('.oldinfo').eq({{ $i }}).on('click', function(){
    layer.open({
    type: 1,
    title:'系统消息',
    area: ['600px',''],
    shadeClose: true,
    btn:'确认',
    content: $('#Messagecontent_old_{{ $i }}')
    });
});
 @endfor
</script>


@endsection