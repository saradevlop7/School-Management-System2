# 📘 EduSync - Système d'Authentification PHP

## 🎯 Objectif

Créer un système d'authentification simple en PHP permettant :

* L'inscription d'un utilisateur
* La connexion (Login)
* La gestion des sessions
* La protection des pages (Dashboard)

---

## 🧱 Structure du projet

```
edusync-backend/
│
├── public/
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── dashboard.php
│
├── scripts/
│   ├── authprocess.php
│   └── logout.php
│
├── includes/
│
└── assets/
```

---

## ⚙️ Fonctionnalités

### 🟢 Inscription (Register)

* Formulaire avec Nom, Prénom, Email, Mot de passe
* Validation des champs
* Vérification du format email
* Protection XSS avec `htmlspecialchars()`

---

### 🔵 Connexion (Login)

* Vérification des identifiants (simulation sans base de données)
* Redirection en cas d'erreur
* Création d'une session utilisateur

---

### 🟡 Session

* Utilisation de `$_SESSION`
* Stockage des informations utilisateur :

  * Nom
  * Rôle

---

### 🔐 Protection du Dashboard

* Vérification si l'utilisateur est connecté
* Redirection vers login si non autorisé
* Affichage d’un message personnalisé :

  * Bonjour [Nom] !

---

### 🔴 Déconnexion (Logout)

* Destruction de la session
* Redirection vers la page de login

---

## 🧠 Technologies utilisées

* PHP
* HTML
* Tailwind CSS (UI)

---

## 🚀 Lancer le projet

1. Installer XAMPP / WAMP
2. Placer le dossier dans `htdocs`
3. Démarrer Apache
4. Ouvrir dans le navigateur :

```
http://localhost/edusync-backend/public/login.php
```

---

## 📌 Remarques

* Ce projet est une simulation sans base de données
* Les identifiants sont codés en dur (ex: [test@gmail.com](mailto:test@gmail.com) / 123456)
* Peut être amélioré avec MySQL + PDO