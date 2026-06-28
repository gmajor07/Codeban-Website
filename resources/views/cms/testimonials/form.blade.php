<div class="ve-cms-form-grid">
    <div class="ve-cms-field"><label for="client_name">Client Name</label><input id="client_name" name="client_name" value="{{ old('client_name', $testimonial->client_name) }}" type="text" required></div>
    <div class="ve-cms-field"><label for="company">Company</label><input id="company" name="company" value="{{ old('company', $testimonial->company) }}" type="text"></div>
    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $testimonial->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $testimonial->status) === 'inactive')>Inactive</option></select></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="message">Message</label><textarea id="message" name="message" rows="6" required>{{ old('message', $testimonial->message) }}</textarea></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="image">Client Image</label><input id="image" name="image" type="file" accept="image/*">@if ($testimonial->image)<div class="ve-cms-image-preview" style="background-image:url({{ asset($testimonial->image) }});"></div>@endif</div>
</div>
<div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Testimonial</button></div>
