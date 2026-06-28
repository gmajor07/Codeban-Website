<div class="ve-cms-form-grid">
    <div class="ve-cms-field"><label for="name">Name</label><input id="name" name="name" value="{{ old('name', $product->name) }}" type="text" required></div>
    <div class="ve-cms-field"><label for="slug">Slug</label><input id="slug" name="slug" value="{{ old('slug', $product->slug) }}" type="text" placeholder="auto-generated if empty"></div>
    <div class="ve-cms-field"><label for="category_id">Category</label><select id="category_id" name="category_id"><option value="">Uncategorized</option>@foreach ($categories as $category)<option value="{{ $category->id }}" @selected((string) old('category_id', $product->category_id) === (string) $category->id)>{{ $category->name }}</option>@endforeach</select></div>
    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $product->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $product->status) === 'inactive')>Inactive</option></select></div>
    <div class="ve-cms-field"><label class="ve-cms-check ve-cms-check-field"><input type="checkbox" name="featured" value="1" @checked(old('featured', $product->featured))><span>Featured product</span></label></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="description">Description</label><textarea id="description" name="description" rows="6">{{ old('description', $product->description) }}</textarea></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="image">Product Image</label><input id="image" name="image" type="file" accept="image/*">@if ($product->image)<div class="ve-cms-image-preview" style="background-image:url({{ asset($product->image) }});"></div>@endif</div>
</div>
<div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Product</button></div>
