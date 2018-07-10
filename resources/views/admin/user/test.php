@if($info->currentPage() == 1)

            @else
                <li><a href="{{url('info?page=1')}}">首页</a></li>
                <li><a href="{{$info->previousPageUrl()}}">上一页</a></li>
                <li><a href="{{$info->previousPageUrl()}}">{{$news->currentPage()-1}}</a></li>
            @endif

            <li><a class="active">{{$info->currentPage()}}</a></li>

            @if($info->currentPage() == $info->lastPage())

            @else
                <li><a href="{{$info->nextPageUrl()}}">{{$news->currentPage()+1}}</a></li>
                <li><a href="{{$info->nextPageUrl()}}">下一页</a></li>
                <li><a href="{{url('info?page=').$info->lastPage()}}">尾页</a></li>
            @endif



            @if ($info->LastPage()>1)  
         <a href="{{ $info->Url(1) }}" class="item{{ ($info->CurrentPage() == 1) ? ' disabled' : '' }}">  
             <i class="icon left arrow"></i>  
             首页  
         </a>  
         <a href="{{ $info->Url($info->last) }}" class="item{{ ($info->CurrentPage() == 1) ? ' disabled' : '' }}">  
             <i class="icon left arrow"></i>  
             上一页  
         </a>  
         <a href="{{ $info->Url($info->next) }}" class="item{{ ($info->CurrentPage() == 1) ? ' disabled' : '' }}">  
             <i class="icon left arrow"></i>  
             下一页  
         </a>  
         @for ($i = 1; $i <= $info->LastPage(); $i++)  
                 <a href="{{ $info->Url($i) }}" class="item{{ ($info->CurrentPage() == $i) ? ' active' : '' }}">  
             {{ $i }}  
                 </a>  
             @endfor   
         <a href="{{ $info->Url($info->LastPage()) }}" class="item{{ ($info->CurrentPage() == $info->LastPage()) ? ' disabled' : '' }}">  
             末页  
             <i class="icon right arrow"></i>  
         </a>  
     @endif 

     @if ($info->LastPage()>1)  
         <a href="{{ $info->Url(1) }}" class="item{{ ($info->CurrentPage() == 1) ? ' disabled' : '' }}">  
             <i class="icon left arrow"></i>  
             首页  
         </a>  
         <a href="{{ $info->Url($info->last) }}" class="item{{ ($info->CurrentPage() == 1) ? ' disabled' : '' }}">  
             <i class="icon left arrow"></i>  
             上一页  
         </a>  
         
         @for ($i = 1; $i <= $info->LastPage(); $i++)  
                 <a href="{{ $info->Url($i) }}" class="item{{ ($info->CurrentPage() == $i) ? ' active' : '' }}">  
             {{ $i }}  
                 </a>  
             @endfor  
          <a href="{{ $info->Url($info->next) }}" class="item{{ ($info->CurrentPage() == 1) ? ' disabled' : '' }}">  
             <i class="icon left arrow"></i>  
             下一页  
         </a>   
         <a href="{{ $info->Url($info->LastPage()) }}" class="item{{ ($info->CurrentPage() == $info->LastPage()) ? ' disabled' : '' }}">  
             末页  
             <i class="icon right arrow"></i>  
         </a>  
     @endif 