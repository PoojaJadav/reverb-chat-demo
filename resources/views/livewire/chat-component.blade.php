<div>
    <div>
        <x-input wire:model="message" name="message"/>
        <button wire:click="triggerEvent">Click Me</button>
    </div>
    <div>
        @foreach($chats as $chat)
            <span>{{ $chat }}</span>
        @endforeach
    </div>
</div>
