
<li>
    <a href="#">Admission</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.student.admission.create')}}">New Admission</a>
        </li>
        <li>
            <a href="{{route('exam.officer.student.admission.index')}}">View Student Detail</a>
        </li>
    </ul>
</li>
<li>
    <a href="#">Graduation</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.graduation.graduate.index')}}">Grduated Student</a>
        </li>
        <li>
            <a href="{{route('exam.officer.graduation.spill.index')}}">Spill Student</a>
        </li>
    </ul>
</li>
<li><a href="{{route('exam.officer.department.course.allocation.index')}}">Courses Allocation</a></li>
<li>
    <a href="#">Courses</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.department.course.create')}}">Register Course</a>
        </li>
        <li>
            <a href="#">Upload Courses</a>
        </li>
        
        <li>
            <a href="{{route('exam.officer.department.course.index')}}">View Courses</a>
        </li>
    </ul>
</li>

<li>
    <a href="#">Results</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.result.scoresheet.download.index')}}">
                Download Course Score Sheet
            </a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.scoresheet.upload.index')}}">
                Upload Course Score Sheet
            </a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.student.index')}}">Check Student Results</a>
        </li>
        <li>
            <a href="#">View Courses Results Statistics</a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.course.index')}}">View Course Result</a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.vetting.index')}}">View AB Format</a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.student.remark.index')}}">Register EMC Remarks</a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.student.wave.index')}}">Wave Student Result</a>
        </li>
    </ul>
</li>


