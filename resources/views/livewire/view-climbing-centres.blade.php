<div>
    <div>
        @foreach ($climbingcentres as $climbingcentre)
            {{$climbingcentre->name}}
            {{$climbingcentre->location}}
            {{$climbingcentre->indoors}}
            <br>
        @endforeach
    </div>
 
    {{ $climbingcentres->links() }}
</div>
