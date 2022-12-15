@extends('layout')

@section('content')

@include('partials._search')

            <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <x-card class="py-4">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            {{ asset('images/no-image.png') }}
                            src="{{ asset('images/no-image.png') }}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$job_listing->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$job_listing->company}}</div>

                        <x-listing-tags :tagsCSV="$job_listing->tags"/>
                            
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> {{$job_listing->location}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Job Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$job_listing->description}}
                                </p>
                                

                                <div class="flex flex-col items-center justify-around space-y-6">
                                    <button class="px-3 py-2 bg-laravel text-white rounded-md w-1/3">
                                        <a
                                        href="mailto:{{$job_listing->email}}"
                                        class="py-4 hover:opacity-80"
                                        ><i class="fa-solid fa-envelope"></i>
                                        Contact Employer
                                        
                                    </a>
                                    </button>
    
                                    <button class="px-3 py-2 bg-black text-white rounded-md w-1/3 truncate">
                                        <a
                                        href="{{$job_listing->website}}"
                                        target="_blank"
                                        class="py-4  hover:opacity-80"
                                        ><i class="fa-solid fa-globe "></i> Visit Website </a
                                    >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
@endsection

