<div class="border border-red-500 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea 
        name="body" 
        class="w-full"
        placeholder="O que que há velhinho?"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">

            <img 
            src="{{auth()->user()->avatar}}" 
            alt="" 
            class="rounded-full">

            <button 
            type="submit" 
            class="bg-red-500 rounded-lg shadow py-2 px-2 text-white">
                Tuitar!
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-900 font-bold text-sm mt-1">{{$message}}</p>
    @enderror
</div>