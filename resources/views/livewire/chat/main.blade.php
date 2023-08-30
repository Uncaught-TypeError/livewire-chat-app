<div class="font-SansFrans">
    {{-- In work, do what you enjoy. --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="chat_container">

        <div class="chatlist_container">
            @livewire('chat.chat_list')
        </div>

        <div class="chatbox_container">
            @livewire('chat.chatbox')

            @livewire('chat.send_message')
        </div>
    </div>
</div>
