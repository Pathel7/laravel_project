@props(['class'])

<div class="{{$class}}">
    <div>
        {{$title}}
        <div class="bg-green-700 text-slate-50 p-4">
            {{$slot}}
        </div>
    </div>
</div>