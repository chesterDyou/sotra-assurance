<x-layouts::app :title="__('Ajouter un client')">

    <div class="flex h-full w-full flex-1 flex-col gap-6">

        <div>
            <flux:heading size="xl">Ajouter un client</flux:heading>
            <flux:text class="mt-2">
                Enregistrer un nouveau client dans SOTRA ASSUR.
            </flux:text>
        </div>

        <form method="POST" action="{{ route('clients.store') }}" class="space-y-6">
            @csrf

            <div class="grid gap-6 md:grid-cols-2">

                <flux:select name="type" label="Type de client">
                    <flux:select.option value="particulier">
                        Particulier
                    </flux:select.option>
                    <flux:select.option value="entreprise">
                        Entreprise
                    </flux:select.option>
                </flux:select>

                <flux:select name="statut" label="Statut">
                    <flux:select.option value="actif">
                        Actif
                    </flux:select.option>
                    <flux:select.option value="inactif">
                        Inactif
                    </flux:select.option>
                </flux:select>

                <flux:input
                    name="nom"
                    label="Nom"
                    value="{{ old('nom') }}"
                />

                <flux:input
                    name="prenom"
                    label="Prénom"
                    value="{{ old('prenom') }}"
                />

                <flux:input
                    name="raison_sociale"
                    label="Raison sociale"
                    value="{{ old('raison_sociale') }}"
                />

                <flux:input
                    name="email"
                    type="email"
                    label="Email"
                    value="{{ old('email') }}"
                />

                <flux:input
                    name="telephone"
                    label="Téléphone"
                    value="{{ old('telephone') }}"
                />

                <flux:input
                    name="telephone_secondaire"
                    label="Téléphone secondaire"
                    value="{{ old('telephone_secondaire') }}"
                />

                <flux:input
                    name="ville"
                    label="Ville"
                    value="{{ old('ville') }}"
                />

                <flux:input
                    name="pays"
                    label="Pays"
                    value="{{ old('pays', 'Côte d’Ivoire') }}"
                />

                <flux:input
                    name="numero_identification"
                    label="Numéro d'identification"
                    value="{{ old('numero_identification') }}"
                />

                <flux:input
                    name="date_naissance"
                    type="date"
                    label="Date de naissance"
                    value="{{ old('date_naissance') }}"
                />

            </div>

            <flux:textarea
                name="adresse"
                label="Adresse"
            >{{ old('adresse') }}</flux:textarea>

            <flux:textarea
                name="notes"
                label="Notes"
            >{{ old('notes') }}</flux:textarea>

            <div class="flex gap-3">
                <flux:button
                    type="submit"
                    variant="primary"
                >
                    Enregistrer le client
                </flux:button>

                <flux:button
                    :href="route('clients.index')"
                    wire:navigate
                >
                    Annuler
                </flux:button>
            </div>

        </form>

    </div>

</x-layouts::app>