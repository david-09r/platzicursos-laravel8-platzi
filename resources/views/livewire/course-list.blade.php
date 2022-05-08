<div class="grid grid-cols-3 gap mt-8">
    @foreach($courses as $course)
        <x-course-card :course="$course"/>
    @endforeach
</div>
