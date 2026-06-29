<div class="ve-cms-form-grid">
    <div class="ve-cms-field"><label for="name">Name</label><input id="name" name="name" value="{{ old('name', $category->name) }}" type="text" required></div>
    <div class="ve-cms-field"><label for="slug">Slug</label><input id="slug" name="slug" value="{{ old('slug', $category->slug) }}" type="text" placeholder="auto-generated if empty"></div>
    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $category->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $category->status) === 'inactive')>Inactive</option></select></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="description">Description</label><textarea id="description" name="description" rows="4">{{ old('description', $category->description) }}</textarea></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="image">Category Image</label><input id="image" name="image" type="file" accept="image/*" data-image-preview="category-image-preview"><div id="category-image-preview" class="ve-cms-image-preview {{ $category->image ? '' : 'is-hidden' }}" @if ($category->image) style="background-image:url({{ asset($category->image) }});" @endif></div></div>
</div>
<div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Category</button></div>
@include('cms.partials.image-preview-script')
