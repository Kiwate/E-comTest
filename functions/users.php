<?php


/**
 * setUser
 * Ajoute un utilisateur en base de deonnées et retourne l'id de la
 * nouvelle insertion.
 * @param {String} $firstname prénom de l'utilisateur
 * @param {String} $lastname Nom de l'utilisateur
 * @param {String} $email Adresse email de l'utilisateur
 * @param {String} $password Mot de passe de l'utilisateur
 * @param {String} $nickname Pseudo de l'utilisateur
 * @param {String} $genre Genre de l'utilisateur (M | F)
 * @param {String} $birthday Date de naissance de l'utilisateur
 * @param {String} $role Role de l'utilisateur (défaut: user)
 * @return {Integer} ID de l'enregistrement de l'utilisateur
 */
function setUser($login, $email, $password, $role="user") {

    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO user (`login`, `role`, `email`, `password`, `signup_datetime`)
                                                VALUES (:login, :role,  :email,  :password, NOW())");

    // BindValue
    $query->bindParam(':firstname', $login, PDO::PARAM_STR);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);

    // Executiuon de la requete
    $query->execute();

    // Récupération du dernier enregistrement (ID)
    return $bdd->lastInsertId();
}


/**
 * getUser
 * Récupère et retourne les information d'UN utilisateur depuis la BDD
 * @param {Integer} $id Id de l'utilisateur
 * @return {Object} retourne les données de l'utilisateur, sous forme d'obnjet
 */
function getUser($id) {

    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Préparation de la requete
    $query = $bdd->prepare("SELECT id, login, role FROM user WHERE id=:idUser");

    $query->bindValue(":idUser", $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();

    return $result;
}
function getUserByLogin($login) {

   // On définit $bdd comme etant une variable globale
   global $bdd;

   // Préparation de la requete
   $query = $bdd->prepare("SELECT id, login, password, role FROM user WHERE login=:loginUser");

   $query->bindValue(":loginUser", $login, PDO::PARAM_STR);
   $query->execute();

   $result = $query->fetch(PDO::FETCH_OBJ);
   $query->closeCursor();

   return $result;
}

