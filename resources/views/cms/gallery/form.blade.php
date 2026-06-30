<div class="ve-cms-form-grid">
    <div class="ve-cms-field"><label for="title">Title</label><input id="title" name="title" value="{{ old('title', $galleryImage->title) }}" type="text"></div>
    <div class="ve-cms-field">
        <label for="category">Category</label>
        <select id="category" name="category" required>
            <option value="">Select category</option>
            @foreach ($galleryCategories as $category)
                <option value="{{ $category }}" @selected(old('category', $galleryImage->category) === $category)>{{ $category }}</option>
            @endforeach
        </select>
    </div>
    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $galleryImage->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $galleryImage->status) === 'inactive')>Inactive</option></select></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="image">Gallery Image</label><input id="image" name="image" type="file" accept="image/*" data-image-preview="gallery-image-preview" @required(! $galleryImage->exists)><div id="gallery-image-preview" class="ve-cms-image-preview {{ $galleryImage->image ? '' : 'is-hidden' }}" @if ($galleryImage->image) style="background-image:url({{ asset($galleryImage->image) }});" @endif></div></div>
</div>
<div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Gallery Image</button></div>
@include('cms.partials.image-preview-script')
