<div class="p-4">
    <form action="">
        <textarea class="w-full" name="new_post" rows="3" wire:model="content"></textarea>
        <div class="flex justify-end">
            <button type="button"
                    class="post mt-2 py-2 px-4 bg-green-{{empty($content) ? '200' : '500'}} text-white rounded-lg"
                    wire:click="submit"
                    {{empty($content) ? 'disabled' : ''}}
            >
                <span> Post </span>
            </button>
        </div>
    </form>
</div>
