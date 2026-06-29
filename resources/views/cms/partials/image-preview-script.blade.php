<script>
    document.querySelectorAll('[data-image-preview]').forEach((input) => {
        input.addEventListener('change', () => {
            const preview = document.getElementById(input.dataset.imagePreview);
            const file = input.files && input.files[0];

            if (!preview || !file) {
                return;
            }

            preview.style.backgroundImage = `url(${URL.createObjectURL(file)})`;
            preview.classList.remove('is-hidden');
        });
    });
</script>
