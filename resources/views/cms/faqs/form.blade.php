<div class="ve-cms-form-grid">
    <div class="ve-cms-field"><label for="page">Page</label><select id="page" name="page"><option value="services" @selected(old('page', $faq->page) === 'services')>Services</option><option value="clients" @selected(old('page', $faq->page) === 'clients')>Clients</option></select></div>
    <div class="ve-cms-field"><label for="sort_order">Sort Order</label><input id="sort_order" name="sort_order" value="{{ old('sort_order', $faq->sort_order) }}" type="number" min="0"></div>
    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $faq->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $faq->status) === 'inactive')>Inactive</option></select></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="question">Question</label><input id="question" name="question" value="{{ old('question', $faq->question) }}" type="text" required></div>
    <div class="ve-cms-field ve-cms-field-wide"><label for="answer">Answer</label><textarea id="answer" name="answer" rows="7" required>{{ old('answer', $faq->answer) }}</textarea></div>
</div>
<div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save FAQ</button></div>
