@if($feed_items->count() > 0)
    @foreach($feed_items as $status)
      @include('statuses._status', ['user'=> $status->user])
    @endforeach
@else
<p>没有数据</p>
@endif
