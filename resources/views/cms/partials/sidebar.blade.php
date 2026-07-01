<aside class="ve-cms-sidebar">
    <a href="{{ route('cms.dashboard') }}" class="ve-cms-brand">
        <span class="ve-logo-icon">C</span>
        <span>Codeban CMS</span>
    </a>
    <nav class="ve-cms-nav">
        <a href="{{ route('cms.dashboard') }}" @class(['active' => request()->routeIs('cms.dashboard')])><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="{{ route('cms.settings.edit') }}" @class(['active' => request()->routeIs('cms.settings.*')])><i class="fa fa-cog"></i> Site Settings</a>
        <a href="{{ route('cms.page-images.index') }}" @class(['active' => request()->routeIs('cms.page-images.*')])><i class="fa fa-picture-o"></i> Page Images</a>
        <a href="{{ route('cms.about-sections.index') }}" @class(['active' => request()->routeIs('cms.about-sections.*')])><i class="fa fa-info-circle"></i> About Sections</a>
        <a href="{{ route('cms.services.index') }}" @class(['active' => request()->routeIs('cms.services.*')])><i class="fa fa-briefcase"></i> Services</a>
        <a href="{{ route('cms.products.index') }}" @class(['active' => request()->routeIs('cms.products.*', 'cms.categories.*')])><i class="fa fa-tags"></i> Products</a>
        <a href="{{ route('cms.clients.index') }}" @class(['active' => request()->routeIs('cms.clients.*')])><i class="fa fa-users"></i> Clients</a>
        <a href="{{ route('cms.faqs.index') }}" @class(['active' => request()->routeIs('cms.faqs.*')])><i class="fa fa-question-circle"></i> FAQs</a>
        <a href="{{ route('cms.testimonials.index') }}" @class(['active' => request()->routeIs('cms.testimonials.*')])><i class="fa fa-star"></i> Testimonials</a>
        <a href="{{ route('cms.gallery.index') }}" @class(['active' => request()->routeIs('cms.gallery.*')])><i class="fa fa-image"></i> Gallery</a>
        <a href="{{ route('cms.messages.index') }}" @class(['active' => request()->routeIs('cms.messages.*')])><i class="fa fa-envelope"></i> Messages</a>
        @if (auth()->user()?->role === 'admin')
            <a href="{{ route('cms.users.index') }}" @class(['active' => request()->routeIs('cms.users.*')])><i class="fa fa-user-circle"></i> Users</a>
        @endif
    </nav>
</aside>
