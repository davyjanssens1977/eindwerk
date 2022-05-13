@props(['listing'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex" data-aos="flip-down">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ $listing->foto ? asset('storage/' . $listing->foto) : asset('../images/no-image.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
               {{ $listing->titel }}
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->naam }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
               {{ $listing->bericht }}
            </div>
        </div>

       
    </div>
    @auth
     <div>
            <a href="/home/listings/{{ $listing->id }}/edit">
            <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/home/listings/{{ $listing->id }}">
            @csrf
            @method('DELETE')
            <button class="text-[#F79012]"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
    </div>
    @endauth
</div>
