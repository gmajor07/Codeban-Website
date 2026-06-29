<div class="ve-cms-form-grid">
    <div class="ve-cms-field"><label for="name">Client Name</label><input id="name" name="name" value="{{ old('name', $client->name) }}" type="text" required></div>
    <div class="ve-cms-field"><label for="website">Website</label><input id="website" name="website" value="{{ old('website', $client->website) }}" type="text" placeholder="https://example.com"></div>
    <div class="ve-cms-field"><label for="sort_order">Sort Order</label><input id="sort_order" name="sort_order" value="{{ old('sort_order', $client->sort_order) }}" type="number" min="0"></div>
    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $client->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $client->status) === 'inactive')>Inactive</option></select></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="logo">Client Logo</label><input id="logo" name="logo" type="file" accept="image/*" data-image-preview="client-logo-preview"><div id="client-logo-preview" class="ve-cms-image-preview {{ $client->logo ? '' : 'is-hidden' }}" @if ($client->logo) style="background-image:url({{ asset($client->logo) }});" @endif></div></div>
</div>
<div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Client</button></div>
@include('cms.partials.image-preview-script')
