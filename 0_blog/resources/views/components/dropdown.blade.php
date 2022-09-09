<div x-data="{show:false}" @click.away="show = false">
    <div @click="show = !show">
        {{$trigger}}
    </div>

    <div x-show="show" class="py-2 absolute mt-2 z-50 overflow-auto max-h-52" style="display: none; background: lightgray">
        {{$slot}}
    </div>
</div>
