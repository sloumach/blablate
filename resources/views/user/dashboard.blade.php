@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Liste des salons (colonne de gauche) -->
        <div class="col-md-2">
            <h5>Salons</h5>
            <div class="salon-list border">
                <div class="salon-item">Général</div>
                <div class="salon-item">Salon 1</div>
                <div class="salon-item">Salon 2</div>
                <!-- Ajouter d'autres salons ici -->
            </div>
        </div>

        <!-- Zone de chat (colonne centrale) -->
        <div class="col-md-8">
            <h5>Salon Général</h5>
            <div class="chat-box border">
                <!-- Affichage des messages -->
                <div class="message-item">
                    <span class="username">Utilisateur 1:</span>
                    <span class="message">Bonjour à tous!</span>
                    <span class="timestamp">12:34</span>
                </div>
                <div class="message-item">
                    <span class="username">Utilisateur 2:</span>
                    <span class="message">Salut ! Comment ça va ?</span>
                    <span class="timestamp">12:35</span>
                </div>
                <!-- Ajouter d'autres messages ici -->
            </div>

            <!-- Zone de saisie de message -->
            <div class="input-group">
                <textarea class="form-control message-input" placeholder="Tapez votre message..."></textarea>
                <button class="btn btn-primary" type="button">Envoyer</button>
            </div>
        </div>

        <!-- Liste des utilisateurs connectés (colonne de droite) -->
        <div class="col-md-2">
            <h5>Utilisateurs connectés</h5>
            <div class="user-list border">
                <div class="user-item">Utilisateur 1</div>
                <div class="user-item">Utilisateur 2</div>
                <div class="user-item">Utilisateur 3</div>
                <!-- Ajouter d'autres utilisateurs ici -->
            </div>
        </div>
    </div>
</div>
@endsection
