<x-layouts::app :title="__('Détails du client')">

    <div class="flex h-full w-full flex-1 flex-col gap-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-white">
                    Détails du client
                </h1>

                <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">
                    Informations du client.
                </p>
            </div>

            <div class="flex gap-2">
                <a
                    href="{{ route('clients.edit', $client) }}"
                    class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-700 dark:bg-white dark:text-zinc-900"
                >
                    Modifier
                </a>

                <a
                    href="{{ route('clients.index') }}"
                    class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-100 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800"
                >
                    Retour
                </a>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">

            <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900">

                <h2 class="mb-4 text-lg font-semibold text-zinc-900 dark:text-white">
                    Identité
                </h2>

                <div class="space-y-4">

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">Type</p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->type === 'entreprise' ? 'Entreprise' : 'Particulier' }}
                        </p>
                    </div>

                    @if ($client->type === 'entreprise')

                        <div>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">
                                Raison sociale
                            </p>
                            <p class="font-medium text-zinc-900 dark:text-white">
                                {{ $client->raison_sociale ?: '—' }}
                            </p>
                        </div>

                    @else

                        <div>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">
                                Nom complet
                            </p>
                            <p class="font-medium text-zinc-900 dark:text-white">
                                {{ trim(($client->prenom ?? '') . ' ' . ($client->nom ?? '')) ?: '—' }}
                            </p>
                        </div>

                        <div>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">
                                Date de naissance
                            </p>
                            <p class="font-medium text-zinc-900 dark:text-white">
                                {{ $client->date_naissance ? $client->date_naissance->format('d/m/Y') : '—' }}
                            </p>
                        </div>

                    @endif

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Numéro d'identification
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->numero_identification ?: '—' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Statut
                        </p>

                        @if ($client->statut === 'actif')
                            <span class="inline-flex rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                Actif
                            </span>
                        @else
                            <span class="inline-flex rounded-full bg-zinc-100 px-2.5 py-1 text-xs font-medium text-zinc-600 dark:bg-zinc-800 dark:text-zinc-400">
                                Inactif
                            </span>
                        @endif
                    </div>

                </div>

            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900">

                <h2 class="mb-4 text-lg font-semibold text-zinc-900 dark:text-white">
                    Coordonnées
                </h2>

                <div class="space-y-4">

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Téléphone
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->telephone ?: '—' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Téléphone secondaire
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->telephone_secondaire ?: '—' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Email
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->email ?: '—' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Adresse
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->adresse ?: '—' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Ville
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->ville ?: '—' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400">
                            Pays
                        </p>
                        <p class="font-medium text-zinc-900 dark:text-white">
                            {{ $client->pays ?: '—' }}
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layouts::app>