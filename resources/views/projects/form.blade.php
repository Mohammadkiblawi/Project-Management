@csrf
<div class="form-group">
    <label for="title" class="form-label">عنوان المشروع</label>
    <!-- we can use this method  {{$project->title  ?? ''}} -->
    <input type="text" name="title" class="form-control" id="title" value="{{$project->title }}">
    @error('title')
    <div class="text-danger">
        <small>{{$message}}</small>
    </div>

    @enderror

</div>
<div class="form-group">
    <label for="description" class="form-label">وصف المشروع</label>
    <!-- we can use this method  {{$project->description  ?? ''}} -->
    <textarea name="description" class="form-control" id="description">{{$project->description}}</textarea>
    @error('description')
    <div class="text-danger">
        <small>{{$message}}</small>
    </div>

    @enderror
</div>