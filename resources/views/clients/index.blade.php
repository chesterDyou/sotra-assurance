<x-layouts::app :title="__('Clients')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">

        {{-- En-tête --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-white">
                    Clients
                </h1>

                <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">
                    Gérez les clients de SOTRA ASSUR.
                </p>
            </div>

            <a
                href="{{ route('clients.create') }}"
                class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-700 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200"
            >
                + Nouveau client
            </a>
        </div>

        {{-- Message de succès --}}
        @if (session('success'))
            <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800 dark:border-green-800 dark:bg-green-950 dark:text-green-200">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tableau --}}
        <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900">

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">

                    <thead class="border-b border-zinc-200 bg-zinc-50 text-xs uppercase text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Client</th>
                            <th class="px-6 py-4">Type</th>
                            <th class="px-6 py-4">Téléphone</th>
                            <th class="px-6 py-4">Email</th>
                            <th class="px-6 py-4">Statut</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">

                        @forelse ($clients as $client)

                            <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800/50">

                                {{-- Client --}}
                                <td class="px-6 py-4">
                                    <div class="font-medium text-zinc-900 dark:text-white">
                                        @if ($client->type === 'entreprise')
                                            {{ $client->raison_sociale ?: 'Entreprise sans nom' }}
                                        @else
                                            {{ trim(($client->prenom ?? '') . ' ' . ($client->nom ?? '')) ?: 'Client sans nom' }}
                                        @endif
                                    </div>

                                    @if ($client->numero_identification)
                                        <div class="mt-1 text-xs text-zinc-500">
                                            {{ $client->numero_identification }}
                                        </div>
                                    @endif
                                </td>

                                {{-- Type --}}
                                <td class="px-6 py-4">
                                    @if ($client->type === 'entreprise')
                                        Entreprise
                                    @else
                                        Particulier
                                    @endif
                                </td>

                                {{-- Téléphone --}}
                                <td class="px-6 py-4 text-zinc-600 dark:text-zinc-300">
                                    {{ $client->telephone ?: '—' }}
                                </td>

                                {{-- Email --}}
                                <td class="px-6 py-4 text-zinc-600 dark:text-zinc-300">
                                    {{ $client->email ?: '—' }}
                                </td>

                                {{-- Statut --}}
                                <td class="px-6 py-4">
                                    @if ($client->statut === 'actif')
                                        <span class="inline-flex rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                            Actif
                                        </span>
                                    @else
                                        <span class="inline-flex rounded-full bg-zinc-100 px-2.5 py-1 text-xs font-medium text-zinc-600 dark:bg-zinc-800 dark:text-zinc-400">
                                            Inactif
                                        </span>
                                    @endif
                                </td>

                                {{-- Actions --}}
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">

                                        <a
                                            href="{{ route('clients.show', $client) }}"
                                            class="rounded-md px-3 py-1.5 text-xs font-medium text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800"
                                        >
                                            Voir
                                        </a>

                                        <a
                                            href="{{ route('clients.edit', $client) }}"
                                            class="rounded-md px-3 py-1.5 text-xs font-medium text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800"
                                        >
                                            Modifier
                                        </a>

                                        <form
                                            method="POST"
                                            action="{{ route('clients.destroy', $client) }}"
                                            onsubmit="return confirm('Voulez-vous vraiment supprimer ce client ?');"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="rounded-md px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-950"
                                            >
                                                Supprimer
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center">
                                    <div class="text-sm font-medium text-zinc-900 dark:text-white">
                                        Aucun client
                                    </div>

                                    <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">
                                        Commencez par ajouter votre premier client.
                                    </p>

                                    <a
                                        href="{{ route('clients.create') }}"
                                        class="mt-4 inline-flex rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-700 dark:bg-white dark:text-zinc-900"
                                    >
                                        + Ajouter un client
                                    </a>
                                </td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</x-layouts::app>