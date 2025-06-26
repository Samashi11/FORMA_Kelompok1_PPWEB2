<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B600%3B700%3B800"
        onload="this.rel='stylesheet'" rel="stylesheet" />
    <link as="style" href="https://fonts.googleapis.com/icon?family=Material+Icons" onload="this.rel='stylesheet'"
        rel="stylesheet">
    <title>FORMA - Student Organization Forum</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root {
            --primary-color: #1978e5;
            --text-primary: #0e141b;
            --text-secondary: #4e7097;
            --surface-background: #f8fafc;
            --card-background: #ffffff;
            --border-color: #e2e8f0;
        }

        body {
            font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;
        }

        .nav-link {
            @apply text-[var(--text-primary)] text-sm font-medium leading-normal transition-colors hover:text-[var(--primary-color)];
        }

        .nav-link {
            @apply text-[var(--text-primary)] hover:text-[var(--primary-color)] transition-colors;
        }

        .active-nav-link {
            @apply text-[var(--primary-color)] font-semibold;
        }

        .tab-link {
            @apply flex flex-col items-center justify-center border-b-[3px] pb-[13px] pt-4 text-sm font-bold tracking-[0.015em] transition-colors;
        }

        .active-tab {
            @apply border-b-[var(--primary-color)] text-[var(--text-primary)];
        }

        .inactive-tab {
            @apply border-b-transparent text-[var(--text-secondary)] hover:text-[var(--text-primary)] hover:border-b-slate-300;
        }

        .info-grid-item {
            @apply col-span-2 grid grid-cols-subgrid border-t border-t-slate-200 py-5;
        }

        .info-label {
            @apply text-[var(--text-secondary)] text-sm font-normal leading-normal;
        }

        .info-value {
            @apply text-[var(--text-primary)] text-sm font-normal leading-normal;
        }

        .social-icon-container {
            @apply flex flex-col items-center gap-2 rounded-lg bg-[var(--background-secondary)] p-3 text-center w-24 hover:shadow-md transition-shadow cursor-pointer;
        }

        .social-icon-circle {
            @apply rounded-full bg-[var(--secondary-color)] p-3 group-hover:bg-[var(--primary-color)] transition-colors;
        }

        .social-icon {
            @apply text-[var(--text-primary)] group-hover:text-white transition-colors;
        }

        .material-icons {
            vertical-align: middle;
        }

        .btn-primary {
            @apply bg-[var(--primary-color)] text-white hover:bg-opacity-90 transition-colors;
        }

        .card {
            @apply bg-[var(--card-background)] rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl;
        }

        .section-title {
            @apply text-[var(--text-primary)] text-2xl font-bold leading-tight tracking-[-0.015em] md:text-3xl;
        }

        .input-search-icon {
            @apply text-[var(--text-secondary)] flex items-center justify-center pl-4;
        }

        .input-search {
            @apply form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden text-[var(--text-primary)] focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent border-[var(--border-color)] bg-white h-full placeholder:text-[var(--text-secondary)] px-4 text-base font-normal leading-normal;
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @livewireStyles --}}
    <script>
        document.querySelectorAll('.tab-link').forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();

                // Atur active/inactive tab
                document.querySelectorAll('.tab-link').forEach(t => {
                    t.classList.remove('active-tab');
                    t.classList.add('inactive-tab');
                });
                this.classList.add('active-tab');
                this.classList.remove('inactive-tab');

                // Tampilkan konten tab yang sesuai
                const target = this.getAttribute('data-tab');
                document.querySelectorAll('.tab-pane').forEach(pane => {
                    pane.classList.add('hidden');
                });
                document.getElementById(target).classList.remove('hidden');
            });
        });
    </script>

</head>
