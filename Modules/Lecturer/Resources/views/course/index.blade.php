@extends('lecturer::layouts.master')

@section('page-content')
<div class="col-md-1"></div> 
<div class="col-md-10">
	<div class="card">
		<div class="card-body table-responsive">
			@if(count(lecturer()->lecturerCourses->where('is_active',1))>0)
			<table class="table table-default">
				<thead>
					<tr>
						<td>S/N</td>
						<td>Course Title</td>
						<td>Course Code</td>
						<td>Course Unit</td>
						<td>Semester</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					@foreach(lecturer()->lecturerCourses->where('is_active',1) as $lecturer_course)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$lecturer_course->course->title}}</td>
						<td>{{$lecturer_course->course->code}}</td>
						<td>{{$lecturer_course->course->unit}}</td>
						<td>{{$lecturer_course->course->semester->name}}</td>
						<td>
							<form action="{{route('lecturer.result.templete.download')}}" method="post">
								@csrf
								<input type="hidden" name="course_id" value="{{$lecturer_course->course->id}}">
								<button class="btn btn-info" style="color: white"><i class="fa fa-download"></i>Download Result Sheet</button>
							</form>

							<button data-toggle="modal" data-target="#result_{{$lecturer_course->course->id}}" class="btn btn-info" style="color: white">
								<i class="fa fa-upload"></i>Uplaod Result
							</button>
							@include('lecturer::course.upload')
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
                 <div class="alert alert-danger">Sorry no course is been allocated to you for {{currentSession()->name}} Session please contact the exam officer or the school coodinator thanks </div>
			@endif
		</div>
	</div>
</div> 
@endsection
