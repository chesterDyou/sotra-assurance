<x-layouts::app :title="__('Modifier le client')">

    <div class="flex h-full w-full flex-1 flex-col gap-6">

        <div>
            <flux:heading size="xl">Modifier le client</flux:heading>

            <flux:text class="mt-2">
                Modifier les informations de ce client.
            </flux:text>
        </div>

        <form method="POST" action="{{ route('clients.update', $client) }}" class="space-y-6">

            @csrf
            @method('PUT')

            <div class="grid gap-6 md:grid-cols-2">

                <flux:select name="type" label="Type de client">
                    <flux:select.option value="particulier" :selected="$client->type === 'particulier'">
                        Particulier
                    </flux:select.option>

                    <flux:select.option value="entreprise" :selected="$client->type === 'entreprise'">
                        Entreprise
                    </flux:select.option>
                </flux:select>

                <flux:select name="statut" label="Statut">
                    <flux:select.option value="actif" :selected="$client->statut === 'actif'">
                        Actif
                    </flux:select.option>

                    <flux:select.option value="inactif" :selected="$client->statut === 'inactif'">
                        Inactif
                    </flux:select.option>
                </flux:select>

                <flux:input
                    name="nom"
                    label="Nom"
                    value="{{ old('nom', $client->nom) }}"
                />

                <flux:input
                    name="prenom"
                    label="Prénom"
                    value="{{ old('prenom', $client->prenom) }}"
                />

                <flux:input
                    name="raison_sociale"
                    label="Raison sociale"
                    value="{{ old('raison_sociale', $client->raison_sociale) }}"
                />

                <flux:input
                    name="email"
                    type="email"
                    label="Email"
                    value="{{ old('email', $client->email) }}"
                />

                <flux:input
                    name="telephone"
                    label="Téléphone"
                    value="{{ old('telephone', $client->telephone) }}"
                />

                <flux:input
                    name="telephone_secondaire"
                    label="Téléphone secondaire"
                    value="{{ old('telephone_secondaire', $client->telephone_secondaire) }}"
                />

                <flux:input
                    name="ville"
                    label="Ville"
                    value="{{ old('ville', $client->ville) }}"
                />

                <flux:input
                    name="pays"
                    label="Pays"
                    value="{{ old('pays', $client->pays) }}"
                />

                <flux:input
                    name="numero_identification"
                    label="Numéro d'identification"
                    value="{{ old('numero_identification', $client->numero_identification) }}"
                />

                <flux:input
                    name="date_naissance"
                    type="date"
                    label="Date de naissance"
                    value="{{ old('date_naissance', $client->date_naissance?->format('Y-m-d')) }}"
                />

            </div>

            <flux:textarea
                name="adresse"
                label="Adresse"
            >{{ old('adresse', $client->adresse) }}</flux:textarea>

            <div class="flex gap-3">

                <flux:button
                    type="submit"
                    variant="primary"
                >
                    Enregistrer les modifications
                </flux:button>

                <flux:button
                    :href="route('clients.show', $client)"
                    wire:navigate
                >
                    Annuler
                </flux:button>

            </div>

        </form>

    </div>

</x-layouts::app>