@extends('admin.layouts.app')

@section('admin_css')
    {{-- <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}"
        rel="stylesheet"> --}}
    {{-- <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}"> --}}
    {{-- <link href="{{ asset('dashboard_files/assets/css/sleek.css') }}"> --}}
@endsection

@push('styles')
    <style>
        .modal-body input[type="radio"] {
            width: 20px;
            height: 20px;
        }

        .modal-body input[type="radio"]:hover {
            cursor: pointer;
        }

        .modal-body .row {
            align-items: center !important;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content">
            {{-- =========================================================== --}}
            {{-- ================== Sweet Alert Section ==================== --}}
            {{-- =========================================================== --}}
            <div>
                @if (session()->has('success'))
                    <script>
                        swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                            button: "OK",
                        });
                    </script>
                @endif
                @if (session()->has('danger'))
                    <script>
                        swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
                            button: "Close",
                        });
                    </script>
                @endif

                @if ($errors->any())
                    <script>
                        // Function to format errors as an unordered list
                        function formatErrors(errors) {
                            let html = '<ul >';
                            errors.forEach(error => {
                                html += '<li>' + error + '</li>';
                            });
                            html += '</ul>';
                            return html;
                        }

                        // Extract errors and format them
                        let errors = {!! json_encode($errors->all()) !!};
                        let errorHtml = formatErrors(errors);


                        // Show SweetAlert with formatted errors
                        swal({
                            title: "Validation Error",
                            content: {
                                element: "div",
                                attributes: {
                                    innerHTML: errorHtml
                                }
                            },
                            icon: "error",
                            button: "Close",
                        });
                    </script>
                @endif
            </div>

            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1> Courses </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.cources-index') }}">Courses</a>
                            </li>

                            <li class="breadcrumb-item" aria-current="page">
                                {{ isset($course->title_ar) ? $course->title_ar : 'Undefined' }}
                                Questions
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addQAModal">
                        <i class="mdi mdi-playlist-plus"></i> Add New question
                    </a>
                </div>
            </div>

            {{-- Add new QA Modal --}}

            <!-- Modal -->
            <div class="modal fade" id="addQAModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add new question and answers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('super_admin.tasks-store', encrypt($course->id)) }}" method="POST">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <textarea name="question" id="question" rows="2" class="form-control" placeholder="Enter question" required>{{ old('question') }}</textarea>
                                </div>

                                <hr>
                                {{-- answers --}}
                                <div class="form-group ">
                                    <label for="answer1">Answer 1</label>
                                    <div class="px-4 row align-items-center">
                                        <textarea name="answers[]" id="answer1" rows="2" class="form-control col-11" placeholder="Enter answer 1"
                                            required>{{ old('answer1') }}</textarea>
                                        <input type="radio" class="form-control col-1" id="correct1" checked
                                            value="0" name="correct_answer" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="answer2">Answer 2</label>
                                    <div class="px-4 row align-items-center">
                                        <textarea name="answers[]" id="answer2" rows="2" class="form-control col-11" placeholder="Enter answer 2"
                                            required>{{ old('answer2') }}</textarea>
                                        <input type="radio" class="form-control col-1" id="correct1" value="1"
                                            name="correct_answer" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="answer3">Answer 3</label>
                                    <div class="px-4 row align-items-center">
                                        <textarea name="answers[]" id="answer3" rows="2" class="form-control col-11" placeholder="Enter answer 3"
                                            required>{{ old('answer3') }}</textarea>
                                        <input type="radio" class="form-control col-1" id="correct1" value="2"
                                            name="correct_answer" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="answer4">Answer 4</label>
                                    <div class="px-4 row align-items-center">
                                        <textarea name="answers[]" id="answer4" rows="2" class="form-control col-11" placeholder="Enter answer 4"
                                            required>{{ old('answer4') }}</textarea>
                                        <input type="radio" class="form-control col-1" id="correct1" value="3"
                                            name="correct_answer" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- ============================================== --}}
        {{-- =================== Body ===================== --}}
        {{-- ============================================== --}}
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2> List Courses : </h2>
            </div>
            <div class="card-body">
                <table id="hoverable-data-table" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center"><i class="far fa-question-circle"></i>Question </th>
                            <th style="text-align: center">Answers</th>
                            <th style="text-align: center"><i class="mdi mdi-clock-outline mdi-spin"></i> Created At
                            </th>
                            <th style="text-align: center"><i class="mdi mdi-settings mdi-spin"></i> Control </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($course->tasks as $task)
                            @php
                                $answers = $task->answers;
                            @endphp
                            <tr>
                                <td style="text-align: center">
                                    {{ isset($task->question) ? $task->question : 'Undefined' }}
                                </td>

                                <td>
                                    <ul style="list-style:armenian !important">
                                        @foreach ($answers as $answer)
                                            <li>
                                                {{ $answer->answer }}
                                                @if ($answer->status == 1)
                                                    <span class="text-success">[Correct Answer]</span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>


                                <td style="text-align: center">
                                    {{ isset($task->created_at) ? date('Y-m-d', strtotime($task->created_at)) : "<span style='color:red;'>Undefined</span>" }}
                                </td>



                                <td style="text-align: center">
                                    <a href="#" class="mb-1 btn btn-sm btn-success" data-toggle="modal"
                                        data-target="#editQAModal-{{ $task->id }}"><i
                                            class="mdi mdi-playlist-edit"></i></a>
                                    <a href="{{ route('super_admin.tasks-delete', encrypt($task->id)) }}"
                                        class="mb-1 confirm btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a>
                                    {{-- 
                                    <a href="{{ route('super_admin.cources-show', $cource->id) }}"
                                        class="mb-1 btn btn-sm btn-primary"><i class="mdi mdi-eye"></i></a>



                                    <a href="
                                                "
                                        class="mb-1 btn btn-sm btn-info" title="Show Sections" data-toggle="modal">
                                        <i class="fa fa-question" aria-hidden="true"></i>

                                    </a> --}}
                                </td>
                            </tr>

                            {{-- Edit QA Modal --}}
                            <!-- Modal -->
                            <div class="modal fade " id="editQAModal-{{ $task->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit question and answers
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('super_admin.tasks-update', encrypt($task->id)) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body ">
                                                <div class="form-group ">
                                                    <label for="question">Question</label>
                                                    <textarea name="question" id="question" rows="2" class="form-control" placeholder="Enter question" required>{{ $task->question }}</textarea>
                                                </div>

                                                <hr>
                                                {{-- answers --}}
                                                @foreach ($answers as $key => $answer)
                                                    <div class="form-group">
                                                        <label for="answer{{ $answer->id }}">Answer
                                                            {{ $answer->id }}</label>
                                                        <div class="px-4 row align-items-center">
                                                            <textarea name="answers[{{ $answer->id }}]" id="answer{{ $answer->id }}" rows="2"
                                                                class="form-control col-11" placeholder="Enter answer {{ $answer->id }}" required>{{ $answer->answer }}</textarea>
                                                            <input type="radio" class="form-control col-1"
                                                                id="correct{{ $answer->id }}"
                                                                value="{{ $answer->id }}" name="correct_answer"
                                                                @checked($answer->status == 1) />
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <tr>
                                <td colspan="5" style="text-align: center">
                                    <span style="color: red;">No Data Found</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    @section('admin_javascript')
        <script>
            jQuery(document).ready(function() {
                jQuery('#hoverable-data-table').DataTable({
                    "aLengthMenu": [
                        [20, 30, 50, 75, -1],
                        [20, 30, 50, 75, "All"]
                    ],
                    "pageLength": 20,
                    "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                    "order": [
                        [0, "desc"]
                    ]
                });
            });
        </script>
        <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
    @endsection
