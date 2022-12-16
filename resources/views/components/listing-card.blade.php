@props(['job_listing'])


<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/no-image.png"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/job-listings/{{$job_listing->id}}">{{$job_listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$job_listing->company}}</div>

            <x-listing-tags :tagsCSV="$job_listing->tags"/>
                
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$job_listing->location}}
            </div>
        </div>
    </div>
</x-card>