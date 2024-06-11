<div class="col-lg-5 mil-mb-30">
        <input class="mil-rounded-input mil-text-center mil-mb-5" wire:model="email" type="text" placeholder="Your email address">
        <button class="mil-button mil-accent-bg mil-fw" wire:click="register"><span>Registrate</span></button>
</div>

@push('scripts')
    <script>
        window.addEventListener('listo', event => {
            Swal.fire({
                title: "newslatter",
                text: "Email ya registrado",
                icon: "success"
            });
        })
    </script>
@endpush