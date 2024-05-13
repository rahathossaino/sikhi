@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col-md-5 ps-4">
                    <h1 class="display-6 mb-3"><i class="bi bi-journal-text"></i> Create Syllabus</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Syllabus</li>
                        </ol>
                    </nav>
                    @include('session-messages')
                    <div class="p-3 border bg-light shadow-sm">
                        <form action="{{route('syllabus.store')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                            <div class="mb-3">
                                <p>Add Syllabus to class:</p>
                                <select  class="form-select" name="class_id" required id="inputAssignToClass">
                                    @isset($school_classes)
                                        <option selected disabled>Please select a class</option>
                                        @foreach ($school_classes as $school_class)
                                        <option value="{{$school_class->id}}">{{$school_class->class_name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="mb-3">
                                <p class="mb-2">Select course:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                                <select class="form-select" id="course-select" name="course_id">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="syllabus-name" class="form-label">Syllabus Name</label>
                                <input type="text" class="form-control" id="syllabus-name" name="syllabus_name" placeholder="Syllabus Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="syllabus-file" class="form-label">Syllabus File</label>
                                <input type="file" name="file" class="form-control" id="syllabus-file" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" required>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-outline-primary"><i class="bi bi-check2"></i> Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#inputAssignToClass').change(function(){
            var classId = $(this).val(); 
            var url = '{{ route("get.sections.courses.by.classId", "classId") }}'; 
            url = url.replace('classId', classId);
            $.ajax({
                url:url ,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    if(response.courses){
                        var sectionsDropdown = $('#course-select');
                        sectionsDropdown.empty(); 
                        sectionsDropdown.append($('<option>').text('Please select a course').attr('value', 0))
                        response.courses.forEach(function(section) {
                            sectionsDropdown.append($('<option>').text(section.course_name).attr('value', section.id));
                        });
                    }
                }
            })            
        })
    });
</script>
@endsection