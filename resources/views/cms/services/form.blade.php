<div class="ve-cms-form-grid">
    <div class="ve-cms-field">
        <label for="title">Title</label>
        <input id="title" name="title" value="{{ old('title', $service->title) }}" type="text" required>
    </div>
    <div class="ve-cms-field">
        <label for="slug">Slug</label>
        <input id="slug" name="slug" value="{{ old('slug', $service->slug) }}" type="text" placeholder="auto-generated if empty">
    </div>
    <div class="ve-cms-field">
        <label for="status">Status</label>
        <select id="status" name="status">
            <option value="active" @selected(old('status', $service->status) === 'active')>Active</option>
            <option value="inactive" @selected(old('status', $service->status) === 'inactive')>Inactive</option>
        </select>
    </div>
    <div class="ve-cms-field">
        <label for="icon">Icon Class</label>
        <input id="icon" name="icon" value="{{ old('icon', $service->icon) }}" type="text" placeholder="fa fa-shield">
    </div>
    <div class="ve-cms-field">
        <label for="image">Service Image</label>
        <input id="image" name="image" type="file" accept="image/*" data-image-preview="service-image-preview">
        <div id="service-image-preview" class="ve-cms-image-preview {{ $service->image ? '' : 'is-hidden' }}" @if ($service->image) style="background-image:url({{ asset($service->image) }});" @endif></div>
    </div>
    <div class="ve-cms-field">
        <label for="sort_order">Sort Order</label>
        <input id="sort_order" name="sort_order" value="{{ old('sort_order', $service->sort_order) }}" type="number" min="0">
    </div>
    <div class="ve-cms-field ve-cms-field-wide">
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="6">{{ old('description', $service->description) }}</textarea>
    </div>
</div>

<div class="ve-cms-form-actions">
    <button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Service</button>
</div>

@include('cms.partials.image-preview-script')
