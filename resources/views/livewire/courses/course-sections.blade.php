<div class="px-4 row" wire:poll>
    {{-- Course Sections --}}
    <div class="col-md-3" style="max-height: 100vh ; overflow-y: auto ">


        <div class="card">
            <div class="card-body">
                <h2>
                    الدروس
                </h2>
                <span>
                    المكتملة :
                    <div class="">
                        {{ $course->studentSections->sum('is_watched') }} / {{ $course->sections->count() }}


                        {{-- the average --}}
                        <span class="float-left">
                            {{ $percentage }}%
                        </span>

                    </div>
                </span>


                <ul class="pt-2 list-group list-group-flush">
                    @foreach ($sections as $section)
                        <li @class(['list-group']) class="">
                            <a @class([
                                'list-group-item list-group-item-action c_lecture',
                                'c_active_lecture' => $selectedSection->id == $section->id,
                            ]) wire:click="changeSection({{ $section->id }})">


                                <div class="form-check d-flex align-items-center flex-md-column flex-xl-row">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" @checked($course->studentSections->firstWhere('section_id', $section->id)?->is_watched == 1)
                                            wire:click="toggleWatched('{{ encrypt($section->id) }}')" type="checkbox">
                                        <div class="c_section_thumbnail">
                                            <img src="{{ asset($section->section_image) }}"
                                                alt="{{ $section->title_ar }}" loading="lazy">

                                        </div>

                                    </div>
                                    <span class="mr-3">
                                        {{ $section->title_ar }}
                                    </span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    {{-- Section details and video --}}
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                @if ($selectedSection->video)
                    <video id="cSectionVideo" src="{{ $selectedSection->video }}" controls="controls" preload="auto"
                        autoplay="autoplay" width="100%" height="100%" controlsList="nodownload"
                        style="object-fit: cover;" alt></video>
                @endif
                <hr>
                <h2>
                    <u>
                        {{ $selectedSection->title_ar }}
                    </u>
                </h2>
                <p>
                    {!! $selectedSection->text_ar !!}
                </p>

            </div>
        </div>


    </div>
</div>
