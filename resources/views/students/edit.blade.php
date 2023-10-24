<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Registered Student</h1>
    <form method="post" action="{{route('student.update',['student'=>$student])}}">
        @csrf
        @method('put')
        <div>
            <label>Student ID</label>
            <input type="text" name="studentID" placeholder="studentID" value="{{$student->studentID}}"/>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$student->name}}"/>
        </div>
        <div>
            <label>Course</label>
            <input type="text" name="course" placeholder="Course" value="{{$student->course}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>

    </form>
</body>
</html>